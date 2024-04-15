@extends('layouts.app')
{{--
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400&display=swap" rel="stylesheet"> --}}
<style type="text/css">
    .imgDetail-div {
        height: auto;
        width: 600px;
        margin: 25px auto;
    }

    .imgDetail-div img {
        height: auto;
        max-width: 100%;
    }

    .blog-detail__body {
        padding-right: 7rem;
        padding-left: 8rem;
        margin-right: 1.5rem;
        margin-left: 1.5rem;
        text-align: left;
    }

    .blog-detail__body h1 {
        font-size: 35px;
        font-weight: 700;
    }

    .body-main_content h5 {
        font-size: 16px !important;
        font-weight: bold !important;
    }

    .body-main_content p {
        font-size: 16px !important;
        font-weight: 400 !important;
        color: black !important;
        line-height: 24px;
    }

    .prev-next_btns {
        /* padding-right: 3rem!important;
    padding-left: 3rem!important; */
        margin-right: 9rem !important;
        margin-left: 10rem !important;
        text-align: left;
    }

    .prev-css a {
        color: black;
        text-decoration: none;
    }

    .prev-css {
        border-right: 1.5px solid gray;
    }

    .next-css {
        text-align: right;
    }

    .next-css a {
        color: black;
        text-decoration: none;
    }

    .next-css a:hover,
    .prev-css a:hover {
        /* color: #7887db; */
    }

    .prev-next_btns {
        padding: 15px;
        border: solid thin;
        margin-top: 25px;
    }

    .remove-pad {
        padding-top: 3rem !important;
    }

    .back-blogs {
        padding-right: 3rem;
        padding-left: 3rem;
        margin-right: 1.5rem;
        margin-left: 1.5rem;
        text-align: left;
    }

    .back-blogs button {
        padding: 8px 22px;
        font-size: 16px;
        font-weight: 500;
        font-family: poppins, Sans-serif !important;
        border-radius: 3px;
        margin-bottom: 15px;
        background-color: white;
        border: 1px solid black;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
    }

    .back-blogs button:active,
    .back-blogs button:hover {
        background-color: #dbb778 !important;
        color: white !important;
    }

    .back-blogs>a>button:hover .btnIconBack {
        /* background-color: black!important; */
        color: white !important;
        /* background-color: #ffffff!important; */

    }

    .back-blogs button i {
        padding-right: 8px;
    }

    .blog-detail__body h1 {
        text-transform: uppercase;
    }

    @media (max-width: 400px) {
        .blog-detail__body {
            padding-right: 0rem;
            padding-left: 0rem;
            margin-right: 0.5rem;
            margin-left: 0.5rem;
            text-align: left;
        }

        .imgDetail-div {
            width: 100%;
        }

        .remove-pad {
            padding-top: 0px !important;
        }

        .prev-next_btns {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important;
        }

        .nextTextDynamic {
            display: none;
        }

        .previousTextDynamic {
            display: none;
        }

        .back-blogs {
            padding-left: 0rem;
            padding-right: 0rem;
            margin-left: 0.5rem;
        }

        .blog-detail__body h1 {
            text-transform: uppercase;
        }

        .back-blogs button {
            padding: 8px 12px;
            font-size: 13px;
        }

        .back-blogs button i {
            padding-right: 2px;
            padding-left: 0px !important;
        }

        /* .prev-css {
      border-right: none;
      border-bottom: 1.5px solid black;
      padding-bottom: 12px;
    }

    .next-css {
      text-align: left;
      padding-top: 10px;
    } */


    }

    @media (max-width: 576px) and (min-width: 400px) {
        .blog-detail__body {
            padding-right: 0rem;
            padding-left: 0rem;
            margin-right: 0.5rem;
            margin-left: 0.5rem;
            text-align: left;
        }

        .imgDetail-div {
            width: 100%;
        }

        .remove-pad {
            padding-top: 0px !important;
        }

        .prev-next_btns {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important;
        }

        .nextTextDynamic {
            display: none;
        }

        .previousTextDynamic {
            display: none;
        }

        .back-blogs {
            padding-left: 0rem;
            margin-left: 0.5rem;
        }


    }

    @media (max-width: 768px) and (min-width: 576px) {
        .blog-detail__body {
            padding-right: 0rem;
            padding-left: 0rem;
            margin-right: 0.5rem;
            margin-left: 0.5rem;
            text-align: left;
        }

        .imgDetail-div {
            width: 100%;
        }

        .remove-pad {
            padding-top: 0px !important;
        }

        .prev-next_btns {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important;
        }

        .prev-css {
            border-right: none;
            border-bottom: 1px solid black;
            padding-bottom: 12px;
        }

        .next-css {
            text-align: left;
            padding-top: 10px;
        }

        .back-blogs {
            padding-left: 0rem;
            margin-left: 0.5rem;
        }

        .imgDetail-div {
            width: 100%;
        }
    }

    @media (max-width: 992px) and (min-width: 768px) {
        .imgDetail-div {
            width: 100%;
        }

        /* .prev-next_btns {
      margin-right: 1.5rem !important;
      margin-left: 1.5rem !important;
    } */

        .prev-css {
            border-right: none;
            border-bottom: 1px solid black;
            padding-bottom: 12px;
        }

        .next-css {
            text-align: left;
            padding-top: 10px;
        }
    }

    @media (max-width: 1200px) and (min-width: 992px) {}

    a.btn {
        font-size: 15px !important;
        font-weight: 500 !important;
        text-transform: uppercase !important;
        line-height: 1.56em !important;
        letter-spacing: 2px !important;
        font-family: poppins, Sans-serif !important;
    }

    .heading-image {
        width: 100%;
        height: 22rem;
        object-fit: cover;
        margin-block: 10px;
    }
</style>
@section('content')
    <div class="container-fluid p-0 m-0">
        <div class="row p-0 m-0">
            <div class="col-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
                <img src="{{ asset('assets/banners/blogs.jpg') }}" alt="" class="w-75">
            </div>
            <div
                class="col-6 z-0 position-absolute bg-white align-self-end ps-5 pb-5 brands-sec__start contact-us_bannerTxt">
                <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">100% APPROVED BY CUSTOMERS
                </p>
                <h1 class="text-black display-3 fw-bold pt-4 pb-4">BLOG </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div>
                <a href="{{ url('blogs') }}" class="btn btn-dark border-0 rounded-0 py-3 px-2">
                    <i class="fas fa-arrow-left ps-2" aria-hidden="true"></i>
                    BACK TO BLOGS
                </a>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-md-12 col-12 pt-5 pe-0">
                <div class="" style="text-align: justify;">
                    <h2 class="fs-2 fw-bold text-uppercase">{{ $blog->title }}</h2>
                    <div class="">
                        <img src="{{ $blog->getFirstMediaUrl('blog_images') }}" class="heading-image" />
                    </div>
                    <div id="blogBody">
                        {!! $blog->body !!}
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row prev-next_btns">
                    <div class="col-md-12 col-lg-6 col-sm-12 col-6 prev-css">
                        @if ($previousPost)
                        <a href="{{ url('blog/details',$previousPost->id) }}" class="previousNext col-md-12">
                            <p style="padding: 0px; margin:0px;color: var(--background-color);"><b>PREVIOUS</b></p>
                            <p class="previousTextDynamic" style="padding: 0px; margin:0px;">
                                {{ Str::limit(
                                    $previousPost->title,
                                    40,
                                ) }}
                            </p>
                        </a>
                        @else
                <a class="previousNext col-md-12 col-sm-12 col-6">
                  <p style="padding: 0px; margin:0px;color: var(--background-color);"><b>PREVIOUS</b></p>
                  <p class="previousTextDynamic" style="padding: 0px; margin:0px;">No Previous Blog</p>
                </a>
                        @endif
                    </div>

                    <div class="col-md-12 col-lg-6 col-sm-12 col-6 next-css">
                        @if ($nextPost)
                        <a href="{{ url('blog/details',$nextPost->id) }}" class="previousNext col-md-12">
                            <p style="padding: 0px; margin:0px;color: var(--background-color);"><b>NEXT</b></p>
                            <p class="nextTextDynamic" style="padding: 0px; margin:0px;">
                                {{ Str::limit(
                                    $nextPost->title,
                                    40,
                                ) }}
                            </p>
                        </a>
                        @else
                        <a class="previousNext col-sm-12 col-md-12 col-6">
                  <p style="padding: 0px; margin:0px;color : var(--background-color);"><b>NEXT</b></p>
                  <p class="nextTextDynamic" style="padding: 0px; margin:0px;">No Next Blog</p>
                </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row align-items-center justify-content-center">
            <div class="col-md-2">
                <div class="pagination">
                    @if ($previousPost)
                        <a href="{{ url('blog/details',$previousPost->id) }}" class="btn rounded text-white px-4 mb-2 me-2">Previous</a>
                    @endif

                    @if ($nextPost)
                        <a href="{{ url('blog/details',$nextPost->id) }}" class="btn rounded text-white px-4 mb-2">Next</a>
                    @endif
                </div>
            </div>
        </div> --}}
    </div>
    </div>

    <script>
        $(document).ready(function() {
            // body content jquery
            $('#blogBody strong').css('text-transform', 'uppercase');
            $('#blogBody br').remove();

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
