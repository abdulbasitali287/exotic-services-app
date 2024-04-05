@extends('layouts.app')
@push('styles')
<style>
    .carousel-control-prev,.carousel-control-next{
        width: 0%;
    }
    .carousel-control-prev{
        left: -3%;
        top: -10%;
    }
    .carousel-control-next{
        right: -3%;
        top: -10%;
    }
    .carousel-control-prev-icon,.carousel-control-next-icon{

    }
</style>

@endpush
@section('content')
<section>
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
            <img src="{{ asset('assets/banners/industries.jpg') }}" alt="" class="w-75">
        </div>
        <div
            class="col-6 z-0 position-absolute bg-white align-self-end ps-5 pb-5 brands-sec__start contact-us_bannerTxt">
            <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">100% APPROVED BY CUSTOMERS
            </p>
            <h1 class="text-black display-3 fw-bold pt-4 pb-4">INDUSTRIES SERVED</h1>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-6 p-0">
                <h1 class="text-black display-5 fw-bold text-uppercase">INDUSTRIES WE SERVE WITH EXCELLENCE</h1>
            </div>
            <div class="col-md-6 p-0 px-5">
                <div class="services-sec mt-0">
                    <a href="#"><i class="fa-solid fa-phone-flip text-black ps-2 fs-4"><span
                                class="text-black fw-normal m-3 side_heading"
                                style="font-weight: 800 !important;">+971000000000</span></span></i></a>
                    <p class="font ps-5" style="color: #777777; font-size: 16px!important;">If you have any question,
                        feel free to Contact Us</p>
                    <a href="{{ route('contact_us') }}" class="btn btn-dark px-4 py-3 border-0 rounded-0 ms-5 ps-4 pe-4"
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
<section>
    <div class="container">
        <div class="row py-4">
            <p class="text-muted" style="text-align: justify;">
                At Saudi Industrial, we are dedicated to empowering a broad spectrum of
                industries through our comprehensive repair, maintenance, and support services.
                Our expertise is meticulously tailored to meet the unique needs of the
                construction, manufacturing, warehousing, and ports operations sectors, each
                vital to the robust industrial landscape of Saudi Arabia. Here’s how we align our
                services with the demands of these critical industries:
            </p>
        </div>
        <div class="row m-0 p-0">
            <div class="col m-0 p-0">
                <div id="carouselExampleFade" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel" style="widht: 100%;height: 20rem;">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div>
                            <h5 class="display-5 fw-bold text-uppercase fw-bold">Construction</h5>
                            <p class="text-muted" style="text-align: justify;">
                                In the dynamic and demanding construction industry, the reliability of machinery
                                and equipment is non-negotiable. From towering cranes to heavy-duty loaders,

                                each piece of equipment plays a pivotal role in project timelines and overall
                                success. Saudi Industrial Support Services offers specialized maintenance and
                                repair solutions that ensure your construction machinery is operating at peak
                                efficiency, minimizing downtime and enhancing safety on-site. Our proactive
                                approach helps construction companies meet their project deadlines with
                                confidence, ensuring that every component functions flawlessly.
                            </p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div>
                            <h5 class="display-5 fw-bold text-uppercase fw-bold">Manufacturing</h5>
                            <p class="text-muted" style="text-align: justify;">
                                The manufacturing sector thrives on precision, efficiency, and reliability. A minor
                                disruption can lead to significant delays, affecting production lines and impacting
                                delivery schedules. Recognizing the critical nature of continuous operation, we
                                provide specialized services for the repair and maintenance of material handling
                                equipment and diesel generators, ensuring that manufacturing facilities run
                                smoothly. Our team of experts is adept at diagnosing and resolving issues
                                swiftly, ensuring that your operations are back online with minimal delay. By
                                partnering with us, manufacturing businesses can focus on their core activities,
                                knowing their equipment maintenance is in expert hands.
                            </p>
                        </div>

                      </div>
                      <div class="carousel-item">
                        <div>
                            <h5 class="display-5 fw-bold text-uppercase fw-bold">Warehousing</h5>
                            <p class="text-muted" style="text-align: justify;">
                                Warehousing operations demand high efficiency and reliability, where material
                                handling equipment like forklifts, pallet jacks, and conveyor systems are the
                                backbone of daily activities. Our services ensure that these essential tools are
                                maintained to the highest standards, reducing the risk of unexpected failures that
                                can disrupt logistics and inventory management. Saudi Industrial Support
                                Services understands the importance of swift, effective maintenance to keep
                                warehousing operations agile and responsive to market demands, enhancing
                                your capacity to deliver exceptional service to your clients.
                            </p>
                        </div>

                      </div>
                      <div class="carousel-item">
                        <div>
                            <h5 class="display-5 fw-bold text-uppercase fw-bold">Ports Operations</h5>
                            <p class="text-muted" style="text-align: justify;">
                                Ports are critical hubs of commerce, where seamless operations are vital for the
                                timely loading and unloading of cargo, directly impacting the supply chain. The
                                equipment used in port operations, from container handlers to bulk material
                                movers, requires regular, specialized maintenance to handle the rigorous
                                demands of continuous operation. Our comprehensive maintenance and repair

                                services for diesel generators and material handling equipment ensure that port
                                operations can proceed without interruption, supporting the flow of goods and
                                bolstering the economy.
                                <br>
                                Our commitment extends across the vital sectors of construction, manufacturing,
                                warehousing, and ports operations. We understand the intricacies and
                                challenges of each industry, offering tailored solutions that ensure operational
                                continuity, safety, and efficiency. Our dedicated team of professionals uses their
                                expertise to provide reliable support, helping your business overcome the
                                challenges of maintaining complex machinery and equipment. Partner with us to
                                empower your operations, and experience the peace of mind that comes with
                                knowing your industrial support needs are met with excellence and dedication.
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
    {{-- <section class="py-5">
        <div class="container">
            <h4 class="display-5 fw-bold text-center py-4 text-uppercase"></h4>
        </div>
        <div class="container border border-0 rounded-4 pt-3 shadow-lg">
            <div class="row p-4">
                <div class="col">
                    <h4 class="display-5 fw-bold pb-3 text-dark">INDUSTRIES SERVED</h4>
                    <div class="lh-lg pb-3" style="text-align: justify;">
                        <div>
                            <div>
                                <p class="text-muted">
                                    At Saudi Industrial, we are dedicated to empowering a broad spectrum of
                                    industries through our comprehensive repair, maintenance, and support services.
                                    Our expertise is meticulously tailored to meet the unique needs of the
                                    construction, manufacturing, warehousing, and ports operations sectors, each
                                    vital to the robust industrial landscape of Saudi Arabia. Here’s how we align our
                                    services with the demands of these critical industries:
                                </p>
                            </div>
                            <div>
                                <h5 class="fw-bold">Construction</h5>
                                <p class="text-muted">
                                    In the dynamic and demanding construction industry, the reliability of machinery
                                    and equipment is non-negotiable. From towering cranes to heavy-duty loaders,

                                    each piece of equipment plays a pivotal role in project timelines and overall
                                    success. Saudi Industrial Support Services offers specialized maintenance and
                                    repair solutions that ensure your construction machinery is operating at peak
                                    efficiency, minimizing downtime and enhancing safety on-site. Our proactive
                                    approach helps construction companies meet their project deadlines with
                                    confidence, ensuring that every component functions flawlessly.
                                </p>
                            </div>
                            <div>
                                <h5 class="fw-bold">Manufacturing</h5>
                                <p class="text-muted">
                                    The manufacturing sector thrives on precision, efficiency, and reliability. A minor
                                    disruption can lead to significant delays, affecting production lines and impacting
                                    delivery schedules. Recognizing the critical nature of continuous operation, we
                                    provide specialized services for the repair and maintenance of material handling
                                    equipment and diesel generators, ensuring that manufacturing facilities run
                                    smoothly. Our team of experts is adept at diagnosing and resolving issues
                                    swiftly, ensuring that your operations are back online with minimal delay. By
                                    partnering with us, manufacturing businesses can focus on their core activities,
                                    knowing their equipment maintenance is in expert hands.
                                </p>
                            </div>
                            <div>
                                <h5 class="fw-bold">Warehousing</h5>
                                <p class="text-muted">
                                    Warehousing operations demand high efficiency and reliability, where material
                                    handling equipment like forklifts, pallet jacks, and conveyor systems are the
                                    backbone of daily activities. Our services ensure that these essential tools are
                                    maintained to the highest standards, reducing the risk of unexpected failures that
                                    can disrupt logistics and inventory management. Saudi Industrial Support
                                    Services understands the importance of swift, effective maintenance to keep
                                    warehousing operations agile and responsive to market demands, enhancing
                                    your capacity to deliver exceptional service to your clients.
                                </p>
                            </div>
                            <div>
                                <h5 class="fw-bold">Ports Operations</h5>
                                <p class="text-muted">
                                    Ports are critical hubs of commerce, where seamless operations are vital for the
                                    timely loading and unloading of cargo, directly impacting the supply chain. The
                                    equipment used in port operations, from container handlers to bulk material
                                    movers, requires regular, specialized maintenance to handle the rigorous
                                    demands of continuous operation. Our comprehensive maintenance and repair

                                    services for diesel generators and material handling equipment ensure that port
                                    operations can proceed without interruption, supporting the flow of goods and
                                    bolstering the economy.
                                    <br>
                                    Our commitment extends across the vital sectors of construction, manufacturing,
                                    warehousing, and ports operations. We understand the intricacies and
                                    challenges of each industry, offering tailored solutions that ensure operational
                                    continuity, safety, and efficiency. Our dedicated team of professionals uses their
                                    expertise to provide reliable support, helping your business overcome the
                                    challenges of maintaining complex machinery and equipment. Partner with us to
                                    empower your operations, and experience the peace of mind that comes with
                                    knowing your industrial support needs are met with excellence and dedication.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
