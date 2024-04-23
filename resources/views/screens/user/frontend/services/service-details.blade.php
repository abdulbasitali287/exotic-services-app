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
</style>
@section('content')
    {{-- banner section --}}
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
                    @if (Route::has('service.details'))
                    <img src="{{ $service->getFirstMediaUrl('service_banners') }}" class="w-75 rounded-0"
                                        alt="sevice image" style="object-fit: cover;">
                    @else
                    <img src="{{ asset('assets/repairing/Diesel-Fuel-Common-Rail-Injector-Testing-Equipment-Test-Bench.jpg') }}"
                        alt="" class="w-75">
                    @endif
                </div>
                <div class="col w-50 z-0 position-absolute bg-white align-self-end ps-5 pb-5 contact-us_bannerTxt">
                    <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">WE PRIDE OURSELVES IN PROVIDING EXCELLENT
                        SERVICE</p>
                    <h1 class="text-black display-3 fw-bold font_heading_banner m-0 pt-4 pb-4 text-uppercase">{{ $service->service_name }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="services-intro-content">
        <div class="container p-0">
            <div class="row pt-4">
                <div class="col-md-6 p-0">
                    <h1 class="text-black fw-bold text-uppercase"
                        style="font-weight: 700 !important;font-size:35px;">{{ $service->sub_heading }}</h1>
                </div>
                {{-- <p>The ID is: {{ request('service')->id }}</p> --}}
                <div class="col-md-6 p-0 px-5">
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
            @if(request()->route()->hasParameter('service'))
                @if (request('service')->id === 4)
                <div class="row pt-2">
                    <div class="col">
                        <div style="width: 100%;height: 450px;overflow: hidden;" >
                            <img src="{{ asset('assets/repair-and-maintenance/3001.jpg') }}" class="w-100" height="100%" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                @elseif (request('service')->id === 6)
                <div class="row pt-2">
                    <div class="col">
                        <div style="width: 100%;height: 350px;object-fit: cover;" >
                            <img src="{{ asset('assets/repair-and-maintenance/IMAG0244.jpg') }}" class="w-100" height="100%" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
                @endif
            @endif
            <div class="row">
                <div class="col py-4">
                    <div id="blogBody" style="color: #777777;font-size: 16px!important;text-align: justify;">
                        {!! $service->description !!}
                    </div>
                </div>
            </div>
            {{-- <div class="row pb-3">
                <div class="col">
                    <h1 class="text-black mb-2 display-5 fw-bold font_heading text-uppercase"
                    style="font-weight: 700 !important;">FORKLIFT REBUILDS AND REFURBISHMENT SERVICES</h1>
                    <p class="font" style="color: #777777; font-size: 16px!important;text-align:justify;">In today's economy, it can be difficult to fit the purchase of a new piece of
                        equipment into your budget. If you're not interested in selling your forklift or
                        moving to a rental, why not consider refurbishing your forklift? When you own an
                        old forklift with a stronger structure, it can definitely pay to perform a forklift
                        rebuild. A rebuild may not always be the best choice over buying a new piece of
                        equipment, but it's always worth looking into.
                        <span class="d-block py-2">
                            Consider the following advantages of refurbishment before deciding on your next course of action.
                        </span>
                        <span class="d-block py-1">
                            The advantages of rebuilding your forklift
                        </span>
                    </p>
                    <h1 class="text-black mb-2 display-5 fw-bold font_heading text-uppercase"
                    style="font-weight: 700 !important;">Cost Savings</h1>
                    <p class="font" style="color: #777777; font-size: 16px!important;text-align:justify;">When purchasing new equipment, it can be difficult to gain approval for a large
                        capital expense. That’s why it’s never a bad idea to weigh the pros and cons of
                        refurbishing your existing equipment. By doing so, you may be able to save
                        anywhere from 30-40% of the purchase price. In addition to these initial savings,
                        you’ll also see savings over time for replacement parts as older components tend
                        to cost 25-30% less than newer components. Though there are undeniable cost
                        savings for some larger units, these savings may vary for smaller pieces of
                        equipment. That’s why we’re here to help with expert advice, helping you
                        determine the best choice for your equipment, needs, and budget.</p>
                </div>
            </div> --}}
        </div>
    </section>

    <div class="header1_">
        <div class="row pb-md-5 pb-2 m-0 newBigScreenServices1">
            <div class="col ps-5 services-forAll">
                <h1 class="text-white display-5 fw-bold font_heading mt-5">SERVICES AT SAUDI INDUSTRIAL </h1>
                <div class="row ms-3">
                    <div class="col-11 p-3 ps-4 pb-0 mt-4 font services-forAllCol"
                        style="color:#a9a8a8; font-size: 17px !important; border-left: 2px solid #a9a8a8;text-align: justify;">
                        <p>
                            <span class="d-block pb-2">
                                Our expertise encompasses a broad spectrum of fuel injection pumps, ensuring
                                we can cater to the specific needs of any diesel engine, from vehicles to
                                generators and beyond. Our state-of-the-art diagnostic and repair facilities are
                                equipped with the latest technology, enabling our skilled technicians to perform
                                precise, efficient repairs that restore your engine&#39;s performance and reliability.
                            </span>
                            <span class="d-block pb-2">
                                But our services extend beyond just repairs. Saudi Industrial is also your trusted
                                partner for purchasing new fuel injection pumps. We offer a wide selection of
                                high-quality pumps from leading manufacturers, ensuring you receive a product
                                that matches your engine&#39;s specifications and performance requirements. Our
                                team provides expert advice and support, helping you make informed decisions
                                that optimize your engine&#39;s efficiency and longevity.
                            </span>
                            <span class="d-block pb-2">
                                Choosing Saudi Industrial means selecting a partner committed to excellence
                                and innovation in diesel engine performance. Our comprehensive approach to
                                sales and repair services ensures your engines are fueled by reliability and
                                efficiency, driving your operations forward. Trust us to deliver solutions that
                                enhance your engine&#39;s performance, ensuring your industrial activities benefit
                                from the highest standards of reliability and power.
                            </span>
                        </p>
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
    @push('js')
    <script>
        $(document).ready(function() {
            // body content jquery
            $('#blogBody strong').css({'text-transform':'uppercase','font-size':'30px','color':'#000'});
            $('#blogBody p').css({'color': '#777777','font-size': '16px!important','text-align':'justify'});
            $('#blogBody br').remove();

            @if ( (request('service')->id === 4) )
                const imageUrl = "{{ asset('assets/repair-and-maintenance/Hyster_Forklift_Repair_Service-scaled.jpg') }}";
                const imgTag = '<img src="' + imageUrl + '" class=" mb-2" width="100%" height="450" style="object-fit: cover;">';
                $('#blogBody h1').eq(0).before(imgTag);

            @endif
        });
    </script>

    @endpush
@endsection
