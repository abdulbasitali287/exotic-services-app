@extends('layouts.app')
@push('styles')
    <style type="text/css">
        .blogs .cardd img {
            height: 200px;
            width: 100%;
            object-fit: cover;
            border-top-right-radius: 15px;
            border-top-left-radius: 15px;
        }
        .blogs .card-titlee {
            padding: 15px 12px;
            text-align: center;
            font-size: 22px;
            font-weight: 700;
            height: 110px;
            /* font-family: 'Rubik', sans-serif !important; */
        }

        .blogs .card-textt {
            text-align: center;
            font-weight: 400;
        }

        .read-moreBtn {
            text-align: center;
        }

        .read-moreBtn a {
            padding: 8px 30px;
            background-color: #dbb778;
            color: black;
            text-transform: uppercase;
            border: 1px solid #dbb778;
            font-size: 17px;
            font-weight: 500;
            font-family: poppins, Sans-serif !important;
        }

        .read-moreBtn a:active {
            background-color: black !important;
        }

        .read-moreBtn a:hover {
            background-color: black;
            border: 1px solid black;
        }

        .remove-pad {
            padding-top: 3rem !important;
        }

        @media (max-width: 400px) {
            .cardd {
                width: 85% !important;
                margin-right: 0px;
                margin-top: 30px !important;
            }

            .remove-pad {
                padding-top: 0px !important;
            }

            .all-cardsMain {
                justify-content: center;
            }
        }

        @media (max-width: 576px) and (min-width: 400px) {
            .cardd {
                width: 80% !important;
                margin-right: 0px;
                margin-top: 30px !important;
            }

            .remove-pad {
                padding-top: 0px !important;
            }

            .blogs .card-titlee {
                height: 110px;
            }

            .all-cardsMain {
                justify-content: center;
            }
        }

        @media (max-width: 768px) and (min-width: 576px) {
            .cardd {
                width: 45% !important;
                margin-right: 0px;
                margin-top: 30px !important;
            }

            .remove-pad {
                padding-top: 0px !important;
            }

            .blogs .card-titlee {
                height: 150px;
            }
        }

        @media (max-width: 992px) and (min-width: 768px) {
            .cardd {
                width: 45% !important;
                margin-right: 0px;
                margin-top: 30px !important;
            }

            .remove-pad {
                padding-top: 0px !important;
            }

            .blogs .card-titlee {
                height: 110px;
            }
        }

        @media (max-width: 1200px) and (min-width: 992px) {
            .cardd {
                width: 30% !important;
                margin-right: 0px;
                margin-top: 30px !important;
            }

            .remove-pad {
                padding-top: 0px !important;
            }

            .blogs .card-titlee {
                height: 135px;
            }
        }

        a.btn {
            font-size: 15px !important;
            font-weight: 500 !important;
            text-transform: uppercase !important;
            line-height: 1.56em !important;
            letter-spacing: 2px !important;
            font-family: poppins, Sans-serif !important;
        }

        img.card-img-top {
            height: 15rem;
            object-fit: cover;
        }
    </style>
