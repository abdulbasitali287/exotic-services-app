<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo-2.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/b3f362dab2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
    {{--
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.js"></script>

    <!-- flag-icon-css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    {{-- fontawesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css"
        integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Exotic Car Services</title>
    <style>
        .dropdown-menu {
            display: none;
            position: absolute;
        }

        .dropdown-item:hover>.dropdown-menu {
            display: block;
            /* width: 82%; */
        }

        .sub-serviceCss {
            background-color: transparent !important;
            color: white !important;
            padding: 0px;
        }

        .sub-serviceCss a {
            padding: 12px 15px !important;
        }

        .iti__selected-dial-code {
            color: white !important;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: transparent !important;
        }

        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: poppins, Sans-serif !important;
        }
    </style>
    @stack('styles')
</head>

<body class="">
    @include('sweetalert::alert')
    @php
        $phNo = \App\Models\PhoneService::first();
    @endphp

    <div class="container-fluid m-0 p-0 sticky-top">
        <div class="row p-0 m-0 extraNav">
            <div class="col-12 m-0 p-0 text-center bg-white header_up ">
                {{-- <div class="col-12 header1 text-center header_up " style="background-color: #2b2e3a"> --}}
                <a href="tel:+971503028022"><i class="fa-solid fa-phone-flip text-dark mx-3 mt-3"><span
                            class="text-dark fw-normal m-3">CALL US
                            NOW {{ isset($phNo->phone_number) }}&nbsp;&nbsp;</span><span
                            class="fw-normal fs-4">|</span></i></a>
                <a href="{{ route('contact_us') }}"><i class="fa fa-calendar-o text-dark mx-3 mt-3"><span
                            class="text-dark fw-normal text-uppercase m-3">Schedule inspection visit &nbsp;&nbsp;</span></span><span class="fw-normal fs-4">|</span></i></a>
                <a href="/contact-us#map"><i class="fa-solid fa-location-dot text-dark mx-3 mt-3"><span
                            class="text-dark fw-normal m-3">FIND US
                            ON MAP&nbsp;&nbsp;</span></i></a>
            </div>
        </div>

        <header class="bg-white">
            {{-- <header style="background-color: #2b2e3a"> --}}
            <div class="row p-0 m-0">
                <div class="col-12 bg-white">
                    {{-- <div class="col-12 header1" style="background-color: #2b2e3a"> --}}
                    <nav class="navbar navbar-expand-lg bg-white">
                        {{-- <nav class="navbar navbar-expand-lg header1" style="background-color: #2b2e3a"> --}}
                        <div class="container-fluid">
                            <a href="/" class="navbar-brand ps-5"><img class="img-fluid ms-4" width="60"
                                    src="{{ asset('assets/logos/SAUDI INDUSTRIAL LOGO-06.png') }}" alt=""></a>
                            {{-- <a href="/" class="navbar-brand ps-5"><img class="img-fluid" width="120"
                                    src="{{ asset('assets/logo-4.png') }}" alt=""></a> --}}
                            <button class="hamBurger navbar-toggler bg-white ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pt-2 nav_iems">
                                    <li class="nav-item pe-4">
                                        <a class="nav-link active fw-normal fs-5" aria-current="page"
                                            href="{{ route('home') }}">HOME</a>
                                    </li>
                                    <li class="nav-item pe-4">
                                        <a class="nav-link active fw-normal fs-5" aria-current="page"
                                            href="{{ route('about-us') }}">About Us</a>
                                    </li>
                                    <li class="nav-item dropdown pe-4">
                                        <a class="nav-link text-dark dropdown-toggle fw-normal fs-5"
                                            href="" data-bs-toggle="dropdown" aria-expanded="false">
                                            SERVICES
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('services') }}">View All</a>
                                            </li>
                                            @foreach ($servicesData as $service)
                                                <li class="dropdown-item dropend sub-serviceCss">
                                                    <a class="nav-link" href="{{ route('service.details',$service->id) }}">
                                                        {{ $service->navigation_name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        {{-- <ul class="dropdown-menu">
                                            @php
                                                $serviceExisted = [];
                                            @endphp
                                            @foreach ($servicesData as $service)
                                                @if (!in_array($service->service_type, $serviceExisted))
                                                    @php
                                                        $serviceExisted[] = $service->service_type;
                                                    @endphp
                                                    <li class="dropdown-item dropend sub-serviceCss">
                                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                            {{ $service->service_type }}
                                                        </a>
                                                        <ul class="dropdown-menu list-scroll border-0">
                                                            @foreach ($servicesData as $innerService)
                                                                @if ($innerService->service_type == $service->service_type)
                                                                    <li>
                                                                        <a class="dropdown-item" href="{{ route('service.details',$innerService->id) }}">
                                                                            {{ $innerService->navigation_name }}
                                                                        </a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul> --}}

                                    </li>
                                    {{-- <li class="nav-item dropdown pe-4">
                                        <a class="nav-link dropdown-toggle text-dark fw-normal fs-5" href=""
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Services
                                        </a>
                                        <ul class="dropdown-menu border-0" style="background-color: #f3dd14;">
                                            <li><a class="dropdown-item" href="{{ route('services') }}">View All</a>
                                            </li>

                                            <li><a class="dropdown-item"
                                                    href="{{ route('repair-and-maintenance') }}">Repair &amp;
                                                    Maintenance</a></li>
                                            <li><a class="dropdown-item" href="{{ route('rental-and-trade') }}">Rental
                                                    &amp; Trade</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('diesel-pump-laboratory') }}">Diesel Pump
                                                    Laboratory</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('steel-fabrication') }}">Steel
                                                    Fabrication</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="nav-item pe-4">
                                        <a class="nav-link active fw-normal fs-5" aria-current="page"
                                            href="{{ route('industries-surved') }}">Industries Served</a>
                                    </li>
                                    <li class="nav-item pe-4">
                                        <a class="nav-link active fw-normal fs-5" aria-current="page"
                                            href="{{ route('career') }}">Careers</a>
                                    </li>
                                    <li class="nav-item pe-4">
                                        <a class="nav-link active fw-normal fs-5" aria-current="page"
                                            href="{{ url('blogs') }}">Blogs</a>
                                    </li>
                                    <li class="nav-item pe-4">
                                        <a class="nav-link active fw-normal fs-5" aria-current="page"
                                            href="{{ route('contact-us') }}">Contact us</a>
                                    </li>
                                    {{-- @foreach ($appPages as $page)
                                    <li class="nav-item pe-4">
                                        <a class="nav-link active text-white fw-normal fs-5" aria-current="page"
                                        href="{{route('home')}}">{{ Str::upper($page->name) }}</a>
                                    </li>
                                    @endforeach --}}
                                    {{-- <li class="nav-item dropdown pe-4">
                                        <a class="nav-link dropdown-toggle text-white fw-normal fs-5" href=""
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            SERVICES
                                        </a>
                                        @php
                                        $servingGarages = \App\Models\Service::where('service_type',
                                        'servicing-garage')->get();
                                        $bodyShops = \App\Models\Service::where('service_type', 'body-shop')->get();
                                        $serviceBrands = \App\Models\ServiceBrand::get();
                                        @endphp
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item dropend  sub-serviceCss">
                                                <a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    SERVICING GARAGE
                                                </a>
                                                @if (count($servingGarages) > 0)
                                                <ul class="dropdown-menu list-scroll">
                                                    @foreach ($servingGarages as $servingGarage)
                                                    <li><a class="dropdown-item"
                                                            href="/services/{{ $servingGarage->id }}/{{ $servingGarage->url_slug }}">
                                                            {{ $servingGarage->navigation_name}}
                                                        </a></li>
                                                    @endforeach
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('services') }}">View All</a></li>
                                                </ul>
                                                @endif
                                            </li>
                                            <li class="dropdown-item dropend  sub-serviceCss">
                                                <a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    BODYSHOP
                                                </a>
                                                @if (count($bodyShops) > 0)
                                                <ul class="dropdown-menu list-scroll">
                                                    @foreach ($bodyShops as $bodyShop)
                                                    <li><a class="dropdown-item"
                                                            href="/services/{{ $bodyShop->id }}/{{ $bodyShop->url_slug }}">
                                                            {{ $bodyShop->navigation_name}}
                                                        </a></li>
                                                    @endforeach
                                                    <li><a class="dropdown-item" href="{{ route('services') }}">View
                                                            All</a></li>
                                                </ul>
                                                @endif
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown pe-4">
                                        <a class="nav-link dropdown-toggle text-white fw-normal fs-5" href=""
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            BRANDS
                                        </a>
                                        <ul class="dropdown-menu">
                                            @foreach ($serviceBrands as $serviceBrand)
                                            <li><a class="dropdown-item"
                                                    href="/brands/{{ $serviceBrand->brand_name }}">{{
                                                    $serviceBrand->brand_name}}</a></li>
                                            @endforeach
                                            <li><a class="dropdown-item"
                                                href="{{ route('brands') }}">View All</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown pe-4">
                                        <a class="nav-link dropdown-toggle text-white fw-normal fs-5" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            ABOUT
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('about') }}">ABOUT</a></li>
                                            <li><a class="dropdown-item" href="{{ route('reviews') }}">REVIEWS</a></li>
                                            <li><a class="dropdown-item" href="{{ route('blogs') }}">BLOGS</a></li>
                                            <li><a class="dropdown-item" href="{{ route('faq') }}">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item pe-5">
                                        <a class="nav-link text-white fs-5" href="{{ route('contact_us') }}">CONTACT</a>
                                    </li>
                                    <li class="nav-item pe-3 remove-extrasNav">
                                        <a href="tel:+971503028022" class="nav-link text-white fs-5">CALL US
                                            NOW +971503028022</a>
                                    </li>
                                    <li class="nav-item pe-3 remove-extrasNav">
                                        <a href="{{ route('contact_us') }}" class="nav-link text-white fs-5">GET FREE
                                            APPOINTMENT</a>
                                    </li>
                                    <li class="nav-item pe-3 remove-extrasNav">
                                        <a href="contact-us#map" class="nav-link text-white fs-5">FIND US
                                            ON MAP</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
    </div>
    {{-- <div class="contaner-fluid sticky-top">
        <header>
            <div class="row p-0 m-0">
                <div class="col-5 header1">
                    <a href=""><img src="/assets/logo.png" alt="" class="img-fluid w-75"
                            style="padding: 15px 0px 15px 46px;"></a>
                </div>
                <div class="col-7 header1">
                    <nav class="navbar navbar-expand-lg header1 ">
                        <div class="container-fluid">
                            <button class="navbar-toggler bg-white ms-auto" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 py-3 nav_iems">
                                    <li class="nav-item pe-3">
                                        <a class="nav-link active text-white fw-normal fs-5" aria-current="page"
                                            href="#">HOME</a>
                                    </li>
                                    <li class="nav-item dropdown pe-3">
                                        <a class="nav-link dropdown-toggle text-white fw-normal fs-5" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            SERVICES
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown pe-3">
                                        <a class="nav-link dropdown-toggle text-white fw-normal fs-5" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            BRANDS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown pe-3">
                                        <a class="nav-link dropdown-toggle text-white fw-normal fs-5" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            ABOUT
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item pe-3">
                                        <a class="nav-link text-white fs-5 " href="#">SHOP</a>
                                    </li>
                                    <li class="nav-item pe-3">
                                        <a class="nav-link text-white fs-5" href="#">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
    </div> --}}

    @yield('content')

    @php
        $phNo = \App\Models\PhoneService::first();
    @endphp

    <div class="container-fluid p-0 m-0" id="footer">
        <div class="row header1 p-0 m-0 justify-content-around pt-3 pb-5">
            <div class="col-md-4 col-12 footer-items mt-5 footer-col" style="width: 28%;">
                <h2 class="footer fw-bold fs-5">OUR LOCATION</h2>
                <ul style="list-style-type: none;">
                    {{-- <li class="footer fw-bold fs-5">SHOWROOM LOCATION</li> --}}
                    <li><i class="fa-solid fa-location-dot text-white">
                        </i>
                        <span class="footer header1 text-wrap fw-normal m-2">Industrial Area , Al Jubail Saudi Arabia, 0000
                        </span>
                    </li>
                    <li><i class="fa-solid fa-envelope text-white"></i><span
                            class="fw-normal header1 text-white m-2">xyz@gmail.com</span></li>
                    <li>
                        <i class="fa-solid fa-phone text-white "></i>
                        <span class="fw-normal header1 text-white m-2">
                            <a href="tel:+971503028022" style="text-decoration:none;color: #fff;">+971000000000</a>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-12 mt-5 footer-col" style="width: 28%;">
                <h2 class="footer fw-bold fs-5 quick-nav">QUICK NAV</h2>
                <ul style="list-style-type: none;">
                    {{-- <li class="footer fw-bold mt-2 fs-5">QUICK NAV</li> --}}
                    {{-- <li class="footer header1 text-wrap fw-normal mt-2">SHOP</li> --}}
                    <a href="{{ route('home') }}" class="bg-black" style="text-decoration: none">
                        <li class="footer header1 text-wrap fw-normal mt-2">HOME</li>
                    </a>
                    <a href="{{ route('about-us') }}" class="bg-black" style="text-decoration: none">
                        <li class="footer header1 text-wrap fw-normal mt-2">ABOUT US</li>
                    </a>
                    <a href="{{ route('services') }}" class="bg-black" style="text-decoration: none">
                        <li class="footer header1 text-wrap fw-normal mt-2">SERVICES</li>
                    </a>
                    <a href="{{ route('career') }}" class="bg-black" style="text-decoration: none">
                        <li class="footer header1 text-wrap fw-normal mt-2">CAREERS</li>
                    </a>
                    <a href="{{ url('blogs') }}" class="bg-black" style="text-decoration: none">
                        <li class="footer header1 text-wrap fw-normal mt-2">BLOGS</li>
                    </a>
                    <a href="{{ route('industries-surved') }}" class="bg-black" style="text-decoration: none">
                        <li class="footer header1 text-wrap fw-normal mt-2">INDUSTRIES SERVED</li>
                    </a>
                    <a href="{{ route('contact_us') }}" class="bg-black" style="text-decoration: none">
                        <li class="footer header1 text-wrap fw-normal mt-2">CONTACT US</li>
                    </a>
                </ul>
            </div>
            <div class="col-md-4 col-12 mt-5 footer-col" style="width: 28%;">
                <h2 class="footer fw-bold fs-5 quick-nav">FOLLOW US ON</h2>
                <ul class="social-icons" style="list-style-type: none;margin-top: 25px;">
                    {{-- <li class="footer fw-bold mt-2 fs-5 mb-3">FOLLOW US ON</li> --}}
                    <li>
                        <a href="#" class="" style="background-color: var(--background-color)"><i
                                class="fa-brands fa-instagram text-white" style=" font-size: 25px"></i></a>
                        <a href="#" class="" style="background-color: var(--background-color)"
                            style="padding: 15px 16px 10px 16px;"><i class="fa fa-facebook text-white"
                                style=" font-size: 25px"></i></a>
                        <a href="#" class="" style="background-color: var(--background-color)"><i
                                class="fa-brands fa-youtube text-white" style=" font-size: 25px"></i></a>
                        <a href="#" class="" style="background-color: var(--background-color)"><i
                                class="fa-brands fa-twitter text-white" style=" font-size: 25px"></i></a>
                        <a href="#" class="" style="background-color: var(--background-color)"><i
                                class="fa-brands fa-linkedin text-white" style=" font-size: 25px"></i></a>
                    </li>
                    <li class="footer header1 text-wrap fw-normal mt-4">© Copyright 2024 web programmer</li>
                    <li class="footer header1 text-wrap fw-normal mt-2"><a href="https://www.mywebprogrammer.com/"
                            class="remove-link__css" target="_blank" style="text-decoration: none;color: #fff;">
                            Developed By: My Web Programmer </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div>
        <a href="" class="scrollup">
            <i class="fa-solid fa-arrow-up fs-1" style="color: var(--background-color)"></i>
        </a>
    </div>



    <script>
        $(document).ready(function() {
            var scrollup = $(".scrollup");
            $(window).scroll(function() {
                if ($(this).scrollTop() > 600) {
                    scrollup.fadeIn();
                } else {
                    scrollup.fadeOut();
                }
            });

            scrollup.click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {

            $('.slider').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 5
            });
        });

        $(document).on("scroll", function() {

            if ($(document).scrollTop() > 100) {
                $("header").addClass("shrink");
            } else {
                $("header").removeClass("shrink");
            }

        });
    </script>

    @yield('js')

    @stack('js')


    {{-- <script>
        $(document).ready(function(){


        // ANNUAL CHECKUPS FROM YOUR PHYSICIAN KEEP YOU IN GOOD HEALTH

        $('.img_hover').mouseenter(function() {
        var check_heading =  $(this).parent('.card').find('h6').text();
        var p_text;
        if(check_heading == 'DIAGNOSTIC'){
            p_text = 'ANNUAL CHECKUPS FROM YOUR PHYSICIAN KEEP YOU IN GOOD HEALTH';
        }else if(check_heading == 'TIRES & WHEELS'){
            p_text = 'OUR TECHNICIANS ARE EXPERTS IN PROVIDING HIGH-QUALITY TIRE SERVICES';
        }else if(check_heading == 'ENGINES'){
            p_text = 'WE USE STATE-OF-THE-ART SCAN TOOL EQUIPMENT TO PERFORM ENGINE DIAGNOSTICS';
        }else if(check_heading == 'BRAKE REPAIR'){
            p_text = 'WE OFFER TOP-NOTCH BRAKE REPAIR AND SERVICE ON ALL VEHICLE MAKES AND MODELS'
        }else if(check_heading == 'TRANSMISSION REPAIR'){
            p_text = 'WE SPECIALIZE IN PROVIDING REPAIRS FOR ALL TYPES OF TRANSMISSIONS'
        }else if(check_heading == 'OIL CHANGE'){
            p_text = 'WE PERFORM OIL CHANGES BASED ON MANUFACTURER SPECIFICATIONS'
        }else if(check_heading == 'WHEEL ALIGNMENT'){
            p_text = 'OUR TEAM KNOWS HOW TO ADJUST THESE SOPHISTICATED SYSTEMS'
        }else if(check_heading == 'EXHAUST SYSTEM'){
            p_text = 'OUR TECHNICIANS WILL COMPLETE THE JOB RIGHT THE FIRST TIME AND IN A TIMELY MANNER'
        }else if(check_heading == 'STEERING AND SUSPENSION'){
            p_text = 'OUR EXPERT TECHNICIANS WILL DIAGNOSE THE PROBLEM AND FIX IT IN NO TIME'
        }

        var hoverImg = $('<div class="hover_img"></div>');
        var hoverText = $('<div class="position-absolute w-75 ms-4 h-75 pe-3 text_hover"><p>'+p_text+'</p></div>');
        $(this).append(hoverImg);
        $(this).append(hoverText);
        hoverImg.fadeIn(4000);
        hoverText.fadeIn(4000);
      });

      $('.img_hover').mouseleave(function() {
        var hoverImg = $(this).find('.hover_img');
        var hoverText = $(this).find('.text_hover');
        hoverImg.fadeOut(500, function() {
          hoverImg.remove();
        });
        hoverText.fadeOut(300, function() {
          hoverText.remove();
        });
      });

    });
    </script> --}}

</body>

</html>
