@extends('layouts.app')
@section('content')

<div class="continer-fluid p-0 m-0">
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0 d-flex justify-content-end">
            <img src="/assets/brand_detail1.jpg" alt="" class="w-75">
        </div>
        <div class="col-6 z-0 position-absolute bg-white align-self-end ps-5 pb-5">
            <p class="mt-5 mb-4  font text-dark-emphasis fw-semibold">VEHICLES WE SERVICE</p>
            {{-- <hr class=""> --}}
            <h1 class="text-black display-3 fw-bold font_heading_banner pt-4 pb-4">ROLLS ROYCE</h1>
            {{-- <hr class=""> --}}
        </div>
    </div>

    <div class="row d-flex p-0 m-0 align-items-baseline">
        <div class="col-md-6 ps-5 mt-5 mb-5">
            <h1 class="text-black display-5 font_heading mb-5" style="font-weight: 700 !important;">SERVICE AND REPAIR OF ROLLS ROYCE VEHICLES</h1>
                <p class="m-0 px-4" style="color:#686868; font-size: 17px; border-left: 2px solid black;font-family: 'Poppins', sans-serif;">Rolls Royce, a subsidiary of the German automobile
                    manufacturer Volkswagen, is one of the<span style="font-weight: 600;"> top three luxury</span>
                    automakers in the world. The company name is derived from
                    the surname of its founder,<span style="font-weight: 600;">Karl Rapp</span>. "Horch" means "listen"
                    in German; and Rolls Royce is the Latin word for listen. But you
                    didn't invest in a Rolls Royce based on clever word play. You
                    own a Rolls Royce because you care about investing in quality.</p>
        </div>

        <div class="col-md-5 offset-md-1 mt-5 ps-5 mb-5 align-self-end">
            <p class="m-0 px-4" style="color:#686868; font-size: 17px; border-left: 2px solid black;font-family: 'Poppins', sans-serif;">As an Rolls Royce owner, you understand that a quality
                vehicle demands quality service. Our shop offers the highest
                quality service and repair of <span style="font-weight: 600;">Rolls Royce vehicles</span> in the area.
                From the moment you walk through our door until you leave
                satisfied with the results, our team strives to supply only the
                best service to both you and your vehicle.</p>
        </div>
    </div>

    <div class="row header1 p-0 m-0 mt-5">
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
    </div>

    <div class="row header1 p-0 m-0 ps-4">
        <div class="col-md-12 mt-5">
            <h1 class="text-white display-5 fw-bold font_heading">YEARS OF EXPERIENCE</h1>
        </div>
        <div class="col-md-11 mt-5 mx-4 py-0 mb-5 ps-4" style="color:#a9a8a8; font-size: 17px; border-left: 2px solid #a9a8a8;">
            <p style="font-family: 'Poppins', sans-serif;">Our shop offers the highest quality service and repair of Rolls Royce vehicles in the area. From the moment you walk through our door until you leave
                satisfied with the results, our team strives to supply only the best service to both you and your vehicle. Whether you need routine maintenance or repairs
                for major damage, our expert team of certified technicians provide top-notch service for any Rolls Royce model.</p>
                <p style="font-family: 'Poppins', sans-serif;">Put our service to the test by calling our shop or stopping in to schedule your service appointment today!</p>
                <button class=" text-black px-4 py-3 border-0 font_with_heading mt-4" style="background-color: white;font-size: large;">GET FREE APPOINTMENT<i class="fas fa-arrow-right ps-2"></i></button>

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
