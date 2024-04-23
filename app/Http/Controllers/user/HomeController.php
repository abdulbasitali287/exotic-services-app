<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ContactStoreRequest;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(): View
    {
        $banner = Banner::first();
        $review = Review::first();
        $services = Service::get();
        return view('screens.user.frontend.welcome',compact('banner','review','services'));
    }

    public function aboutUs(): View
    {
        return view('screens.user.frontend.about');
    }

    public function industriesServed(): View
    {
        return view('screens.user.frontend.industries-surved');
    }

    public function career(): View
    {
        return view('screens.user.frontend.career');
    }

    public function contactUs(): View
    {
        return view('screens.user.frontend.contact-us');
    }

    public function blogs(): View
    {
        $blogs = Blog::where('status',1)->get();
        return view('screens.user.frontend.blogs.blogs',compact('blogs'));
    }

    public function blogDetails(Blog $blog): View
    {
        $previousPost = Blog::where('id', '<', $blog->id)->where('status',1)->orderBy('id', 'desc')->first();
        $nextPost = Blog::where('id', '>', $blog->id)->where('status',1)->orderBy('id')->first();
        return view('screens.user.frontend.blogs.blog-detail',compact('blog', 'previousPost', 'nextPost'));
    }

    public function contactStore(ContactStoreRequest $request)
    {
        if (Contact::create($request->sanitisedStore())) {
            toast('Submission received!...!','success');
            return back();
        }else {
            toast('not submitted...!','error');
            return back();
        }
    }

    public function services() : View {
        $services = Service::get();
        return view('screens.user.frontend.services.services',compact('services'));
    }

    public function serviceDetails(Service $service){
        return view('screens.user.frontend.services.service-details',compact('service'));
    }

    public function reviews(){
        $reviews = Review::paginate(6);
        return view('screens.user.frontend.reviews')->with(compact(['reviews']));
    }
}
