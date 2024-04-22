@extends('layouts.app')
@section('content')
@push('styles')
<style>
    .carousel-control-prev,.carousel-control-next{
        width: 0%;
    }
    .carousel-control-prev{
        left: -3%;
        top: -40%;
    }
    .carousel-control-next{
        right: -3%;
        top: -40%;
    }
    .carousel-control-prev-icon,.carousel-control-next-icon{

    }
    @media (max-width: 500px) {
    .carousel-control-prev{
        left: 1%;
        top: -30%;
    }
    .carousel-control-next{
        right: 1%;
        top: -30%;
    }
   }
</style>

@endpush
<section>
    @foreach ($bannersData as $banner)
        @if ($banner->page === "careers")
        <div class="row p-0 m-0">
            <div class="col-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
                <img src="{{ $banner->getFirstMediaUrl('banner_images') }}" class="w-75 rounded-0" alt="sevice image">
            </div>
            <div class="col-6 z-0 position-absolute bg-white align-self-end ps-md-5 pb-md-5 pt-2 brands-sec__start contact-us_bannerTxt">
                <p class="mt-md-5 mb-md-4 my-0 font text-dark-emphasis fw-semibold">{{ $banner->description }}</p>
                <h1 class="text-black display-3 fw-bold pt-4 pb-4">{{ $banner->title }}</h1>
            </div>
        </div>
        @endif
        @endforeach
</section>

