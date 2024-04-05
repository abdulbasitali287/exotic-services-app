@extends('layouts.app')
{{-- <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400&display=swap" rel="stylesheet"> --}}
<style type="text/css">
    .blogs .cardd img{
        height: 200px;
        width: 100%;
        object-fit: cover;
        border-top-right-radius: 15px;
        border-top-left-radius: 15px;
    }

    .cardd{
        width: 30%!important;
        padding: 0px 0 35px 0;
        margin-right: 12px;
        margin-left: 20px;
        padding-right: 0px!important;
        padding-left: 0px!important;
        border-radius: 15px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-top: 25px!important;
    }

    .all-cardsMain{

    }

    .blogs .card-titlee{
        padding: 15px 12px;
        text-align: center;
        font-size: 22px;
        font-weight: 700;
        height: 110px;
        /* font-family: 'Rubik', sans-serif !important; */
    }

    .blogs .card-textt{
        text-align: center;
        font-weight: 400;
    }

    .read-moreBtn{
        text-align:center;
    }

    .read-moreBtn a{
        padding: 8px 30px;
        background-color: #dbb778;
        color: black;
        text-transform: uppercase;
        border: 1px solid #dbb778;
        font-size: 17px;
        font-weight: 500;
        font-family: poppins,Sans-serif !important;
    }

    .read-moreBtn a:active{
        background-color: black!important;
    }

    .read-moreBtn a:hover{
        background-color: black;
        border: 1px solid black;
    }

    .remove-pad{
        padding-top: 3rem!important;
    }

  @media (max-width: 400px) {
    .cardd{
        width: 85%!important;
        margin-right: 0px;
        margin-top: 30px!important;
    }

    .remove-pad{
        padding-top: 0px!important;
    }

    .all-cardsMain{
        justify-content: center;
    }
  }

  @media (max-width: 576px)  and (min-width: 400px) {
    .cardd{
        width: 80%!important;
        margin-right: 0px;
        margin-top: 30px!important;
    }

    .remove-pad{
        padding-top: 0px!important;
    }

    .blogs .card-titlee {
        height: 110px;
    }

    .all-cardsMain{
        justify-content: center;
    }
  }

  @media (max-width: 768px)  and (min-width: 576px) {
    .cardd{
        width: 45%!important;
        margin-right: 0px;
        margin-top: 30px!important;
    }

    .remove-pad{
        padding-top: 0px!important;
    }

    .blogs .card-titlee {
        height: 150px;
    }
  }

  @media (max-width: 992px)  and (min-width: 768px) {
    .cardd{
        width: 45%!important;
        margin-right: 0px;
        margin-top: 30px!important;
    }

    .remove-pad{
        padding-top: 0px!important;
    }

    .blogs .card-titlee {
        height: 110px;
    }
  }

  @media (max-width: 1200px)  and (min-width: 992px) {
    .cardd{
        width: 30%!important;
        margin-right: 0px;
        margin-top: 30px!important;
    }

    .remove-pad{
        padding-top: 0px!important;
    }

    .blogs .card-titlee {
        height: 135px;
    }
  }


</style>
@section('content')

<div class="continer-fluid p-0 m-0">
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
            <img src="http://192.168.2.31:8000/admin_panel/services/brand/6570656e3d469.png" alt="" class="w-75">
        </div>
        <div class="col-6 z-0 position-absolute bg-white align-self-end ps-5 pb-5 brands-sec__start contact-us_bannerTxt">
            <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">100% APPROVED BY CUSTOMERS
            </p>
            {{-- <hr class=""> --}}
            <h1 class="text-black display-3 fw-bold pt-4 pb-4">BLOGS</h1>
            {{-- <hr class=""> --}}
        </div>
    </div>
    <div class="container">
    <div class="row pb-5 remove-pad" style="width: 100%;">
        <div class="col-md-12 col-12 pt-5 pe-0">
            <div class="blogs justify-content-center  review-details__allSection">
                <div class="row justify-content-left all-cardsMain">

                @foreach ($blogs as $blog)
                @php
                    $formattedDate = \Carbon\Carbon::parse($blog->created_at)->format('M d, Y');
                @endphp
                <div class="cardd">
                    {{-- <img src="http://192.168.2.31:8000/admin_panel/services/blog/{{ $blog->image }}" class="card-img-top" alt="..."> --}}
                    <div class="card-bodyy">
                      <h5 class="card-titlee">{{ Str::limit($blog->title, 60) }}</h5>
                      <p class="card-textt">{{ $formattedDate }}</p>
                      <div class="read-moreBtn">
                      <a href="/blog/{{ $blog->id }}/{{ $blog->slug }}" class="btn btn-primary">Read More</a>
                    </div>

                    </div>
                </div>
                @endforeach
            </div>
            </div>
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
