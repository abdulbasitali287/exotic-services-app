@extends('layouts.app')
@section('content')

<div class="continer-fluid p-0 m-0">
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
            {{-- <img src="http://127.0.0.1:8000/admin_panel/services/banner-images/{{ $bannerImg->banner_image }}" alt="" class="w-75"> --}}
        </div>
        <div class="col-6 z-0 position-absolute bg-white align-self-end ps-5 pb-5 brands-sec__start contact-us_bannerTxt">
            <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">100% APPROVED BY CUSTOMERS
            </p>
            {{-- <hr class=""> --}}
            <h1 class="text-black display-3 fw-bold pt-4 pb-4">REVIEWS</h1>
            {{-- <hr class=""> --}}
        </div>
    </div>

    <div class="row reviews-all_padding">
        <div class="col-md-12 col-12 pt-5">
            <div class="row reviews d-flex justify-content-center px-5 review-details__allSection">
                @foreach ($reviews as $review)
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card" style="margin-top: 30px">
                        <div class="card-body p-5" style="height: 537px;">
                            <img src="/assets/comma.png" alt="">
                          <p class="card-text font py-3 pb-4" style="color: #777777;">{{ $review->review }}</p>
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