<section>
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-6 col p-0">
                <h1 class="text-black display-5 fw-bold font_heading text-uppercase">Join Our Team at Saudi Industrial: Where Your Career Thrives</h1>
            </div>
            <div class="col-md-6 col px-md-5 px-sm-2">
                <div class="services-sec mt-0">
                    <a href="#"><i class="fa-solid fa-phone-flip text-black ps-2 fs-4"><span
                                class="text-black fw-normal m-3 side_heading"
                                style="font-weight: 800 !important;">+971000000000</span></span></i></a>
                    <p class="font ps-5" style="color: #777777; font-size: 16px!important;">If you have any question,
                        feel free to Contact Us</p>
                    <a href="{{ route('contact-us') }}" class="btn btn-dark px-4 py-3 border-0 rounded-0 ms-5 ps-4 pe-4"
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
</section>
    {{-- <section class="py-5">
        <div class="container">
            <h4 class="display-5 fw-bold text-center py-4 text-uppercase"></h4>
        </div>
        <div class="container border border-0 rounded-4 pt-3 shadow-lg">
            <div class="row p-4">
                <div class="col">
                    <h4 class="display-5 fw-bold pb-3 text-dark">CAREERS</h4>
                    <div class="lh-lg pb-3" style="text-align: justify;">
                        <div>
                            <div>
                                <h4 class="display-6 fw-bold pb-3 lh-base">Join Our Team at Saudi Industrial: Where Your
                                    Career Thrives</h4>
                                <p class="text-muted">
                                    At Saudi Industrial, located in the dynamic city of Jeddah, we&#39;re more than just a
                                    leading provider of repair and maintenance services for material handling
                                    equipment and diesel generators. We&#39;re a family committed to excellence,
                                    innovation, and the continuous growth of our employees. As we serve critical
                                    sectors such as construction, manufacturing, warehousing, and ports operations,
                                    our mission is to ensure smooth and efficient operations for our clients, creating a
                                    direct impact on the economic development and infrastructure of Saudi Arabia.
                                    Here&#39;s why Saudi Industrial stands out as an exceptional place to build your
                                    career:
                                </p>
                            </div>
                            <div>
                                <h5 class="fw-bold">Inclusive and Supportive Culture</h5>
                                <p class="text-muted">
                                    Our core values revolve around fostering an inclusive work environment where
                                    every employee feels valued, heard, and empowered. We believe in the power of
                                    diversity and inclusion, ensuring that our team reflects the wide array of
                                    communities and clients we serve. Our supportive culture encourages teamwork,
                                    open communication, and mutual respect, making Saudi Industrial Support
                                    Services not just a workplace but a place where you belong.
                                </p>
                            </div>
                            <div>
                                <h5 class="fw-bold">Employee Benefits and Well-being</h5>
                                <p class="text-muted">
                                    We prioritize the well-being of our employees with comprehensive benefits
                                    designed to support both your professional and personal life. From competitive
                                    salaries and health insurance to flexible working hours and generous vacation
                                    policies, we ensure our team members enjoy a healthy work-life balance. Our
                                    commitment extends to providing a safe and healthy work environment, where
                                    everyone&#39;s well-being is paramount.
                                </p>
                            </div>
                            <div>
                                <h5 class="fw-bold">Career Development Opportunities</h5>
                                <p class="text-muted">
                                    We are passionate about the professional growth of our employees. We offer
                                    extensive training programs, workshops, and seminars that are tailored to
                                    enhance your skills and knowledge in the industry. With a focus on career
                                    development, we provide opportunities for progression, encouraging our team to
                                    take on new challenges and step into leadership roles. Our aim is to help you
                                    achieve your career aspirations while contributing to our shared success.
                                </p>
                            </div>
                            <div>
                                <h5 class="fw-bold">Innovation and Continuous Improvement</h5>
                                <p class="text-muted">
                                    As a company at the forefront of supporting critical industries, we embrace
                                    innovation and continuous improvement. Working with us means being part of a
                                    team that is always looking for better ways to serve our clients, using the latest
                                    technologies and best practices. This environment not only provides exciting
                                    challenges but also allows you to make a meaningful impact with your work.
                                </p>
                            </div>
                            <div>
                                <h5 class="fw-bold">Making a Difference</h5>
                                <p class="text-muted">
                                    Joining Saudi Industrial means being part of a team that plays a crucial role in
                                    supporting the backbone of Saudi Arabia&#39;s economy. Our work ensures the
                                    operational efficiency of sectors critical to national development, offering you a
                                    chance to contribute to the success of our nation&#39;s industries.
                                </p>
                            </div>
                            <div>
                                <h5 class="fw-bold">Join Us</h5>
                                <p class="text-muted">
                                    If you&#39;re looking for a place where your work matters, where you can grow and
                                    thrive professionally, and where you&#39;re treated like family, look no further than
                                    Saudi Industrial Support Services. Explore the opportunities to start your journey
                                    with us and be a part of our mission to drive success across the industries we
                                    serve. We&#39;re excited to welcome you to our team, where together, we&#39;ll continue
                                    to achieve greatness.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section>
        <div class="container">
            <div class="row py-4">
                <p class="text-muted" style="text-align: justify;">
                    At Saudi Industrial, located in the dynamic city of Jeddah, we're more than just a leading provider of repair and maintenance services for material handling equipment and diesel generators. We're a family committed to excellence, innovation, and the continuous growth of our employees. As we serve critical sectors such as construction, manufacturing, warehousing, and ports operations, our mission is to ensure smooth and efficient operations for our clients, creating a direct impact on the economic development and infrastructure of Saudi Arabia. Here's why Saudi Industrial stands out as an exceptional place to build your career:
                </p>
            </div>
            <div class="row m-0 p-0">
                <div class="col m-0 p-0">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel" style="width: 100%;min-height: 15rem;">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div>
                                <h5 class="display-5 fw-bold text-uppercase fw-bold">Inclusive and Supportive Culture</h5>
                                <p class="text-muted" style="text-align: justify;">
                                    Our core values revolve around fostering an inclusive work environment where every employee feels valued, heard, and empowered. We believe in the power of diversity and inclusion, ensuring that our team reflects the wide array of communities and clients we serve. Our supportive culture encourages teamwork, open communication, and mutual respect, making Saudi Industrial Support Services not just a workplace but a place where you belong.
                                </p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div>
                                <h5 class="display-5 fw-bold text-uppercase fw-bold">Employee Benefits and Well-being</h5>
                                <p class="text-muted" style="text-align: justify;">
                                    We prioritize the well-being of our employees with comprehensive benefits designed to support both your professional and personal life. From competitive salaries and health insurance to flexible working hours and generous vacation policies, we ensure our team members enjoy a healthy work-life balance. Our commitment extends to providing a safe and healthy work environment, where everyone's well-being is paramount.
                                </p>
                            </div>

                          </div>
                          <div class="carousel-item">
                            <div>
                                <h5 class="display-5 fw-bold text-uppercase fw-bold">Career Development Opportunities</h5>
                                <p class="text-muted" style="text-align: justify;">
                                    We are passionate about the professional growth of our employees. We offer extensive training programs, workshops, and seminars that are tailored to enhance your skills and knowledge in the industry. With a focus on career development, we provide opportunities for progression, encouraging our team to take on new challenges and step into leadership roles. Our aim is to help you achieve your career aspirations while contributing to our shared success.
                                </p>
                            </div>

                          </div>
                          <div class="carousel-item">
                            <div>
                                <h5 class="display-5 fw-bold text-uppercase fw-bold">Innovation and Continuous Improvement</h5>
                                <p class="text-muted" style="text-align: justify;">
                                    As a company at the forefront of supporting critical industries, we embrace innovation and continuous improvement. Working with us means being part of a team that is always looking for better ways to serve our clients, using the latest technologies and best practices. This environment not only provides exciting challenges but also allows you to make a meaningful impact with your work.
                                </p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div>
                                <h5 class="display-5 fw-bold text-uppercase fw-bold">Making a Difference</h5>
                                <p class="text-muted" style="text-align: justify;">
                                    Joining Saudi Industrial means being part of a team that plays a crucial role in supporting the backbone of Saudi Arabia's economy. Our work ensures the operational efficiency of sectors critical to national development, offering you a chance to contribute to the success of our nation's industries.
                                </p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div>
                                <h5 class="display-5 fw-bold text-uppercase fw-bold">Join Us</h5>
                                <p class="text-muted" style="text-align: justify;">
                                    If you're looking for a place where your work matters, where you can grow and thrive professionally, and where you're treated like family, look no further than Saudi Industrial Support Services. Explore the opportunities to start your journey with us and be a part of our mission to drive success across the industries we serve. We're excited to welcome you to our team, where together, we'll continue to achieve greatness.
                                </p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev position-absolute m-0 p-0" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon text-dark" aria-hidden="true"><i class="fa-solid fa-chevron-left fs-2"></i></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next position-absolute" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                          <span class="carousel-control-next-icon text-dark" aria-hidden="true"><i class="fa-solid fa-chevron-right fs-2"></i></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section>
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
    </section>
@endsection
