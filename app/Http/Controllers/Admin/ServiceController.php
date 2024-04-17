<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\StoreRequest;
use App\Http\Requests\Admin\Service\UpdateRequest;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $title = 'Delete Service!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $query = Service::query();
        if (!is_null($request->search) && is_null($request->order) && is_null($request->sort)) {
            $services = $query->where('service_name', 'like', "%$request->search%")->paginate();
        } elseif (!is_null($request->search) && !is_null($request->order) && is_null($request->sort)) {
            $services = $query->where('service_name', 'like', "%$request->search%")
                ->order($request->order)
                ->paginate();
        } elseif (!is_null($request->search) && is_null($request->order) && !is_null($request->sort)) {
            $services = $query->where('service_name', 'like', "%$request->search%")
                ->paginate($request->sort);
        } elseif (is_null($request->search) && !is_null($request->order) && is_null($request->sort)) {
            $services = $query->order($request->order)->paginate();
        } elseif (is_null($request->search) && !is_null($request->order) && !is_null($request->sort)) {
            $services = $query->order($request->order)->paginate($request->sort);
        } elseif (is_null($request->search) && is_null($request->order) && !is_null($request->sort)) {
            $services = $query->paginate($request->sort);
        } elseif (!is_null($request->search) && !is_null($request->order) && !is_null($request->sort)) {
            $services = $query->where('service_name', 'like', "%$request->search%")
                ->order($request->order)
                ->paginate($request->sort);
        } else {
            $services = $query->paginate(2);
        }
        return view('screens.admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('screens.admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            $service = Service::create($request->sanitisedStore());
            if ($service) {
                $service->addMedia($request->file('service_banner'))->toMediaCollection('service_banners');
                Alert::success('record added successfully...!');
                return redirect(route('service.index'));
            } else {
                toast('record didn\'t created...!', 'error');
                return back();
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service): View
    {
        return view('screens.admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Service $service)
    {
        if ($request->hasFile('service_banner') && !empty($request->file('service_banner'))) {
            if ($service->update($request->sanitisedUpdate())) {
                $service->clearMediaCollection('service_banners');
                $service->addMedia($request->file('service_banner'))->toMediaCollection('service_banners');
                Alert::success('record updated successfully...!');
                return redirect(route('service.index'));
            } else {
                toast('service did not updated...!', 'error');
                return back();
            }
        } else {
            if ($service->update($request->sanitisedUpdate())) {
                Alert::success('record updated successfully...!');
                return redirect(route('service.index'));
            } else {
                toast('blog did not updated...!', 'error');
                return back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if (isset($service)) {
            $service->delete();
            Alert::success('record deleted successfully...!');
        } else {
            Alert::error('Record not found!');
        }
        return redirect()->route('service.index');
    }
}
