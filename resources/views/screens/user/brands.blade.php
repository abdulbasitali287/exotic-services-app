@extends('layouts.app')
@section('content')

<div class="container-fluid p-0 m-0">
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
            {{-- <img src="http://192.168.2.31:8000/admin_panel/services/banner-images/{{ $bannerImg->banner_image }}" alt=""
                class="w-75" style="height: 390px; object-fit: cover;"> --}}
        </div>
        <div class="col w-50 z-0 position-absolute bg-white align-self-end ps-5 pb-5 contact-us_bannerTxt">
            <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">BRANDS WE SERVICE</p>
            {{--
            <hr class=""> --}}
            <h1 class="text-black display-3 fw-bold font_heading_banner pt-4 pb-4">BRANDS</h1>
            {{--
            <hr class=""> --}}
        </div>
    </div>

    <div class="row mt-5 p-0 m-0 brandDetailsBigScreens">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ps-5 services-main__forAll">
            <h1 class="text-black display-5 font_heading new-head">WE PROVIDE ELITE SERVICE OF 20+ VEHICLE BRANDS</h1>
            <p class="font mt-5">We're often asked why we don't service
                <span>all vehicle brands,</span> as most
                independents automotive shops do. The answer: We service vehicles at
                a much <span>higher level</span> than most shops, but this requires
                <span>huge investments</span> in equipment and training - and it wouldn't be possible if
                we serviced every vehicle on the road.
            </p>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-12 offset-1 pe-5 services-main__forAllAppot">
            {{--
            <hr> --}}
            <div class="services-sec">
                <a href="#"><i class="fa-solid fa-phone-flip text-black ps-2 fs-4"><span
                            class="text-black fw-normal m-3 side_heading"
                            style="font-weight: 700 !important;font-size: 20px!important">{{ isset($getNo->phone_number)
                            }}</span></span></i></a>
                <p class="font ps-5" style="color: #777777; font-size: 16px!important;">If you have any questions, feel
                    free to call us or get free
                    appointment</p>
                <a href="{{ route('contact_us') }}"><button class=" text-white px-4 py-3 border-0 font ms-5 click-btn"
                        style="background-color: #171616;font-size: large;">GET FREE APPOINTMENT<i
                            class="fas fa-arrow-right ps-2"></i></button></a>
                {{--
                <hr> --}}
            </div>
        </div>
    </div>

    <div class="row mt-5 p-0 m-0 brandDetailsBigScreens">
        <div class="col-12 d-flex flex-wrap py-4">
            <div class="row p-0 m-0 justify-content-around ">
                @foreach ($brands as $brand)
                <div class="col-lg-6 col-md-6 col-12 ps-5 pe-4 brand-logo_editedDivE">
                    <a href="/brands/{{ $brand->brand_name }}" style="text-decoration: none;">
                        <div class="d-flex px-4 brands-logos__divs">
                            <div><img src="http://192.168.2.31:8000/admin_panel/services/brand/{{ $brand->brand_logo }}" alt=""></div>
                            <div class="brand-displays">
                                <h5 class="fw-bold mt-4">{{ $brand->brand_name }}</h5>
                                <p class="font fw-bold mt-1"
                                    style="color: #777777; font-size: 17px;font-weight: 500!important">Click to see more
                                    about repair and service</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row p-0 m-0 mt-5">
        <div class="col-12 col-sm-12 col-md-12 p-0 m-0 mt-5 services-LastSecImg">
            <img src="/assets/service_detail1.png" alt="" class="w-75" style="height: 600px;">
        </div>
        <div class="col-md-6 col-12 col-md-12 col-sm-12 z-0 position-absolute bg-white ps-5 pb-5 services-LastSecDiv"
            style="right: 0; align-self: end;">
            <p class="my-5 font text-dark-emphasis fw-semibold px-5 mt-4 mb-4">BEST AUTO SERVICE</p>
            {{--
            <hr class="mx-5"> --}}
            <h1 class="text-black display-5 fw-bold font_heading mx-5 new-h1 pt-4 pb-4">RATED ONE OF THE THE BEST AUTO
                SERVICE IN DUBAI</h1>
            {{--
            <hr class="mx-5"> --}}
            <p class=" my-4 font text-dark-emphasis px-5" style="font-size: 15px !important;color: #777777!important">
                Based on customer reviews - 80+ reviews and counting.</p>
            <a href="{{ route('reviews') }}" class="text-dark fw-bold ms-5 anchor_text">READ ALL REVIEWS</a>
            <p style="border-bottom: 1.5px solid black;" class="mt-5 ms-5 me-5"></p>
            {{--
            <hr class="mx-5"> --}}
        </div>
    </div>

</div>

@endsection
