@extends('layouts.app')
@section('content')
<section style="width: 100%; height: 500px; overflow: hidden;">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 100%; height: 100%;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assets/banners/abt-img.jpg') }}" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
              <img src="{{ asset('assets/banners/e76101e5ea.jpg') }}" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/banners/EH_Digital_Solutions_3.5e3b1daf80c81-680x365_c.png') }}" class="d-block w-100 img-fluid" alt="...">
          </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/banners/hysterproductsb-w608.jpg') }}" class="d-block w-100 img-fluid" alt="...">
          </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/banners/industrial_support_and_services_cover.jfif') }}" class="d-block w-100 img-fluid" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>
    <section class="py-5">
        <div class="container">
            <h4 class="display-5 fw-bold text-center py-4 text-uppercase"></h4>
        </div>
        <div class="container border border-0 rounded-4 pt-3 shadow-lg">
            <div class="row p-4">
                <div class="col">
                    <h4 class="display-5 fw-bold pb-3 text-dark">ABOUT US</h4>
                    <div class="lh-lg pb-3" style="text-align: justify;">
                        <div>
                            <h4 class="display-6 fw-bold pb-3 lh-base">Saudi Industrial Support Services: Three Decades of Excellence
                            </h4>
                            <p class="text-muted">
                                Founded in the heart of Saudi Arabia, known as Jeddah, over 30 years ago,
                                Saudi Industrial has established itself as a pillar of industrial support and
                                excellence, serving the myriad needs of major industries across the Kingdom.
                                Our journey began with a simple yet ambitious vision: to provide unparalleled
                                support to construction &amp; manufacturing businesses, ports and warehouses;
                                fostering growth, efficiency, and innovation in the Saudi commercial landscape.
                                Over the years, Saudi Industrial has evolved from a modest venture into a
                                comprehensive support system for the Kingdom&#39;s industrial sector. Our growth is
                                a testament to our unwavering commitment to quality, reliability, and customer
                                satisfaction. As we adapted to the changing dynamics of industry and
                                technology, our services expanded to encompass a wide range of specialized
                                support, from equipment and vehicle maintenance to steel fabrication and
                                material handling equipment rental.
                                Our success is rooted in our deep understanding of the challenges and
                                opportunities within Saudi Arabia&#39;s industrial sector. Each project and partnership
                                has contributed to our rich repository of knowledge and experience, enabling us
                                to offer solutions that are not only effective but also customized to meet the
                                unique needs of our clients. We pride ourselves on our ability to learn and grow,
                                constantly incorporating new technologies and methodologies to enhance our
                                service offerings.
                                At the core of our operations is a team of highly skilled professionals, each an
                                expert in their respective fields. From engineers and technicians to customer
                                service representatives and project managers, our team is our strength. Their

                                dedication and expertise have been instrumental in building long-lasting
                                relationships with our clients, many of whom have been with us since our early
                                days.
                                Our commitment goes beyond just meeting client expectations; we aim to exceed
                                them. We believe in a partnership-driven approach, where our success is
                                measured by the success of our clients. This philosophy has guided us through
                                three decades of service and continues to be the cornerstone of our operations.
                                As we look to the future, Saudi Industrial is poised for continued growth and
                                innovation. We remain dedicated to contributing to the Kingdom&#39;s industrial
                                development, supporting sustainability initiatives, and fostering a culture of
                                excellence within our organization and among our clients. Our journey thus far
                                has been remarkable, but we believe the best is yet to come. Join us as we
                                continue to set new standards in industrial support and celebrate the spirit of
                                progress and innovation in Saudi Arabia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
