@extends('layouts.app')
@section('content')

<div class="continer-fluid p-0 m-0">
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
            {{-- <img src="http://127.0.0.1:8000/admin_panel/services/banner-images/{{ $bannerImg->banner_image }}" alt="" class="w-75"> --}}
        </div>
        <div class="col-6 z-0 position-absolute bg-white align-self-end ps-5 pb-5 brands-sec__start contact-us_bannerTxt">
            <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">EXOTIC CARS HAS BEEN SERVICING IN DUBAI
            </p>
            <h1 class="text-black display-3 fw-bold pt-4 pb-4">ABOUT</h1>
        </div>
    </div>

    <div class="header1">
    <div class="row p-0 m-0 pb-5 aboutUsBigScreen">
        <div class="col-md-12 ps-4 about-us__secOne">
            <h1 class="">WHO WE ARE</h1>
        </div>
        <div class="col-lg-6 col-md-12 mt-4 ps-4 mb-5 ">
            <div class="row ms-1 mb-5 remove-bottom__margin">
                <div class="col-10 pb-0 pe-3 mt-4 font about-us__secPara">
                    <p>John Smith became the owner of Exotic Cars Services on June 1st, 1989. Over the years, John has always stated that he did not choose auto repair as his profession, but it was more <span> like vice versa.</span></p>
                    <p>Exotic Services offers top-quality auto repair and maintenance services to residents of Minneapolis and surrounding communities. We have a <span> team of skilled </span> and <span> ASE-certified</span> technicians who only use the latest diagnostic tools and equipment in the automotive industry. We are a NAPA Auto Care Center where our technicians receive ongoing training to deliver the  <span> highest quality of service </span> possible. When you bring your car to us for a repair or maintenance service, we’ll treat you with respect and dignity. We won’t bother you with any unnecessary expenses.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-12 mt-4 ps-4 mb-5 remove-top__margin">
            <div class="row ms-1">
                <div class="col-10 pe-3 pb-0 mt-4 mb-4 font about-us__secPara">
                    <p>From transmission repair to oil changes, we’re here for all of your auto repair needs! Our shop is a <span>  full-service,</span> auto repair facility that offers free Wi-Fi, complimentary drinks, and an exceptional customer service. </p>
                    <p>We are always willing to go the <span> extra mile to educate</span> our customers! We’ll even bring you out back to physically show you what’s going on with your vehicle.</p>
                    <p>Please come by and let us take care of all your car care needs. <span> We’re here to help!</span></p>
                </div>
            </div>
            <a href="{{ route('contact_us') }}" class="anchor_text1 ms-5" style="color:#f3f3f3; font-size: 20px;">CONTACT US</a>
        </div>
    </div>
	</div>


    <div class="row m-0 about-us__secTwo">
        <div class="col-md-12 col-12">
            <div class="justify-content-between text-center pt-2 pb-5">
                <h1 class="m-3">QUALITY</h1>
                <h2 class="m-3">WHY CHOOSE US</h2>
                <p>We at Exotic Cars Services know your car is <span> more than a tool </span> that gets you from point A to point B, it’s your freedom. Your car lets you complete essential daily activities such as traveling to and from work, buying groceries, and picking up the children from school. You depend on it, so it’s important your car receives quality <span> repairs and service.</span> When you bring your car to Exotic Cars Services, we make sure your car leaves trouble-free so you can have your freedom, and your peace of mind.</p>
            </div>
        </div>
    </div>


    <div class="container-fluid p-0 m-0">
        <div class="row p-0 m-0 font" style="border-top: 1px solid black;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0 m-0 d-flex justify-content-center flex-wrap  about-us__section3rd">
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

    </div>

    <div class="header1">
    <div class="row p-0 m-0 ps-2 about-us__sec4">
        <div class="col-md-12 mt-5">
            <h1>YEARS OF EXPERIENCE</h1>
        </div>
        <div class="col-md-11 mt-5 mx-4 py-0 ps-4 about-us__Yoe">
            <p style="">With a diverse fleet of finest cars boasting of the best in terms of comfort, power, style, and cutting-edge technology, Exotic Cars promises to not only meet but surpass your expectations. Apart from brand-new super cars, our wide collection of the most affordable luxury cars in Dubai presents you with the finest vehicles in the market, namely Ferrari, Porsche, Rolls Royce, Bentley, Mercedes Benz, and BMW, among other premium brands.</p>

        </div>
        <div class="row about-us__container">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ps-4 mt-5 mb-5">
           <div class="about-us__lastSect1">
            <img src="assets/about-us__.webp" />
           </div>
        </div>

        <div class=" col-lg-5 col-md-12 col-md-5 col-sm-12 col-12 ms-5 mt-5 pe-4 mb-5 about-us_another">
            <div class="about-us__lastSect2">
            <div class="about-us__lastSect2Img">
                <img src="/assets/comma.png" alt="">
            </div>
            <div class="about-us__lastSect2Text">
                <h3>Expert service when you need it. We'll be there for you in time. We'll tow your car, fix it and get you back on the road. This is our guarantee to you.</h3>
            </div>
            <a href="{{ route('contact_us') }}"><button class="click-btn text-black px-4 py-3 border-0 font_with_heading mt-2" style="background-color: white;font-size: large;">GET FREE APPOINTMENT<i class="fas fa-arrow-right ps-2"></i></button></a>

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