@endpush
@section('content')
    <div class="continer-fluid p-0 m-0">
        @foreach ($bannersData as $banner)
        @if ($banner->page === "blog")
        <div class="row p-0 m-0">
            <div class="col-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
                {{-- <img src="{{ asset('assets/banners/about-us-banner.jpg') }}" alt="" class="w-75"> --}}
                <img src="{{ $banner->getFirstMediaUrl('banner_images') }}" class="w-75 rounded-0" alt="sevice image">
            </div>
            <div
                class="col-6 z-0 position-absolute bg-white align-self-end ps-5 pb-5 brands-sec__start contact-us_bannerTxt">
                <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">{{ $banner->description }}
                </p>
                <h1 class="text-black display-3 fw-bold pt-4 pb-4">{{ $banner->title }}</h1>
            </div>
        </div>
        @endif
        @endforeach
        <div class="container">
            <div class="row py-5" style="width: 100%;">
                @forelse ($blogs as $blog)
                <div class="col-lg-4 px-2">
                    <div class="card mb-sm-4 shadow border-0">
                        <img src="{{ $blog->getFirstMediaUrl('blog_images') }}"
                            class="card-img-top" alt="...">
                        <div class="card-content text-center">
                            <h5 class="card-title fw-bold px-1 pt-3" style="height: 80px;text-align-justify">
                                {{ Str::limit($blog->title,60,
                                ) }}
                            </h5>
                            <p class="card-textt">{{ $blog->created_at->format('d-M-Y') }}</p>
                            <div class="d-flex justify-content-center pb-3">
                                <a href="{{ url('blog/details',$blog->id) }}"
                                    class="btn btn-dark px-4 py-2 border-0 rounded-0">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
                @empty
                    <div class="m-2 p-2"><p class="fs-5 text-muted">no records found...!</p></div>
                @endforelse
                {{-- <div class="col-md-4 px-2">
                    <div class="card shadow border-0">
                        <img src="{{ asset('assets/blog-cards-img/christopher-burns-8KfCR12oeUM-unsplash.jpg') }}"
                            class="card-img-top" alt="...">
                        <div class="card-content text-center">
                            <h5 class="card-title fw-bold px-1 pt-3" style="height: 80px;text-align-justify">
                                {{ Str::limit(
                                    "The Critical Importance of Preventive Maintenance for Forklifts, Generators, and
                                                                                        Material Handling Equipment in Saudi Arabia.",
                                    60,
                                ) }}
                            </h5>
                            <p class="card-textt">29-March-2024</p>
                            <div class="d-flex justify-content-center pb-3">
                                <a href="{{ url('/blog/details/1') }}"
                                    class="btn btn-dark px-4 py-2 border-0 rounded-0">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-2">
                    <div class="card shadow border-0">
                        <img src="{{ asset('assets/blog-cards-img/gerold-hinzen-WoZs8gGyQBY-unsplash.jpg') }}"
                            class="card-img-top" alt="...">
                        <div class="card-content text-center">
                            <h5 class="card-title fw-bold px-1 pt-3" style="height: 80px;text-align-justify">
                                {{ Str::limit(
                                    "The Strategic Advantage of Refurbishing Old Equipment: A Sustainable
                                                                                        Approach to Industrial Success in Saudi Arabia",
                                    60,
                                ) }}
                            </h5>
                            <p class="card-textt">29-March-2024</p>
                            <div class="d-flex justify-content-center pb-3">
                                <a href="{{ url('/blog/details/2') }}"
                                    class="btn btn-dark px-4 py-2 border-0 rounded-0">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-2">
                    <div class="card shadow border-0">
                        <div class="w-100 h-50">
                            <img src="{{ asset('assets/blog-cards-img/lalit-kumar-HpPmiduLDC0-unsplash.jpg') }}"
                                class="card-img-top" alt="...">
                        </div>
                        <div class="card-content text-center">
                            <h5 class="card-title fw-bold px-1 pt-3" style="height: 80px;text-align-justify">
                                {{ Str::limit(
                                    "The Strategic Advantage of Annual Maintenance Contracts (AMC) for Material
                                                                                        Handling Equipment and Generators",
                                    60,
                                ) }}
                            </h5>
                            <p class="card-textt">29-March-2024</p>
                            <div class="d-flex justify-content-center pb-3">
                                <a href="{{ url('/blog/details/3') }}"
                                    class="btn btn-dark px-4 py-2 border-0 rounded-0">Read More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
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


    {{-- <section class="py-5">
        <div class="container">
            <h4 class="display-5 fw-bold text-center py-4 text-uppercase">BLOGS</h4>
        </div>
        <div class="container border border-0 rounded-4 pt-3 shadow-lg">
            <div class="row p-4">
                <div class="row">
                    <div class="col">
                        <div class="card border-0 pb-2" style="text-align: justify;">
                            <div class="card-body border-0" style="min-height: max-content">
                              <h2 class="display-6 fw-bold pb-3 text-dark">The Critical Importance of Preventive Maintenance for Forklifts, Generators, and
                                Material Handling Equipment in Saudi Arabia.</h2>
                              <p class="text-muted border-0">In the bustling industrial landscape of Saudi Arabia, where the machinery of
                                commerce and industry operates tirelessly, the reliability of essential equipment
                                like forklifts, generators, and material handling equipment is not just a
                                convenience—it&#39;s the backbone of operational continuity. This underscores the
                                necessity of preventive maintenance, particularly for &quot;forklift repair in Saudi
                                Arabia,&quot; &quot;generator maintenance services,&quot; and the upkeep of material handling
                                equipment, transforming it from a mere recommendation to an indispensable
                                practice.</p>
                              <a href="{{ url('/blog/details/1') }}" class="btn btn-dark p-2 fw-bold mt-2">Continue Reading...</a>
                            </div>
                        </div>
                        <div class="card border-0 pb-2" style="text-align: justify;">
                            <div class="card-body border-0" style="min-height: max-content">
                              <h2 class="display-6 fw-bold pb-3 text-dark">The Strategic Advantage of Refurbishing Old Equipment: A Sustainable
                                Approach to Industrial Success in Saudi Arabia</h2>
                              <p class="text-muted border-0">In an era where the pace of industrial operations in Saudi Arabia demands both
                                reliability and efficiency, the decision to refurbish and repair old equipment rather
                                than investing in new units presents a compelling strategic advantage. This
                                approach, particularly relevant for durable machinery like diesel and propane
                                forklifts and generators, is not just a nod to cost efficiency but also a testament to
                                sustainable operational practices.</p>
                              <a href="{{ url('/blog/details/2') }}" class="btn btn-dark p-2 fw-bold mt-2">Continue Reading...</a>
                            </div>
                        </div>
                        <div class="card border-0 pb-2" style="text-align: justify;">
                            <div class="card-body border-0" style="min-height: max-content">
                              <h2 class="display-6 fw-bold pb-3 text-dark">The Strategic Advantage of Annual Maintenance Contracts (AMC) for Material
                                Handling Equipment and Generators</h2>
                              <p class="text-muted border-0">In the bustling economic landscape of Saudi Arabia, where industries thrive on
                                efficiency and reliability, the significance of maintaining operational continuity
                                cannot be overstated. For decision-makers overseeing the seamless operation of
                                diesel and propane forklifts, generators, and material handling equipment, the
                                allure of Annual Maintenance Contracts (AMC) presents not just a solution but a
                                strategic advantage. This blog delves into the importance of AMCs, spotlighting
                                why leading Saudi businesses are increasingly leaning on these contracts to
                                safeguard their machinery.</p>
                              <a href="{{ url('/blog/details/3') }}" class="btn btn-dark p-2 fw-bold mt-2">Continue Reading...</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
