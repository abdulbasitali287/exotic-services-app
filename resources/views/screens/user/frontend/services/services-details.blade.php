@extends('layouts.app')

<style type="text/css">
    html,
    body {
        margin: 0;
        padding: 0;
    }

    * {
        box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }


    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
    }

    .slick-active {
        opacity: .5;
    }

    .slick-current {
        opacity: 1;
    }

    .toggle-btn button {
        padding: 8px 25px;
        font-size: 15px;
        font-weight: 500;
        background-color: #e3e3e3;
        color: black;
        border: 1px solid transparent;
        border-radius: 40px !important;
        font-family: 'Poppins', sans-serif;

    }

    .toggle-btn button:hover {
        background-color: transparent !important;
        border: none !important;
    }

    .toggle-btn button.active:hover {
        background-color: #dbb778 !important;
    }

    .toggle-btn button.active {
        background-color: #dbb778;
        border: 1px solid transparent;
        color: black;
        border-radius: 40px !important;
    }

    .toggle-div {
        background-color: #e3e3e3;
        border-radius: 40px !important;
    }

    .main-page__brandLogos img {
        filter: grayscale(1);
    }

    .main-page__brandLogos img:hover {
        filter: grayscale(0);
    }
    #services-intro-content h2::before{
        content: '';
        display: block;
        width: auto;
        height: 2px;
        background-color: #777777;
        margin-block: 10px;
    }
    #services-intro-content h2::after{
        content: '';
        display: block;
        width: auto;
        height: 2px;
        background-color: #e3e3e3;
        margin-block: 10px;
    }
</style>
@section('content')
    {{-- banner section --}}
    <section class="py-5" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/repairing/Machinery-Maintenance-Img.jpg');background-size: cover;background-position: right; background-repeat: no-repeat;height: 450px">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                </div>
            </div>
        </div>
    </section>

    <section id="services-intro-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="display-4 fw-bold py-5">Repair & Maintenance</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 services-main__forAll">
                    <h1 class="text-black display-5 fw-bold font_heading text-uppercase" style="font-weight: 700 !important;">Material Handling Equipment & Generator Repair and Maintenance</h1>
                    <p class="font mt-5" style="color: #777777; font-size: 16px!important;">At Saudi Industrial, our approach to Equipment
                        & Generator Repair and Maintenance stands unparalleled, with over three
                        decades of excellence and innovation under our belt. We understand that
                        effective machinery management is not just about occasional fixes but about
                        ensuring enduring efficiency and reliability. This understanding has shaped our
                        service offerings, making us a vital partner for industries seeking
                        uninterrupted operations.</p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-12 offset-1 pe-5 services-main__forAllAppot">
                    <div class="services-sec">
                    <a href="#"><i class="fa-solid fa-phone-flip text-black ps-2 fs-4"><span class="text-black fw-normal m-3 side_heading" style="font-weight: 800 !important;">+971000000000</span></span></i></a>
                    <p class="font ps-5" style="color: #777777; font-size: 16px!important;">If you have any question, feel free to Contact Us</p>
                        <a href="{{ route('contact_us') }}"><button class=" text-white px-4 py-3 border-0 font_with_heading ms-5 ps-4 pe-4" style="background-color: #171616;font-size: large;">GET FREE APPOINTMENT<i class="fas fa-arrow-right ps-2"></i></button></a>
                </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="services">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 main-page__services">
                    <h1 class="text-dark display-5 fw-bold font_heading">OUR SERVICES</h1>
                    <a href="{{ route('services') }}" class="text-dark anchor_text">VIEW ALL SERVICES</a>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-6 mb-2">
                    <div class="card border-0">
                        <img src="{{ asset('assets/brands/cheverolet.webp') }}" class="card-img-top rounded-0"
                            alt="sevice image">
                        <div class="py-2">
                            <p class="card-text fw-bold">Repair & Maintenance</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="card border-0">
                        <img src="{{ asset('assets/brands/cheverolet.webp') }}" class="card-img-top rounded-0"
                            alt="sevice image">
                        <div class="py-2">
                            <p class="card-text fw-bold">Rental & Trade</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="card border-0">
                        <img src="{{ asset('assets/brands/cheverolet.webp') }}" class="card-img-top rounded-0"
                            alt="sevice image">
                        <div class="py-2">
                            <p class="card-text fw-bold">Diesel Pump Laboratory</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="card border-0">
                        <img src="{{ asset('assets/brands/cheverolet.webp') }}" class="card-img-top rounded-0"
                            alt="sevice image">
                        <div class="py-2">
                            <p class="card-text fw-bold">Steel Fabrication</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="services">
        <div class="container">
            <div class="row mt-5">
                <div class="col main-page__services">
                    <h1 class="text-dark display-5 fw-bold font_heading">OUR SERVICES</h1>
                    <a href="{{ route('services') }}" class="text-dark anchor_text">VIEW ALL SERVICES</a>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-6 mb-2">
                    <div class="card border-0">
                        <img src="{{ asset('assets/repairing/Machinery-Maintenance-Img.jpg') }}" class="rounded-0" height="350px"
                            alt="sevice image">
                        <div class="py-2">
                            <p class="card-text fw-bold text-uppercase">Repair & Maintenance</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="card border-0">
                        <img src="{{ asset('assets/repairing/construction-equipment-rental-market.jpg') }}" class="rounded-0" height="350px"
                            alt="sevice image">
                        <div class="py-2">
                            <p class="card-text fw-bold text-uppercase">Rental & Trade</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="card border-0">
                        <img src="{{ asset('assets/repairing/Diesel-Fuel-Common-Rail-Injector-Testing-Equipment-Test-Bench.jpg') }}" class="rounded-0" height="350px"
                            alt="sevice image">
                        <div class="py-2">
                            <p class="card-text fw-bold text-uppercase">Diesel Pump Laboratory</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <div class="card border-0">
                        <img src="{{ asset('assets/repairing/small_880.jpg') }}" class="rounded-0" height="350px"
                            alt="sevice image">
                        <div class="py-2">
                            <p class="card-text fw-bold text-uppercase">Steel Fabrication</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
