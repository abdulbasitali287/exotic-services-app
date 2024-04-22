<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Banners\StoreRequest;
use App\Http\Requests\Admin\Banners\UpdateRequest;
use App\Models\Banner;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function index(Request $request): View
    {
        $title = 'Delete Banner!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $query = Banner::query();
        if (!is_null($request->search) && is_null($request->order) && is_null($request->sort)) {
            $banners = $query->where('page', 'like', "%$request->search%")
                        ->orWhere('title','like',"%$request->search%")
                        ->paginate(5);
        }else {
            $banners = $query->paginate(5);
        }
        return view('screens.admin.banners.index',compact('banners'));
    }

    public function create(): View
    {
        return view('screens.admin.banners.create');
    }

    public function store(StoreRequest $request)
    {
        if ($request->hasFile('banner_image')) {
            $banner = Banner::create($request->sanitisedStore());
            if (isset($banner)) {
                foreach ($request->file('banner_image') as $file) {
                    $banner->addMedia($file)->toMediaCollection('banner_images');
                }
                Alert::success(ucwords('record added successfully!'));
                return redirect(route('banner.index'));
            } else {
                toast(ucwords('record not created!'), 'Error');
            }
        }
    }

    public function edit(Banner $banner): View
    {
        return view('screens.admin.banners.edit',compact('banner'));
    }

    public function update(UpdateRequest $request, Banner $banner)
    {
        if ($request->hasFile('banner_image') && !empty($request->file('banner_image'))) {
            if ($banner->update($request->sanitisedUpdate())) {
                $banner->clearMediaCollection('banner_images');
                foreach ($request->file('banner_image') as $file) {
                    $banner->addMedia($file)->toMediaCollection('banner_images');
                }
                Alert::success(ucwords('record updated successfully!'));
                return redirect(route('banner.index'));
            }else {
                toast(ucwords('banner did not updated!'),'Error');
                return back();
            }
        }else {
            if ($banner->update($request->sanitisedUpdate())) {
                Alert::success(ucwords('record updated successfully!'));
                return redirect(route('banner.index'));
            }else {
                toast(ucwords('banner did not updated!'),'Error');
                return back();
            }
        }
    }

    public function destroy(Banner $banner)
    {
        if (isset($banner)) {
            $banner->delete();
            Alert::success(ucwords('record deleted successfully!'));
            return redirect(route('banner.index'));
        }
    }
}
