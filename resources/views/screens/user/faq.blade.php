@extends('layouts.app')
@section('content')
<div class="container-fluid p-0 m-0">
    <div class="row p-0 m-0">
        <div class="col-md-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
            {{-- <img src="http://127.0.0.1:8000/admin_panel/services/banner-images/{{ $bannerImg->banner_image }}" alt="" class="w-75" style="height: 387px; object-fit: cover;"> --}}
        </div>
        <div class="col-6 z-0 position-absolute bg-white align-self-end ps-5 pb-5 contact-us_bannerTxt">
            <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">FREQUENTLY ASKED QUESTIONS</p>
            <h1 class="text-black display-3 fw-bold font_heading_banner pt-4 pb-4">FAQ</h1>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row header1_">
            <div class="col-12 faqBigSreen">
                @foreach ($faqs as $faq)
                <div class="faq-questions">
                    <div class="faq-questions__section">
                        <h1 class="text-white display-5 fw-bold addText">{{ $faq->question }}</h1>
                        <i class="fa fa-plus addOnBtn" aria-hidden="true"></i>
                    </div>
                    <p class="d-none pt-4">{{ $faq->answer }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row mt-5 m-0 add-faq__padding">
        <div class="col-xl-6 col-lg-6 col-12 col-sm-12 col-md-12 ps-5 faq-sec">
            <h1 class="text-black display-5">WE ARE A CERTIFIED NY
                <br /> SAFETY INSPECTION<br /> CENTER</h1>
            <div class="ps-3" style="border-left: 1px solid black">
            <p class="font mt-5 pe-3" style="color: #777777; font-size: 17px!important;">We have been <span
                    style="color: #4c4c4c; font-weight: 600;"> providing customers</span>in Dubai area with
                reliable, friendly, and consistent service since 1989. Our technicians specialize in all vehicle makes
                and models.</p>
            <a href="{{ route('contact_us') }}"><button class="faq-appoint text-white px-4 py-3 border-0 font click-btn">GET FREE APPOINTMENT<i
                    class="fas fa-arrow-right ps-2"></i></button></a>
            </div>
                </div>
        <div class="col-xl-5 col-lg-6 col-12 col-sm-12 col-md-12 offset-1 pe-5 faq-left__margin">
            <div class="faq-img__section">
                 {{-- <div class="faq-img__border"> --}}
                    <img src="/assets/service_detail1.png"  />
                {{-- </div> --}}
                {{-- <div class="faq-img__border">
                    <img src="/assets/services/certificate-02-1.svg" />
                </div>
                <div class="faq-img__border">
                    <img src="/assets/services/certificate-03-1.svg" />
                </div> --}}
            </div>
        </div>
    </div>

    {{-- <div class="row p-0 m-0">
        <div class="col-md-12 p-0 m-0 map-height">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d193618.79052890756!2d-74.174462!3d40.689531!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c252e1c5ec0cef%3A0xb3f3b437c5d7f286!2sNewark%20Liberty%20International%20Airport!5e0!3m2!1sen!2sus!4v1699276933676!5m2!1sen!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div> --}}

</div>
@endsection


@push('js')

<script>
    $(document).ready(function () {
  $(".fa-plus").click(function () {
    var $section = $(this).closest(".faq-questions__section");
    var $paragraph = $section.next("p");
    var $icon = $section.find(".fa-plus, .fa-minus");

    $paragraph.toggleClass("d-none");
    $icon.toggleClass("fa-plus fa-minus");
  });

  $(".addText").click(function () {
    var $section = $(this).closest(".faq-questions__section");
    var $paragraph = $section.next("p");
    var $icon = $section.find(".fa-plus, .fa-minus");

    $paragraph.toggleClass("d-none");
    $icon.toggleClass("fa-plus fa-minus");
  });

});

</script>
@endpush
