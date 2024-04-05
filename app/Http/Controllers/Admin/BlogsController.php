<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\StoreRequest;
use App\Http\Requests\Admin\Blog\UpdateRequest;
use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $title = 'Delete Blog!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $blogs = Blog::get();
        return view('screens.admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('screens.admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            $finalData = $request->sanitisedStore();
            $imageName = $request->file('blog_image')->getClientOriginalName();
            $blog = Blog::create($finalData);
            if ($blog) {
                $blog->addMedia($request->file('blog_image'))->toMediaCollection('blog_images');
                Alert::success('record added successfully...!');
                return redirect(route('blog.index'));
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
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog): View
    {
        return view('screens.admin.blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Blog $blog)
    {
        if ($request->hasFile('blog_image') && !empty($request->file('blog_image'))) {
            if ($blog->update($request->sanitisedUpdate())) {
                $blog->clearMediaCollection('blog_images');
                $blog->addMedia($request->file('blog_image'))->toMediaCollection('blog_images');
                Alert::success('record updated successfully...!');
                return redirect(route('blog.index'));
            }else {
                toast('blog did not updated...!','error');
                return back();
            }
        }else {
            if ($blog->update($request->sanitisedUpdate())) {
                Alert::success('record updated successfully...!');
                return redirect(route('blog.index'));
            }else {
                toast('blog did not updated...!','error');
                return back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if (isset($blog)) {
            $blog->delete();
            Alert::success('record deleted successfully...!');
        } else {
            Alert::error('Blog not found!');
        }
        return redirect()->route('blog.index');
    }
}
