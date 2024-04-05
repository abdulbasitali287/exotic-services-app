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
                    <img src="{{ asset('assets/repairing/construction-equipment-rental-market.jpg') }}" alt=""
                        class="w-75">
                </div>
                <div class="col w-50 z-0 position-absolute bg-white align-self-end ps-5 pb-5 contact-us_bannerTxt">
                    <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">WE PRIDE OURSELVES IN PROVIDING EXCELLENT
                        SERVICE</p>
                    <h1 class="text-black display-3 fw-bold font_heading_banner m-0 pt-4 pb-4 text-uppercase">Rental and
                        Trade</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="services-intro-content">
        <div class="container p-0">
            <div class="row pt-4">
                <div class="col-md-6 p-0">
                    <h1 class="text-black display-5 fw-bold font_heading text-uppercase"
                        style="font-weight: 700 !important;">Material Handling Equipment &amp; Generator</h1>
                    </h1>
                </div>
                <div class="col-md-6 p-0 px-5">
                    <div class="services-sec mt-0">
                        <a href="#"><i class="fa-solid fa-phone-flip text-black ps-2 fs-4"><span
                                    class="text-black fw-normal m-3 side_heading"
                                    style="font-weight: 800 !important;">+971000000000</span></span></i></a>
                        <p class="font ps-5" style="color: #777777; font-size: 16px!important;">If you have any question,
                            feel free to Contact Us</p>
                        <a href="{{ route('contact_us') }}" class="btn btn-dark px-4 py-3 border-0 rounded-0 ms-5 ps-4 pe-4"
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
            <div class="row mb-5">
                <div class="col">
                    <p class="font mt-5" style="color: #777777; font-size: 16px!important;text-align:justify;">
                        Saudi Industrial revolutionizes your operational capabilities through our Material
                        Handling Equipment &amp; Generators Rental and Trade division. Recognizing the
                        critical role of reliable power and efficient material handling in industrial
                        operations, we offer a comprehensive selection of high-quality equipment tailored
                        to meet the diverse needs of our clients across Saudi Arabia.
                    </p>
                </div>
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
                        <p>
                            <span class="d-block pb-2">
                                Our inventory features a wide range of generators, from compact 20 KVA units
                                for small-scale operations to robust 3.0 MVA generators capable of powering
                                large industrial complexes. Similarly, our material handling equipment is
                                designed to enhance efficiency and safety in any operational environment.
                                Whether you&#39;re in need of new or pre-owned units, our commitment to
                                maintenance and reliability ensures that every piece of equipment meets the
                                highest standards of performance.
                            </span>
                            <span class="d-block pb-2">
                                What sets us apart is not just the quality of our equipment, but our unparalleled
                                support services. Our on-site technical support and assistance guarantee that
                                your operations remain uninterrupted, with expert help readily available
                                whenever you need it. This commitment to seamless productivity is further
                                bolstered by our flexible rental and trade options, designed to provide cost-
                                effective solutions that align with your operational budget and requirements.
                            </span>
                            <span class="d-block pb-2">
                                Choosing Saudi Industrial means opting for a partner that understands the
                                intricacies of industrial operations. Our expertise in generators and material
                                handling equipment, combined with a customer-centric approach, ensures that
                                your projects are supported by the best in the business. Let us empower your
                                operations with reliable equipment and exceptional service, driving your business
                                towards greater efficiency and success.
                            </span>
                        </p>
                        <a href="{{ route('contact_us') }}" class="btn btn-dark px-4 py-3 border-0 rounded-0 ps-4 pe-4"
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
            <a href="#" class="text-dark fw-bold ms-5 anchor_text">READ ALL REVIEWS</a>
            <p style="border-bottom: 1.5px solid black;" class="mt-5 ms-5 me-5"></p>
        </div>
    </div>
@endsection
