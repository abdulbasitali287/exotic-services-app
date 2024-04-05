<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\StoreRequest;
use App\Http\Requests\Admin\Pages\UpdateRequest;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function index(): View
    {
        $title = 'Delete Page!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $pages = Page::get();
        return view('screens.admin.pages.index',compact('pages'));
    }

    public function create(): View
    {
        return view('screens.admin.pages.create');
    }

    public function store(StoreRequest $request)
    {
        $pageData = array_merge($request->sanitisedStore(), [
            'content' => $request->content
        ]);
        $page = Page::create($pageData);
        if (isset($page)) {
            if ($request->hasFile('images') && !empty($request->file('images'))) {
                foreach ($request->file('images') as $file) {
                    $page->addMedia($file)->toMediaCollection('page_images');
                }
            }else {
                toast('request don\'t have any file or image...!','error');
                return back();
            }
            Alert::success('record added successfully...!');
            return redirect(route('page.index'));
        }else {
            toast('page did not created...!','error');
            return back();
        }
    }

    public function edit(Page $page): View
    {
        return view('screens.admin.pages.edit',compact('page'));
    }

    public function update(UpdateRequest $request,Page $page)
    {
        if ($request->hasFile('images') && !empty($request->file('images'))) {
            $pageData = array_merge($request->sanitisedUpdate(), [
                'content' => $request->content
            ]);
            $pageUpdated = $page->update($pageData);
            if ($pageUpdated) {
                $page->clearMediaCollection('images');
                foreach ($request->file('images') as $file) {
                    $page->addMedia($file)->toMediaCollection('page_images');
                }
                Alert::success('record updated successfully...!');
                return redirect(route('page.index'));
            }else {
                toast('page did not updated...!','error');
                return back();
            }
        }else {
            $pageData = array_merge($request->sanitisedUpdate(), [
                'content' => $request->content
            ]);
            $pageUpdated = $page->update($pageData);
            if ($pageUpdated) {
                Alert::success('record updated successfully...!');
                return redirect(route('page.index'));
            }else {
                toast('page did not updated...!','error');
                return back();
            }
        }
    }

    public function destroy(Page $page)
    {
        if (isset($page)) {
            $page->delete();
            Alert::success('record deleted successfully...!');
            return redirect(route('banner.index'));
        }
    }
}
