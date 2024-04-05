@extends('layouts.app')
<style type="text/css">
    .toggle-btn button{
        padding: 8px 25px;
        font-size: 15px;
        font-weight: 500;
        background-color: #e3e3e3;
        color: black;
        border: 1px solid transparent;
        border-radius: 40px!important;
        font-family: 'Poppins', sans-serif;

    }

    .toggle-btn button:hover{
        background-color: transparent!important;
        border: none!important;
    }

    .toggle-btn button.active:hover{
        background-color: #dbb778!important;
    }

    .toggle-btn button.active{
        background-color: #dbb778;
        border: 1px solid transparent;
        color:black;
        border-radius: 40px!important;
    }

    .toggle-div{
        background-color: #e3e3e3;
        border-radius: 40px!important;
    }


  </style>
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
            <img src="http://192.168.2.31:8000/admin_panel/services/banner-images/{{ $bannerImg->banner_image }}" alt="" class="w-75">
        </div>
        <div class="col w-50 z-0 position-absolute bg-white align-self-end ps-5 pb-5 contact-us_bannerTxt">
            <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">WE PRIDE OURSELVES IN PROVIDING EXCELLENT SERVICE</p>
            {{-- <hr class=""> --}}
            <h1 class="text-black display-3 fw-bold font_heading_banner pt-4 pb-4">SERVICES</h1>
            {{-- <hr class=""> --}}
        </div>
    </div>
</div>

<div class="custom-container">
    <div class="row mt-5">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ps-5 services-main__forAll">
            <h1 class="text-black display-5 fw-bold font_heading" style="font-weight: 700 !important;">IF IT HAS WHEELS ON IT,<br>WE CAN HELP YOU</h1>
            <p class="font mt-5" style="color: #777777; font-size: 16px!important;">We'll tow it, repair it, get it back in tip top shape in the shortest time
                possible. If it's locksmith services, junk car removal or car repair - we
                have our hand in everything car related.</p>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-12 offset-1 pe-5 services-main__forAllAppot">
            {{-- <hr> --}}
            <div class="services-sec">
            <a href="#"><i class="fa-solid fa-phone-flip text-black ps-2 fs-4"><span class="text-black fw-normal m-3 side_heading" style="font-weight: 800 !important;">{{ $getNo->phone_number }}</span></span></i></a>
            <p class="font ps-5" style="color: #777777; font-size: 16px!important;">If you have any questions, feel free to call us or get free
                appointment</p>
                <a href="{{ route('contact_us') }}"><button class=" text-white px-4 py-3 border-0 font_with_heading ms-5 ps-4 pe-4" style="background-color: #171616;font-size: large;">GET FREE APPOINTMENT<i class="fas fa-arrow-right ps-2"></i></button></a>
            {{-- <hr> --}}
        </div>
        </div>
    </div>


    <div class="row mt-5">

        <div class="text-center mt-4 toggle-btn mb-5">
            <div class="btn-group me-2 toggle-div" role="group" aria-label="Second group">
                <button type="button" class="btn btn-secondary active serviceGarage">Service Garage</button>
                <button type="button" class="btn btn-secondary bodyShop">Body Shop</button>
            </div>
        </div>

        <div class="col-12 d-flex flex-wrap">
            <div class="row service_img justify-content-center" id="addServices">
                @foreach ($garageServices as $service)
                    <div class="col-md-4 col-sm-6 col-12">
                        <a href="/services/{{ $service->service_name }}" style="text-decoration: none"><div class="card border-0">
                            <div class="position-relative img_hover">
                                <img src="http://192.168.2.31:8000/admin_panel/services/service/{{ $service->brand_banner }}" class="card-img-top" alt="...">
                            </div>
                            <h6 class="card-title fw-bold font pt-3">{{ $service->service_name }}</h6>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center mb-5 cus-reviews__allHeading">
            <h1 class="text-dark display-5 fw-bold py-4 font_heading">100% APPROVED BY CUSTOMERS</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="row reviews d-flex justify-content-center px-5 cus-reviews__all">
                @foreach ($reviews as $review)
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body p-5 ser-detail__services" style="height: 537px;">
                            <img src="/assets/comma.png" alt="">
                          <p class="card-text font py-3" style="color: #777777;">{{ $review->review }}</p>
                            {{-- <hr> --}}
                            <h5 class="card-title">{{ $review->name }}</h5>
                            @php
                            $maxStars = 5;
                            $filledStars = min(ceil($review->rating), $maxStars);
                            $emptyStars = $maxStars - $filledStars;
                            @endphp

                            @for ($i = 0; $i < $filledStars; $i++)
                                <span class="fa fa-star checked"></span>
                            @endfor

                            @for ($i = 0; $i < $emptyStars; $i++)
                                <span class="fa fa-star"></span>
                            @endfor
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <a href="{{ route('reviews') }}" class="text-dark anchor_text">READ ALL REVIEWS</a>
        </div>
    </div>

</div>
@endsection

@push('js')
<script>
    $(document).ready(function(){

        var garage = @json($garageServices);
        showData(garage);

    // ANNUAL CHECKUPS FROM YOUR PHYSICIAN KEEP YOU IN GOOD HEALTH
    function showData(data){

    // console.log(a[0].service_name)

    $('.img_hover').mouseenter(function() {
    var check_heading =  $(this).parent('.card').find('h6').text();
    var p_text;
    data.forEach(function(service) {
        if (check_heading === service.service_name) {
            p_text = service.text_on_hover;
        }
    });

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

    }

    $('.btn-group button').click(function() {
        // Remove the 'active' class from all buttons in the group
        $('.btn-group button').removeClass('active');

        // Add the 'active' class to the clicked button
        $(this).addClass('active');

        // Clear existing content in #addServices
        $('#addServices').empty();


        // Append content based on the active button
        if ($(this).hasClass('serviceGarage')) {

            var garageServices = @json($garageServices);

            // Append content for service garage
            garageServices.forEach(function(service) {
                $('#addServices').append(`
                    <div class="col-md-4 col-sm-6 col-12">
                        <a href="/services/${service.service_name}" style="text-decoration: none">
                            <div class="card border-0">
                                <div class="position-relative img_hover">
                                    <img src="http://192.168.2.31:8000/admin_panel/services/service/${service.brand_banner}" class="card-img-top" alt="...">
                                </div>
                                <h6 class="card-title fw-bold font pt-3">${service.service_name}</h6>
                            </div>
                        </a>
                    </div>
                `);
            });

            showData(garageServices);

        } else if ($(this).hasClass('bodyShop')) {
            var bodyShop = @json($bodyShopServices);


            // Append content for service garage
            bodyShop.forEach(function(service) {
                $('#addServices').append(`
                    <div class="col-md-4 col-sm-6 col-12">
                        <a href="/services/${service.service_name}" style="text-decoration: none">
                            <div class="card border-0">
                                <div class="position-relative img_hover">
                                    <img src="http://192.168.2.31:8000/admin_panel/services/service/${service.brand_banner}" class="card-img-top" alt="...">
                                </div>
                                <h6 class="card-title fw-bold font pt-3">${service.service_name}</h6>
                            </div>
                        </a>
                    </div>
                `);
            });

            showData(bodyShop);
        }
    });


});
</script>
@endpush
