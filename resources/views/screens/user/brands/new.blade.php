@extends('layouts.app')
@section('content')

<div class="continer-fluid p-0 m-0">
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
            <img src="http://192.168.2.31:8000/admin_panel/services/brand/{{ $brand->brand_banner }}" alt="" class="w-75">
        </div>
        <div class="col-6 z-0 position-absolute bg-white align-self-end ps-5 pb-5 brands-sec__start contact-us_bannerTxt">
            <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">VEHICLES WE SERVICE
            </p>
            {{-- <hr class=""> --}}
            <h1 class="text-black display-3 fw-bold pt-4 pb-4">{{ strtoupper($brand->brand_name) }}
            </h1>
            {{-- <hr class=""> --}}
        </div>
    </div>

    <div class="row d-flex m-0 align-items-baseline brand-detail__sectOne brand-txt__detail">
        <div class="col-md-6 col-sm-12 col-12 ps-4 mt-5 mb-5 brand-detail__sect">
            <h1 class="text-black display-5 mb-5">SERVICE AND REPAIR OF {{ $brand->brand_name }} VEHICLES</h1>
                <p class="m-0 px-4">{!! nl2br($brand->description_1) !!}</p>
        </div>

        <div class="col-md-5 col-sm-12 col-12 offset-md-1 mt-5 ps-4 mb-5 align-self-end brand-detail__sect">
            <p class="m-0 px-4">{!! nl2br($brand->description_2) !!}</p>
        </div>
    </div>

    <div class="row p-0 m-0 mt-5" style="background: #252525">
        <div class="col-12 p-3 position-relative brandBigScreens" style="max-height: 516px;">
            <video class="w-100 h-100" controls poster="/assets/brand_detail2.jpg" style="object-fit: cover">
                <source src="/assets/exterior.mp4" type="video/mp4">
            </video>
            <div class="position-absolute top-50 start-50 translate-middle">
                <button class="text-white fs-6 border-0 rounded-circle" id="play_button" style="padding: 30px 34px; background-color: rgb(219, 36, 17)">
                    <i class="fa-solid fa-play text-white fs-3"></i>
                </button>
            </div>
        </div>
    </div>

     <div style="background: #252525">
    <div class="row p-0 m-0 ps-2 brandBigScreens" >
        <div class="col-md-12 mt-5">
            <h1 class="text-white display-5 fw-bold">YEARS OF EXPERIENCE</h1>
        </div>
        <div class="col-md-11 col-12 mt-5 mx-4 py-0 mb-5 ps-4 brand-last__section" style="color:#a9a8a8; font-size: 17px; border-left: 1px solid #a9a8a8;">
            <p style="font-family: 'Poppins', sans-serif;font-size: 16px!important;font-weight: 500">Our shop offers the highest quality service and repair of {{ $brand->brand_name }} vehicles in the area. From the moment you walk through our door until you leave
                satisfied with the results, our team strives to supply only the best service to both you and your vehicle. Whether you need routine maintenance or repairs
                for major damage, our expert team of certified technicians provide top-notch service for any {{ $brand->brand_name }} model.</p>
                <p style="font-family: 'Poppins', sans-serif;font-size: 16px!important;font-weight: 500">Put our service to the test by calling our shop or stopping in to schedule your service appointment today!</p>
                <a href="{{ route('contact_us') }}"><button class="click-btn text-black px-4 py-3 border-0 font_with_heading mt-4" style="background-color: white;font-size: large;">GET FREE APPOINTMENT<i class="fas fa-arrow-right ps-2"></i></button></a>

        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function(){
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
