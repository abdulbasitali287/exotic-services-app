@extends('layouts.app')
@section('content')
    <div class="container-fluid p-0 m-0">
        <div class="row p-0 m-0">
            <div class="col-md-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
                <img src="http://192.168.2.31:8000/admin_panel/services/service/{{ $getService->brand_banner }}"
                    alt="" class="w-75" style="height: 387px; object-fit: cover;">
            </div>
            <div class="col-6 z-0 position-absolute bg-white align-self-end ps-5 pb-5 contact-us_bannerTxt">
                <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">{{ $getService->slug }}</p>
                <h1 class="text-black display-3 fw-bold font_heading_banner pt-4 pb-4">
                    {{ $getService->service_name }}
                </h1>
            </div>
        </div>

        <div class="row mt-5 p-0 m-0 newBigScreenServices">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 ps-5 services-main__forAll">
                <h1 class="text-black display-5 font_heading">THE IMPORTANCE OF
                    {{ substr($getService->service_name, 0, 25) }}</h1>
                <p class="font mt-5 ">{!! nl2br($getService->body_description) !!}</p>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12 offset-1 pe-5 services-main__forAllAppot">
                <div class="services-sec">
                    <a href="#"><i class="fa-solid fa-phone-flip text-black ps-2 fs-4"><span
                                class="text-black fw-normal m-3 side_heading"
                                style="font-weight: 800 !important;">{{ $getNo->phone_number }}</span></span></i></a>
                    <p class="font ps-5" style="color: #777777; font-size: 16px!important;">If you have any questions, feel
                        free to call us or get free
                        appointment</p>
                    <button class=" text-white px-4 py-3 border-0 font ms-5 click-btn"
                        style="background-color: #171616;font-size: large;">GET FREE APPOINTMENT<i
                            class="fas fa-arrow-right ps-2"></i></button>
                </div>
            </div>
        </div>

        <div class="row p-0 m-0 mt-5" style="border-top: 1.5px solid black;">
            <div
                class="col-lg-12 col-md-12 col-sm-12 col-12 p-0 m-0 d-flex justify-content-center flex-wrap work_process_service font">
                <div class="border border-top-0 border-secondary-subtle p-3">
                    <i class="fa-solid fa-people-group fs-4 py-3"></i>
                    <h6>GREAT TEAM</h6>
                    <p>Our team of great mechanics and tow
                        truck operators have a combined 20+
                        years of hands on experience.</p>
                </div>
                <div class="border border-top-0 border-secondary-subtle p-3">
                    <i class="fa-solid fa-car fs-4 py-3"></i>
                    <h6>AMAZING RESULTS</h6>
                    <p>Every time you put your car in our hands
                        you know you'll get nothing short of
                        amazing results back</p>
                </div>
                <div class="border border-top-0 border-secondary-subtle p-3">
                    <i class="fa-solid fa-dollar-sign fs-4 py-3"></i>
                    <h6>COMPETATIVE PRICING</h6>
                    <p>We won't charge you an arm and a leg to
                        get you back up and running - our rates
                        are very reasonable,</p>
                </div>
            </div>
        </div>

        <div class="header1">
            <div class="row p-0 m-0 pb-5 newBigScreenServices1">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-5 ps-5 mb-5 services-forAll">
                    <h1 class="text-white display-5 fw-bold font_heading mt-5">OUR <br> SERVICES</h1>
                    <div class="row ms-3 mb-5">
                        <div class="col-10 p-3 ps-4 pb-0 pe-5 mt-4 font services-forAllCol"
                            style="color:#a9a8a8; font-size: 17px !important; border-left: 2px solid #a9a8a8;">
                            <p>{!! nl2br($getService->service_description) !!}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-5 ps-5 mb-5 diagnose-forAll">
                    <h1 class="text-white display-5 fw-bold font_heading mt-5">DIAGNOSING THE <br> ISSUE</h1>
                    <div class="row ms-3 remove-margin">
                        <div class="col-10 p-3 ps-4 pe-5 pb-0 mt-4 mb-4 font diagnose-forAllCol"
                            style="color:#a9a8a8; font-size: 17px !important; border-left: 2px solid #a9a8a8;">
                            <p>{!! nl2br($getService->diagnose_description) !!}</p>
                        </div>
                    </div>
                    <a href="{{ route('contact_us') }}" class="anchor_text1 ms-5"
                        style="color:#f3f3f3; font-size: 20px;">CONTACT US</a>
                </div>
            </div>
        </div>

        <div class="row p-0 m-0">
            <div class="col-12 col-sm-12 col-md-12 p-0 m-0 services-LastSecImg">
                <img src="/assets/service_detail1.png" alt="" class="w-75" style="height: 600px;">
            </div>
            <div class="col-md-6 col-12 col-md-12 col-sm-12 z-0 position-absolute bg-white ps-5 pb-5 services-LastSecDiv"
                style="right: 0; align-self: end;">
                <p class="my-5 font text-dark-emphasis fw-semibold px-5 mt-4 mb-4">BEST AUTO SERVICE</p>
                <h1 class="text-black display-5 fw-bold font_heading  mx-5 new-h1 pt-4 pb-4">RATED ONE OF THE THE BEST AUTO
                    SERVICE IN DUBAI</h1>
                <p class=" my-4 font text-dark-emphasis px-5" style="font-size: 15px !important;color: #777777!important">
                    Based on customer reviews - 80+ reviews and counting.</p>
                <a href="{{ route('reviews') }}" class="text-dark fw-bold ms-5 anchor_text">READ ALL REVIEWS</a>
                <p style="border-bottom: 1.5px solid black;" class="mt-5 ms-5 me-5"></p>
            </div>
        </div>

    </div>
@endsection
