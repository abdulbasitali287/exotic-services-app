<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\PhoneService;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServiceBannerImage;
use App\Models\ServiceBrand;
use App\Models\ServiceContactUs;
use App\Models\ServiceFaqs;
use App\Models\ServiceReview;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function getReviews(){
        $reviews = Review::get();
        // $bannerImg = ServiceBannerImage::where('page_name', 'review')->first();
        return view('screens.user.frontend.reviews')->with(compact(['reviews']));
    }

    public function getFaqs(){
        $faqs = ServiceFaqs::get();
        $bannerImg = ServiceBannerImage::where('page_name', 'faq')->first();
        return view('screens.user.faq')->with(compact(['faqs','bannerImg']));
    }

    public function contactUs(){
        $getNo = PhoneService::first();
        $bannerImg = ServiceBannerImage::where('page_name', 'contact')->first();
        return view('screens.user.contact-us')->with(compact(['bannerImg','getNo']));
    }

    public function aboutUs(){
        $bannerImg = ServiceBannerImage::where('page_name', 'about')->first();
        return view('screens.user.about')->with(compact(['bannerImg']));
    }


    public function serviceDetail(){
        $garageServices = Service::where([
            'feature_service' => 'yes',
            'service_type' => 'serving-garage'
            ])->latest()->take(9)->get();
        $bodyShopServices = Service::where([
            'feature_service' => 'yes',
            'service_type' => 'body-shop'
            ])->latest()->take(9)->get();
        $reviews = ServiceReview::latest()->take(3)->get();
        $getNo = PhoneService::first();
        $bannerImg = ServiceBannerImage::where('page_name', 'service')->first();
        return view('screens.user.services.service')->with(compact(['bannerImg','reviews','getNo','garageServices','bodyShopServices']));
    }

    public function servingGarage(){
        $reviews = ServiceReview::latest()->take(3)->get();
        $getNo = PhoneService::first();
        $bannerImg = ServiceBannerImage::where('page_name', 'service')->first();
        $services = Service::where('service_type', 'servicing-garage')->get();
        return view('screens.user.services.serving-garage')->with(compact(['bannerImg','reviews','getNo','services']));
    }

    public function bodyShop(){
        $reviews = ServiceReview::latest()->take(3)->get();
        $getNo = PhoneService::first();
        $bannerImg = ServiceBannerImage::where('page_name', 'service')->first();
        $services = Service::where('service_type', 'body-shop')->get();
        return view('screens.user.services.body-shop')->with(compact(['bannerImg','reviews','getNo','services']));
    }

    public function servicesGet($id ,$url_slug){
        $getNo = PhoneService::first();
        $getService = Service::where('id', $id)->first();
        return view('screens.user.services.new')->with(compact(['getService','getNo']));
    }

    public function brandsGet($name){
        $brand = ServiceBrand::where('brand_name', $name)->first();
        return view('screens.user.brands.new')->with(compact('brand'));
    }

    public function brandDetail(){
        $brands = ServiceBrand::get();
        $getNo = PhoneService::first();
        $bannerImg = ServiceBannerImage::where('page_name', 'brand')->first();
        return view('screens.user.brands')->with(compact(['getNo','bannerImg','brands']));
    }

    public function blogsAll(){
        $blogs = Blog::where('is_published', 1)->latest()->get();
        $bannerImg = ServiceBannerImage::where('page_name', 'brand')->first();
        return view('screens.user.blogs')->with(compact(['blogs','bannerImg']));
    }

    public function blogDetail($id, $slug){
        $blog = Blog::where(['id' => $id , 'slug' => $slug])->first();
        $bannerImg = ServiceBannerImage::where('page_name', 'brand')->first();
        $previousBlog = Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
        $nextBlog = Blog::where('id', '>', $blog->id)->orderBy('id')->first();
        return view('screens.user.blog-detail')->with(compact(['blog','bannerImg','previousBlog','nextBlog']));
    }


    public function landingPage(){
        $garageServices = Service::where([
            'feature_service' => 'yes',
            'service_type' => 'servicing-garage'
            ])->latest()->take(9)->get();
        $bodyShopServices = Service::where([
            'feature_service' => 'yes',
            'service_type' => 'body-shop'
            ])->latest()->take(9)->get();
        $brands = ServiceBrand::get();
        $reviews = ServiceReview::latest()->take(3)->get();
        $bannerImg = ServiceBannerImage::where('page_name', 'home')->first();
        return view('screens.user.welcome')->with(compact(['reviews','bannerImg','garageServices','bodyShopServices','brands']));
    }


    public function contactSubmission(Request $request)
    {
        // dd($request);

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'model' => 'required|string|max:255',
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'description' => 'required|string',
        ]);


        $contactUs = new ServiceContactUs();
        $contactUs->date = $request->date;
        $contactUs->name = $request->name;
        $contactUs->time = $request->time;
        $contactUs->model = $request->model;
        $contactUs->email = $request->email;
        $contactUs->mobile = $request->phone;
        $contactUs->description = $request->description;

        $file = $request->file('file');
        $publicPath = public_path('services/contact-us');
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($publicPath, $fileName);
        $contactUs->attachments = $fileName;
        $contactUs->save();

        return redirect()->to('/')->with('success', 'Thankyou For Contacting Us!!');
    }
}
