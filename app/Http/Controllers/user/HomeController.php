<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ContactStoreRequest;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(): View
    {
        $banners = Banner::get();
        return view('screens.user.welcome',compact('banners'));
    }

    public function blogs(): View
    {
        $blogs = Blog::get();
        return view('screens.user.frontend.blogs.blogs',compact('blogs'));
    }

    public function blogDetails(Blog $blog): View
    {
        return view('screens.user.frontend.blogs.blog-detail',compact('blog'));
    }

    public function contactStore(ContactStoreRequest $request)
    {
        if (Contact::create($request->sanitisedStore())) {
            Alert::success('successfully submitted...!');
            return back();
        }else {
            toast('not submitted...!','error');
            return back();
        }
    }
}
