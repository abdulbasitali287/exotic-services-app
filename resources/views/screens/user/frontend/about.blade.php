@extends('layouts.app')
@push('styles')
<style>
    .leftLineDiv{
        border-left: 2px solid #a9a8a8;

    }
</style>
@endpush
@section('content')
    <div class="continer-fluid p-0 m-0">
        @foreach ($bannersData as $banner)
        @if ($banner->page === "about-us")
        <div class="row p-0 m-0">
            <div class="col-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
                {{-- <img src="{{ asset('assets/banners/about-us-banner.jpg') }}" alt="" class="w-75"> --}}
                <img src="{{ $banner->getFirstMediaUrl('banner_images') }}" class="w-75 rounded-0" alt="sevice image">
            </div>
            <div
                class="col-6 z-0 position-absolute bg-white align-self-end ps-5 pb-5 brands-sec__start contact-us_bannerTxt">
                <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">{{ $banner->description }}
                </p>
                <h1 class="text-black display-3 fw-bold pt-4 pb-4">{{ $banner->title }}</h1>
            </div>
        </div>
        @endif
        @endforeach

        <section class="pt-5" style="background-color: #252525">
            <div class="container">
                <div class="row m-0 p-0">
                    <h1 class="display-5 fw-bold text-white">WHO WE ARE</h1>
                </div>
                <div class="row p-0 m-0 pb-2">
                    <div class="col-md-6 mt-4 mb-5 m-0 p-0">
                        <div class="leftLineDiv ps-3">
                            <h2 class="fs-3 fw-bold text-white text-uppercase">Saudi Industrial Support Services: Three
                                Decades of Excellence</h2>
                            <p style="text-align: justify;color:#a9a8a8;">
                                <span class="d-block pb-2">
                                    Over the years, Saudi Industrial has evolved from a modest venture into a
                                    comprehensive support system for the Kingdom&#39;s industrial sector. Our growth is
                                    a testament to our unwavering commitment to quality, reliability, and customer
                                    satisfaction. As we adapted to the changing dynamics of industry and
                                    technology, our services expanded to encompass a wide range of specialized
                                    support, from equipment and vehicle maintenance to steel fabrication and
                                    material handling equipment rental.
                                </span>
                                <span class="d-block pb-2">
                                    Our success is rooted in our deep understanding of the challenges and
                                    opportunities within Saudi Arabia&#39;s industrial sector. Each project and partnership
                                    has contributed to our rich repository of knowledge and experience, enabling us
                                    to offer solutions that are not only effective but also customized to meet the
                                    unique needs of our clients. We pride ourselves on our ability to learn and grow,
                                    constantly incorporating new technologies and methodologies to enhance our
                                    service offerings.
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="leftLineDiv ps-3 ms-2">
                            <p style="text-align: justify;color:#a9a8a8;">
                                <span class="d-block pb-2">
                                    Our commitment goes beyond just meeting client expectations; we aim to exceed
                                    them. We believe in a partnership-driven approach, where our success is
                                    measured by the success of our clients. This philosophy has guided us through
                                    three decades of service and continues to be the cornerstone of our operations.
                                </span>
                                <span class="d-block pb-2">
                                    As we look to the future, Saudi Industrial is poised for continued growth and
                                    innovation. We remain dedicated to contributing to the Kingdom&#39;s industrial
                                    development, supporting sustainability initiatives, and fostering a culture of
                                    excellence within our organization and among our clients. Our journey thus far
                                    has been remarkable, but we believe the best is yet to come. Join us as we
                                    continue to set new standards in industrial support and celebrate the spirit of
                                    progress and innovation in Saudi Arabia.
                                </span>
                                </span>
                            </p>
                            <a href="{{ route('contact_us') }}" class="anchor_text1"
                                style="color:#f3f3f3; font-size: 20px;">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="row m-0 about-us__secTwo">
            <div class="col-md-12 col-12">
                <div class="justify-content-between text-center pt-2 pb-2">
                    <h1 class="m-3">QUALITY</h1>
                    <h2 class="m-3 my-0">WHY CHOOSE US</h2>
                    <p>At the core of our operations is a team of highly skilled professionals, each an
                        expert in their respective fields. From engineers and technicians to customer
                        service representatives and project managers, our team is our strength. Their
                        dedication and expertise have been instrumental in building long-lasting
                        relationships with our clients, many of whom have been with us since our early
                        days.</p>
                </div>
            </div>
        </div>


        {{-- <div class="container-fluid p-0 m-0">
            <div class="row p-0 m-0 font" style="border-top: 1px solid black;">
                <div
                    class="col-lg-12 col-md-12 col-sm-12 col-12 p-0 m-0 d-flex justify-content-center flex-wrap  about-us__section3rd">
                    <div class="border border-top-0 border-secondary-subtle pt-3 p-3">
                        <i class="fas fa-users-cog text-dark"></i>
                        <h6>6,000+</h6>
                        <p>Satisfied Clients</p>

                    </div>
                    <div class="border border-top-0 border-secondary-subtle pt-3 p-3">
                        <i class="fa-solid fa-car"></i>
                        <h6>20+</h6>
                        <p>Years of Experience</p>
                    </div>
                    <div class="border border-top-0 border-secondary-subtle pt-3 p-3">
                        <i class="fa-regular fa-circle-check"></i>
                        <h6>5,000+</h6>
                        <p>Completed Projects</p>

                    </div>
                </div>
            </div>

        </div> --}}

        <div class="header1_">
            <div class="row p-0 m-0 ps-2 about-us__sec4">
                <div class="col-md-12 mt-5">
                    <h1>YEARS OF EXPERIENCE</h1>
                </div>
                <div class="col-md-11 mt-5 mx-4 py-0 ps-4 about-us__Yoe">
                    <p style="text-align:justify;">
                        <span class="d-block">
                            Founded in the heart of Saudi Arabia, known as Jeddah, over 30 years ago, Saudi Industrial has
                            established itself as a pillar of industrial support and excellence, serving the myriad needs of
                            major industries across the Kingdom. Our journey began with a simple yet ambitious vision: to
                            provide unparalleled support to construction & manufacturing businesses, ports and warehouses;
                            fostering growth, efficiency, and innovation in the Saudi commercial landscape.
                        </span>
                    </p>

                </div>
                <div class="row about-us__container">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 ps-4 mt-5 mb-5">
                        <div class="about-us__lastSect1">
                            <img src="{{ asset('assets/repairing/small_880.jpg') }}" />
                        </div>
                    </div>

                    <div class=" col-lg-5 col-md-12 col-md-5 col-sm-12 col-12 ms-5 mt-5 pe-4 mb-5 about-us_another">
                        <div class="about-us__lastSect2">
                            <div class="about-us__lastSect2Img">
                                <div class="w-100">
                                    <img src="{{ asset('assets/comma.png') }}" width="100" alt="">
                                </div>
                            </div>
                            <div class="about-us__lastSect2Text">
                                <h3>Expert service when you need it. We'll be there for you in time. This is our guarantee
                                    to you.</h3>
                                {{-- <h3>Expert service when you need it. We'll be there for you in time. We'll tow your car, fix it and get you back on the road. This is our guarantee to you.</h3> --}}
                            </div>
                            {{-- <a href="{{ route('contact_us') }}"><button class="click-btn text-black px-4 py-3 border-0 font_with_heading mt-2" style="background-color: white;font-size: large;">CONTACT US<i class="fas fa-arrow-right ps-2"></i></button></a> --}}
                            <a href="#" class="btn btn-dark px-5 py-3 mt-1 border-0 rounded-0"
                                style="font-size: 15px !important;
                        font-weight: 500 !important;
                        text-transform: uppercase !important;
                        line-height: 1.56em !important;
                        letter-spacing: 2px !important;
                    font-family: poppins, Sans-serif !important;">
                                CONTACT US<i class="fas fa-arrow-right ps-2 text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="row d-flex m-0 align-items-baseline brand-detail__sectOne">



    </div> --}}


        {{-- <div class="row d-flex m-0 align-items-baseline brand-detail__sectOne">
        <div class="col-md-6 ps-4 mt-5 mb-5 brand-detail__sect">
            <h1 class="text-black display-5 mb-5">SERVICE AND REPAIR OF AUDI VEHICLES</h1>
                <p class="m-0 px-4">Audi, a subsidiary of the German automobile manufacturer Volkswagen, is one of the<span style="font-weight: 600;"> top three luxury</span>
                    automakers in the world. The company name is derived from the surname of its founder, <span style="font-weight: 600;">August Horch.</span>. “Horch” means “listen” in German; and Audi is the Latin word for listen. But you didn’t invest in an Audi based on clever word play. You own an Audi because you care about investing in quality.</p>
        </div>

        <div class="col-md-5 offset-md-1 mt-5 ps-4 mb-5 align-self-end brand-detail__sect">
            <p class="m-0 px-4">As an Audi owner, you understand that a quality vehicle demands quality service. Our shop offers the highest quality service and repair of  <span style="font-weight: 600;">Audi vehicles</span>  in the area. From the moment you walk through our door until you leave satisfied with the results, our team strives to supply only the best service to both you and your vehicle.</p>
        </div>
    </div> --}}

        {{-- <div class="row header1 p-0 m-0 mt-5">
        <div class="col-12 p-3 position-relative" style="max-height: 516px;">
            <video class="w-100 h-100" controls poster="/assets/brand_detail2.jpg" style="object-fit: cover">
                <source src="/assets/exterior.mp4" type="video/mp4">
            </video>
            <div class="position-absolute top-50 start-50 translate-middle">
                <button class="text-white fs-6 border-0 rounded-circle" id="play_button" style="padding: 30px 34px; background-color: rgb(219, 36, 17)">
                    <i class="fa-solid fa-play text-white fs-3"></i>
                </button>
            </div>
        </div>
    </div> --}}

        {{-- <div class="row header1 p-0 m-0 ps-2">
        <div class="col-md-12 mt-5">
            <h1 class="text-white display-5 fw-bold">YEARS OF EXPERIENCE</h1>
        </div>
        <div class="col-md-11 mt-5 mx-4 py-0 mb-5 ps-4" style="color:#a9a8a8; font-size: 17px; border-left: 1px solid #a9a8a8;">
            <p style="font-family: 'Poppins', sans-serif;font-size: 16px!important;font-weight: 500">Our shop offers the highest quality service and repair of Audi vehicles in the area. From the moment you walk through our door until you leave satisfied with the results, our team strives to supply only the best service to both you and your vehicle. Whether you need routine maintenance or repairs for major damage, our expert team of certified technicians provide top-notch service for any Audi model.</p>
                <p style="font-family: 'Poppins', sans-serif;font-size: 16px!important;font-weight: 500">Put our service to the test by calling our shop or stopping in to schedule your service appointment today!</p>
                <button class="click-btn text-black px-4 py-3 border-0 font_with_heading mt-4" style="background-color: white;font-size: large;">GET FREE APPOINTMENT<i class="fas fa-arrow-right ps-2"></i></button>

        </div>
    </div> --}}
    </div>

    <script>
        $(document).ready(function() {
            const video = $('video')[0];
            const playButton = $('#play_button');

            function hidePlayButton() {
                playButton.hide();
            }

            function showPlayButton() {
                playButton.show();
            }

            playButton.click(function() {
                if (video.paused) {
                    video.play();
                    hidePlayButton();
                }

            });

            video.addEventListener('play', hidePlayButton);
            video.addEventListener('pause', showPlayButton);

        });
    </script>
@endsection
