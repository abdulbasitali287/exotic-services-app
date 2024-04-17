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
    button.btn{
        font-size: 15px !important;
                    font-weight: 500 !important;
                    text-transform: uppercase !important;
                    line-height: 1.56em !important;
                    letter-spacing: 2px !important;
                font-family: poppins, Sans-serif !important;
                background-color: var(--background-color)!important;
    }
    button.btn:hover{
        background-color: var(--hover-background-color)!important;
        color: #fff!important;
    }
</style>
@section('content')
    {{-- banner section --}}
    @foreach ($bannersData as $banner)
    @if ($banner->page === "home")
    <section class="py-5"
        style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ $banner->getMedia('banner_images')[0]->getUrl('banner') }}');background-size: cover;background-position: right;background-repeat: no-repeat;"
        >
        <div class="container py-5">
            <div class="row">
                <div class="col-md-7">
                    <div>
                        <h3 class="display-4 fw-bold text-uppercase text-white">
                            Welcome to Saudi Industrial Support Services
                        </h3>
                        <a href="#" class="btn btn-dark px-5 py-3 mt-4 border-0 rounded-0"
                            style="font-size: 15px !important;
                        font-weight: 500 !important;
                        text-transform: uppercase !important;
                        line-height: 1.56em !important;
                        letter-spacing: 2px !important;
                        font-family: poppins, Sans-serif !important;">
                            Our Services <i class="fas fa-arrow-right ps-2 text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endforeach

    <section class="py-5" style="background-color: #1D2023 ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h1 class="display-4 fw-bold" style="color: #ffff;">SAUDI INDUSTRIAL SUPPORT SERVICES</h1>
                        <p class="" style="color: #6e6b6b;text-align: justify;">Welcome to Saudi Industrial Support
                            Services,
                            your trusted partner for ensuring seamless operations within the construction,
                            manufacturing, warehousing and logistics sectors. Based in Jeddah, we specialize
                            in the expert repair and maintenance of material handling equipment, diesel
                            generators, and various light and heavy construction machinery critical for
                            your business's efficiency. As the largest repair and maintenance facility in
                            Jeddah, our specialty lies in servicing equipment of all brands, ages and types
                            primarily fueled by diesel and gas. Our unique selling proposition stems from
                            our preference for repair over replacement, rooted in our extensive experience
                            in refurbishing costly and hard-to-find parts within the market.


                            Beyond our core offerings, Saudi Industrial
                            provides additional services designed to address other facet of operational
                            needs of local industries.


                            Discover how we can assist you in achieving
                            operational excellence and sustaining your growth.</p>
                        <a class="btn btn-dark border-0 rounded-0 py-3 fw-bold" href="#"
                            style="font-size: 15px !important;
                        font-weight: 500 !important;
                        text-transform: uppercase !important;
                        line-height: 1.56em !important;
                        letter-spacing: 2px !important;
                        font-family: poppins, Sans-serif !important;">Explore
                            Our Services <i class="fas fa-arrow-right ps-2 text-dark"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row mt-5">
                <div class="col main-page__services">
                    <h1 class="text-dark display-5 fw-bold font_heading">OUR SERVICES</h1>
                    <a href="#" class="text-dark anchor_text">VIEW ALL SERVICES</a>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row gy-3">
                @forelse ($services as $service)
                    <div class="col-6 mb-2">
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
                {{-- <div class="col-lg-6 mb-2">
                    <div class="card border-0">
                        <div class="position-relative">
                            <img src="{{ asset('assets/repairing/Machinery-Maintenance-Img.jpg') }}" class="w-100 rounded-0"
                                height="350px" alt="sevice image">
                            <div
                                class="hidden-content w-100 h-100 position-absolute top-0 left-0 bg-dark bg-gradient m-0 d-flex align-items-end px-4">
                                <p class="fw-bold text-white pb-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Minima dolorum alias, et, aut aliquam quo iusto impedit quos blanditiis odit illum
                                    voluptatum, molestiae unde! Dolore enim quia dicta ab eligendi.</p>
                            </div>
                        </div>
                        <div class="py-2">
                            <p class="card-text fw-bold text-uppercase">Repair & Maintenance</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-2">
                    <div class="card border-0">
                        <div class="position-relative">
                            <img src="{{ asset('assets/repairing/construction-equipment-rental-market.jpg') }}"
                                class="w-100 rounded-0" height="350px" alt="sevice image">
                            <div
                                class="hidden-content tw-100 h-100 position-absolute top-0 left-0 bg-dark m-0 d-flex align-items-end px-4 fw-thin">
                                <p class="text-white pb-4 fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Minima dolorum alias, et, aut aliquam quo iusto impedit quos blanditiis odit illum
                                    voluptatum, molestiae unde! Dolore enim quia dicta ab eligendi.</p>
                            </div>
                        </div>
                        <div class="py-2">
                            <p class="card-text fw-bold text-uppercase">Rental & Trade</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-2">
                    <div class="card border-0">
                        <div class="position-relative">
                            <img src="{{ asset('assets/repairing/Diesel-Fuel-Common-Rail-Injector-Testing-Equipment-Test-Bench.jpg') }}"
                                class="w-100 rounded-0" height="350px" alt="sevice image">
                            <div
                                class="hidden-content w-100 h-100 position-absolute top-0 left-0 bg-dark m-0 d-flex align-items-end px-4 fw-thin">
                                <p class="text-white pb-4 fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Minima dolorum alias, et, aut aliquam quo iusto impedit quos blanditiis odit illum
                                    voluptatum, molestiae unde! Dolore enim quia dicta ab eligendi.</p>
                            </div>
                        </div>
                        <div class="py-2">
                            <p class="card-text fw-bold text-uppercase">Diesel Pump Laboratory</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-2">
                    <div class="card border-0">
                        <div class="position-relative">
                            <img src="{{ asset('assets/repairing/small_880.jpg') }}" class="w-100 rounded-0" height="350px"
                                alt="sevice image">
                            <div
                                class="hidden-content w-100 h-100 position-absolute top-0 left-0 bg-dark m-0 d-flex align-items-end px-4 fw-thin">
                                <p class="text-white pb-4 fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Minima dolorum alias, et, aut aliquam quo iusto impedit quos blanditiis odit illum
                                    voluptatum, molestiae unde! Dolore enim quia dicta ab eligendi.</p>
                            </div>
                        </div>
                        <div class="py-2">
                            <p class="card-text fw-bold text-uppercase">Steel Fabrication</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    <section class="p-0 my-5">
        <div class="row p-0 m-0">
            <div class="col-12 p-0 m-0">
                <div class="position-relative">
                    <img src="{{ asset('assets/home-big-image.jpg') }}" alt="" class="img-fluid w-100 book-an__appt"
                        style="height: 600px;!important;object-fit:cover">
                    <div class="position-absolute top-50 start-50 translate-middle book-an__apptBtn">
                        <a href="#" class="btn btn-dark text-white fs-6 border-0 rounded-circle round_button"
                            style="font-size: 15px !important;
                        font-weight: bold !important;
                        text-transform: uppercase !important;
                    font-family: poppins, Sans-serif !important;
                    background: var(--background-color-three);color: #1d1c1c;">
                            BOOK OUR <i class="fas fa-arrow-right ps-2"></i><br> SERVICES
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-dark display-5 fw-bold py-5 font_heading cus-approve">100% APPROVED BY CUSTOMERS</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row reviews d-flex justify-content-center main-page__reviews">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="card" style="width: 330px">
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
            <div class="row mt-5 main-page__realAll">
                <div class="col-12 pt-3 pb-3 text-center">
                    <a href="{{ route('reviews') }}" class="text-dark anchor_text ">READ ALL REVIEWS</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid" id="appointment" >
        <div class="row">
            <div class="col-12 pt-5">
                <div class="w-25 ps-4 main-page__getApp">
                    <h1 class="text-dark display-5 fw-bold py-5 font_heading">GET <span
                            style="color: var(--background-color-two);">IN</span>
                        TOUCH</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['route' => 'contact-us.store']) !!}
                    <div class="d-flex justify-content-around flex-wrap my-new__form">
                        <div class="mb-5 form-div" style="width: 25%">
                            <label for="name" class="form-label fs-6 font">Name</label>
                            <input type="name" name="name" class="form-control header1" id="name"
                                style="color: #adacac;border: none; border-bottom: 1px solid white; border-radius: 0;">
                                @error('name')
                                <span class="text-danger my-2">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="mb-5 form-div" style="width: 25%">
                            <label for="phone" class="form-label fs-6 font">Phone</label>
                            <input type="tel" name="phone" class="form-control header1" id="phone"
                                style="color: #adacac; border: none; border-bottom: 1px solid white; border-radius: 0;">
                                @error('phone')
                                <span class="text-danger my-2">{{ $message }}</span>
                                @enderror
                        </div>

                        <div class="mb-5 form-div" style="width: 40%">
                            <label for="email" class="form-label fs-6 font">Email</label>
                            <input type="email" name="email" class="form-control header1" id="email"
                                style="color: #adacac;border: none; border-bottom: 1px solid white; border-radius: 0;">
                                @error('email')
                                    <span class="text-danger my-2">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="mb-5 form-div" style="width: 97%">
                            <label for="Textarea" class="form-label fs-6 ps-0 font">
                                Description</label>
                            <textarea class="form-control header1" name="description" placeholder="Leave a comment here" id="description"
                                style="color: #adacac;border: none; border-bottom: 1px solid white; border-radius: 0;"></textarea>
                                @error('description')
                                <span class="text-danger my-2">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    <button class="btn text-white border-0 rounded-0 px-4 py-3 ms-4 mb-5 fs-5" type="submit">SUBMIT <i class="fas fa-arrow-right ps-2"></i></button>
                    {!! Form::close() !!}
                <div class="alert alert-success mt-3 d-none" id="successMessage">
                    Thankyou For Contacting Us!!
                </div>
            </div>
        </div>
    </div>
@endsection
