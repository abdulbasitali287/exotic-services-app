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

    #services-intro-content h2::before {
        content: '';
        display: block;
        width: auto;
        height: 2px;
        background-color: #777777;
        margin-block: 10px;
    }

    #services-intro-content h2::after {
        content: '';
        display: block;
        width: auto;
        height: 2px;
        background-color: #e3e3e3;
        margin-block: 10px;
    }

    #services .card {
        cursor: pointer;
        transition: 0.3s
    }

    #services .card .hidden-content {
        opacity: 0;
        /* z-index: 1; */
        transition: opacity 0.3s ease
    }

    #services .card:hover .hidden-content {
        opacity: 0.8;
    }
</style>
@section('content')
    <section>
        <div class="container-fluid m-0 p-0">
            @foreach ($bannersData as $banner)
        @if ($banner->page === "services")
        <div class="row p-0 m-0">
            <div class="col-sm-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
                {{-- <img src="{{ asset('assets/banners/about-us-banner.jpg') }}" alt="" class="w-75"> --}}
                <img src="{{ $banner->getFirstMediaUrl('banner_images') }}" class="w-75 rounded-0" alt="sevice image">
            </div>
            <div class="col-md-6 col z-0 position-absolute bg-white align-self-end ps-md-5 pb-md-5 brands-sec__start contact-us_bannerTxt">
                <p class="mt-md-5 mb-md-4 pt-sm-2 pt-2 font text-dark-emphasis fw-semibold">{{ $banner->description }}
                </p>
                <h1 class="text-black display-3 fw-bold pt-4 pb-4">{{ $banner->title }}</h1>
            </div>
        </div>
        @endif
        @endforeach
        </div>
    </section>

    <section>
        <div class="container px-md-0 px-sm-4">
            <div class="row pt-4">
                <div class="col-md-6 p-0">
                    <h4 class="text-black d-flex flex-wrap fw-bold font_heading text-uppercase m-0" style="font-weight: 700 !important;">
                        Discover Our Comprehensive Industrial Services</h4>
                </div>
                <div class="col-md-6 col px-md-5 px-sm-2">
                    <div class="services-sec mt-0">
                        <a href="#"><i class="fa-solid fa-phone-flip text-black ps-2 fs-4"><span
                                    class="text-black fw-normal m-3 side_heading"
                                    style="font-weight: 800 !important;">{{ $phoneNumber->phone_number }}</span></span></i></a>
                        <p class="font ps-5" style="color: #777777; font-size: 16px!important;">If you have any question,
                            feel free to Contact Us</p>
                        <a href="{{ route('contact-us') }}" class="btn btn-dark px-4 py-3 border-0 rounded-0 ms-5 ps-4 pe-4"
                            style="font-size: 15px !important;
                        font-weight: 500 !important;
                        text-transform: uppercase !important;
                        line-height: 1.56em !important;
                        letter-spacing: 2px !important;
                    font-family: poppins, Sans-serif !important;">CONTACT
                            US<i class="fas fa-arrow-right ps-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="font mt-5" style="color: #777777; font-size: 16px!important;">Explore a wide spectrum of
                        industrial solutions meticulously crafted to empower your business. From maintenance and repairs to
                        specialized services, Saudi Industrial ensures reliability and efficiency every step of the way.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row mt-5">
                <div class="col main-page__services">
                    <h1 class="text-dark ps-0 display-5 fw-bold font_heading">OUR SERVICES</h1>
                    <a href="{{ route('services') }}" class="text-dark anchor_text">VIEW ALL SERVICES</a>
                </div>
            </div>
        </div>

        <div class="container-lg mt-md-5">
            <div class="row gy-3 justify-content-lg-start justify-content-md-center">
                @forelse ($services as $service)
                    <div class="col-lg-6 col-md-10 mb-2">
                        <a href="{{ route('service.details', $service->id) }}" style="text-decoration: none">
                            <div class="card border-0">
                                <div class="position-relative">
                                    <img src="{{ $service->getMedia('service_banners')[0]->getUrl('service_banner') }}" class="w-100 rounded-0"
                                        height="300" alt="sevice image">
                                    <div
                                        class="hidden-content w-100 h-100 position-absolute top-0 left-0 bg-dark bg-gradient m-0 d-flex align-items-end px-4">
                                        <p class="fw-bold text-white pb-4 ">
                                            {{ Str::limit('Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit beatae delectus quam omnis deserunt sint consequatur architecto officia et hic consectetur quis cum nulla fugiat dolorum, animi ex aperiam, mollitia, dolore quo? Corrupti eveniet accusamus expedita minus, recusandae est officiis nostrum dolorum voluptatem assumenda! Cupiditate rem quisquam incidunt! Officiis, assumenda odio. Dolorum eos repellat assumenda, harum, rerum nisi necessitatibus facilis distinctio accusamus, cumque amet dolorem. Perferendis delectus reiciendis doloremque at consequuntur temporibus provident eveniet ullam alias, commodi rem iusto deserunt corporis cumque magni porro! Repellat quaerat doloremque assumenda quas, officiis, amet vel at voluptates numquam soluta tempore, ea possimus nobis explicabo iusto animi facere iste dolore alias voluptatem ex optio saepe! Itaque illo consequuntur hic, necessitatibus eveniet assumenda aut ipsum quia voluptatem neque odio recusandae tempora quo molestiae eius dolores aperiam repellat! Laboriosam porro illum modi obcaecati, ipsum, reiciendis doloribus vel perspiciatis laborum optio rerum officiis delectus, accusantium pariatur libero.', 150, '...') }}</p>
                                        </p>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <p class="card-text fw-bold text-uppercase">{{ $service->navigation_name }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-6 mb-2">
                        <div class="card border-0">
                            <div class="position-relative">
                                <img src="{{ asset('assets/repairing/construction-equipment-rental-market.jpg') }}"
                                    class="w-100 rounded-0" height="350px" alt="sevice image">
                                <div
                                    class="hidden-content tw-100 h-100 position-absolute top-0 left-0 bg-dark m-0 d-flex align-items-end px-4 fw-thin">
                                    <p class="text-white pb-4 fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit.
                                        Minima dolorum alias, et, aut aliquam quo iusto impedit quos blanditiis odit illum
                                        voluptatum, molestiae unde! Dolore enim quia dicta ab eligendi.</p>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="card-text fw-bold text-uppercase">Dummy Service</p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <div class="header1_">
        <div class="row p-0 m-0 pb-5 newBigScreenServices1">
            <div class="col mt-5 ps-5 mb-5 services-forAll">
                <h1 class="text-white display-5 fw-bold font_heading mt-5">SERVICES AT SAUDI INDUSTRIAL </h1>
                <div class="row ms-3 mb-5">
                    <div class="col-11 p-3 ps-4 pb-0 mt-4 font services-forAllCol"
                        style="color:#a9a8a8; font-size: 17px !important; border-left: 2px solid #a9a8a8;text-align: justify;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam soluta corrupti adipisci unde
                            minima ut, molestias molestiae error? Placeat delectus eaque, minus in recusandae blanditiis?
                            Deleniti soluta inventore magnam consectetur, qui eveniet modi repellendus explicabo eaque
                            ratione esse voluptatibus in temporibus doloremque impedit quidem perspiciatis perferendis
                            veritatis sapiente quasi ea enim! Asperiores repellat corrupti consequuntur saepe voluptatem! In
                            voluptatibus libero facere dolores sunt pariatur debitis veritatis maxime sapiente porro itaque
                            quibusdam quidem, rem odio praesentium amet et est nemo beatae earum adipisci nesciunt rerum
                            velit quam. Maiores tempore dicta ab exercitationem pariatur repellendus animi deleniti tenetur
                            assumenda officia corporis obcaecati nulla alias praesentium fugiat facilis minus blanditiis,
                            iste temporibus? Quas dolorum incidunt, dolore neque, nisi non excepturi deserunt repudiandae
                            voluptates iste perspiciatis repellendus unde ipsum eos. Aspernatur debitis aut voluptas
                            consequatur magnam eligendi consequuntur! Laboriosam cupiditate fugiat culpa voluptas magni quas
                            vitae sequi est, voluptate, porro dolore veritatis ipsum molestiae doloribus ut voluptatem? A
                            quasi vero voluptatum excepturi quod, eaque tenetur culpa delectus doloremque, distinctio eum
                            asperiores mollitia maxime dolores illo, cumque magni perspiciatis in consequatur ipsa? Voluptas
                            inventore ab sunt! Minus animi voluptate reiciendis fuga laborum expedita molestias, aliquid
                            accusantium iste dolorem consequuntur cumque fugiat nihil cupiditate quidem odit?</p>
                        <a href="{{ route('contact-us') }}" class="btn btn-dark px-4 py-3 border-0 rounded-0 ps-4 pe-4"
                            style="font-size: 15px !important;
                        font-weight: 500 !important;
                        text-transform: uppercase !important;
                        line-height: 1.56em !important;
                        letter-spacing: 2px !important;
                    font-family: poppins, Sans-serif !important;">CONTACT
                            US<i class="fas fa-arrow-right ps-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row p-0 m-0">
        <div class="col-12 col-sm-12 col-md-12 p-0 m-0 services-LastSecImg">
            <img src="{{ asset('assets/Man-doing-industrial-machinery-repair-.jpg') }}" alt="" class="w-75"
                style="height: 600px;">
        </div>
        <div class="col-md-6 col-12 col-md-12 col-sm-12 z-0 position-absolute bg-white ps-5 pb-5 services-LastSecDiv"
            style="right: 0; align-self: end;">
            <p class="my-5 font text-dark-emphasis fw-semibold px-5 mt-4 mb-4">BEST SERVICES PROVIDER IN SAUDIA</p>
            <h1 class="text-black display-5 fw-bold font_heading  mx-5 new-h1 pt-4 pb-4">BEST SERVICES PROVIDER IN SAUDIA
            </h1>
            <p class=" my-4 font text-dark-emphasis px-5" style="font-size: 15px !important;color: #777777!important">
                Based on customer reviews</p>
            <a href="{{ route('reviews') }}" class="text-dark fw-bold ms-5 anchor_text">READ ALL REVIEWS</a>
            <p style="border-bottom: 1.5px solid black;" class="mt-5 ms-5 me-5"></p>
        </div>
    </div>

    <section>
        <div class="container-md overflow-hidden">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-dark display-5 fw-bold py-5 font_heading cus-approve">100% APPROVED BY CUSTOMERS</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center align-items-center reviews main-page__reviews">
                        <div class="col-md-6 d-flex">
                            <div class="card mx-auto" style="width:330px!important">
                                <div class="w-100">
                                    <img src="{{ asset('assets/comma.png') }}" width="100" alt="">
                                </div>
                                <div class="px-3 pb-3">
                                    <p class="card-text d-block border-bottom font py-3 pb-4" style="color: #777777;text-align:justify;">Lorem
                                        ipsum
                                        dolor, sit amet consectetur adipisicing elit. Aut odit atque, perferendis tempore,
                                        soluta sunt aperiam voluptatibus, illo velit ullam facere ad autem numquam! Unde
                                        minima
                                        velit eaque nulla explicabo sint, enim ducimus asperiores, sit a magnam esse porro,
                                        molestiae tenetur quos tempora repellat! Quas corrupti rem obcaecati deleniti iusto.
                                    </p>
                                    <h5 class="card-title">Test Review</h5>
                                    <div>
                                        <span class="fa fa-star checked" style="color: var(--background-color-two);"></span>
                                        <span class="fa fa-star checked" style="color: var(--background-color-two);"></span>
                                        <span class="fa fa-star checked" style="color: var(--background-color-two);"></span>
                                        <span class="fa fa-star checked" style="color: var(--background-color-two);"></span>
                                        <span class="fa fa-star checked" style="color: var(--background-color-two);"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pbB-md-5 main-page__realAll">
                <div class="col-12 pt-3 pb-3 text-center">
                    <a href="{{ route('reviews') }}" class="text-dark anchor_text">READ ALL REVIEWS</a>
                </div>
            </div>
        </div>
    </section>
@endsection
