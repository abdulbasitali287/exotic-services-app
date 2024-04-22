<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Faqs\StoreRequest;
use App\Http\Requests\Admin\Faqs\UpdateRequest;
use App\Models\Faqs;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $title = 'Delete Faqs!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $faqs = Faqs::get();
        return view('screens.admin.faqs.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('screens.admin.faqs.create');
    }

    public function store(StoreRequest $request)
    {
        $faq = Faqs::create($request->sanitisedStore());
        if ($faq) {
            Alert::success(ucwords('record added successfully!'));
            return redirect(route('faqs.index'));
        }else {
            toast(ucwords('faq did not created!'),'error');
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faqs $faq): View
    {
        return view('screens.admin.faqs.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Faqs $faq)
    {
        if ($faq->update($request->sanitisedUpdate())) {
            Alert::success(ucwords('record updated successfully!'));
            return redirect(route('faqs.index'));
        }else {
            toast(ucwords('faq did not updated!'),'error');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faqs $faq)
    {
        if (isset($faq)) {
            $faq->delete();
            Alert::success(ucwords('record deleted successfully!'));
        } else {
            Alert::error(ucwords('faq not found!'));
        }
        return redirect()->route('faqs.index');
    }
}
