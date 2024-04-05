@extends('layouts.app')
@section('content')
<div class="container-fluid p-0 m-0">
    <div class="row p-0 m-0">
        <div class="col-md-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
            {{-- <img src="http://192.168.2.31:8000/admin_panel/services/banner-images/{{ $bannerImg->banner_image }}" alt="" class="w-75" style="height: 387px; object-fit: cover;"> --}}
        </div>
        <div class="col-6 z-0 position-absolute bg-white align-self-end ps-5 pb-5 contact-us_bannerTxt">
            <p class="mt-5 mb-4 font text-dark-emphasis fw-semibold">EXOTIC AUTO REPAIR IN DUBAI</p>
            <h1 class="text-black display-3 fw-bold font_heading_banner pt-4 pb-4">CONTACT</h1>
        </div>
    </div>

    <div class="row mt-5 p-0 m-0">
        <div class="col-md-12 pe-5 contact-us__LeC">
            <h1 class="ms-5 display-5 fw-bold font_heading mt-5" >LOCATION & <br> INFORMATION</h1>
            <div class="contact-us__servicesAll">
            <div class="ps-4 ms-2 contact-us__services">
            <a href="#"><i class="fa-solid fa-phone-flip text-black ps-2 fs-4"><span class="text-black fw-normal m-3 side_heading">{{ isset($getNo->phone_number) }}</span></span></i></a>
            <p class="font ps-1 mb-0 mt-3" style="color: #777777; font-size: 14px!important;">MSM 1 Building Al Safa First Sheikh Zayed Road, Dubai, UAE </p>
            <p class="font ps-1" style="color: #777777; font-size: 14px!important;">SERVICE@EMAIL.COM </p>
            </div>
            <div class="ps-4 ms-2 contact-us__services">
            <a href="#"><i class="fas fa-car text-black ps-2 fs-4"><span class="text-black fw-normal m-3 side_heading">HOURS OF OPERATION</span></span></i></a>
            <p class="font ps-1 mb-0 mt-3" style="color: #777777; font-size: 14px!important;">MON – FRI: 8:30 AM – 6:00 PM</p>
            <p class="font ps-1" style="color: #777777; font-size: 14px!important;">SAT: 8:30 AM – 2:00 PM</p>
            </div>
            <div class="ps-4 ms-2 contact-us__services">
                <a href="#"><i class="fa fa-calendar-o text-black ps-2 fs-4"><span class="text-black fw-normal m-3 side_heading">FREE APPOITMENT</span></span></i></a>
                    <a href="/contact-us#contact"><button class=" text-white px-4 py-3 border-0 font ms-1 click-btn" style="background-color: #171616;font-size: large;">GET FREE APPOINTMENT<i class="fas fa-arrow-right ps-2"></i></button></a>
            </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" id="contact">
        <div class="row mt-5">
            <div class="col-12 pt-5 header1">
                <div class="w-25 ps-4 c-f">
                    <h1 class="text-white display-5 fw-bold py-5 font_heading">CONTACT <br /> FORM</h1>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-12 header1 pb-5">
                <form class="mb-5">
                    <div class="d-flex justify-content-around flex-wrap ms-3 my-new__form">
                        <div class="mb-5 form-div" style="width: 25%">
                            <label for="name" class="form-label fs-6 font" style="color: #adacac;">Name</label>
                            <input type="name" class="form-control header1" id="name" style="color: #adacac;border: none; border-bottom: 1px solid white; border-radius: 0;">
                            <div class="text-danger"></div>
                        </div>
                        <div class="mb-5 form-div" style="width: 25%">
                            <label for="phone" class="form-label fs-6 font" style="color: #adacac;">Phone</label>
                            <input type="tel" class="form-control header1" id="phone" style="color: #adacac;border: none; border-bottom: 1px solid white; border-radius: 0;">
                            <div class="text-danger"></div>
                        </div>
                        <div class="mb-5 form-div" style="width: 40%">
                            <label for="email" class="form-label fs-6 font" style="color: #adacac;">Email</label>
                            <input type="email" class="form-control header1" id="email" aria-describedby="emailHelp" style="color: #adacac;border: none; border-bottom: 1px solid white; border-radius: 0;">
                            <div class="text-danger"></div>
                        </div>
                        <div class="mb-5 form-div" style="width: 25%">
                            <label for="model" class="form-label fs-6 font" style="color: #adacac;">Vehicle Make/Model and Year</label>
                            <input type="text" class="form-control header1" id="model" style="color: #adacac;border: none; border-bottom: 1px solid white; border-radius: 0;">
                            <div class="text-danger"></div>
                        </div>
                        <div class="mb-5 form-div" style="width: 25%">
                            <label for="file" class="form-label fs-6 font" style="color: #adacac;">Attach Photo</label>
                            <input type="file" name="file" class="form-control header1 text-white" id="file"
                                style="color: #adacac;border: none; border-bottom: 1px solid white; border-radius: 0;padding-bottom: 12px;">
                                <div class="text-danger"></div>
                        </div>
                        <div class="mb-5 form-div" style="width: 18%">
                            <label for="date" class="form-label fs-6 font" style="color: #adacac;">Select date</label>
                            <input type="date" class="form-control header1" id="date" style="color: #adacac;border: none; border-bottom: 1px solid white; border-radius: 0;">
                            <div class="text-danger"></div>
                        </div>
                        <div class="mb-5 form-div" style="width: 18%">
                            <label for="time" class="form-label fs-6 font" style="color: #adacac;">Select time</label>
                            <input type="time" class="form-control header1" id="time" style="color: #adacac;border: none; border-bottom: 1px solid white; border-radius: 0;">
                            <div class="text-danger"></div>
                        </div>
                        <div class="mb-5 form-div" style="width: 98%">
                            <label for="description" class="form-label fs-6 ps-0 font" style="color: #adacac;">Case description</label>
                            <textarea class="form-control header1" placeholder="Leave a comment here" id="description" style="color: #adacac;border: none; border-bottom: 1px solid white; border-radius: 0;"></textarea>
                            <div class="text-danger"></div>
                        </div>

                    </div>
                    <button class="text-dark bg-white border-0 px-4 py-2 ms-4 mb-5 font fs-5 font_with_heading" style="padding: 13px 38px!important;">SUBMIT<i class="fas fa-arrow-right ps-2 text-dark"></i></button>
                </form>
                <div class="alert alert-success mt-3 d-none" id="successMessage">
                    Thankyou For Contacting Us!!
                </div>
            </div>
        </div>
    </div>

    <div class="row p-0 m-0" id="map">
        <div class="col-md-12 p-0 m-0 map-height">
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d193618.79052890756!2d-74.174462!3d40.689531!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c252e1c5ec0cef%3A0xb3f3b437c5d7f286!2sNewark%20Liberty%20International%20Airport!5e0!3m2!1sen!2sus!4v1699276933676!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.0983937807105!2d55.230552688854985!3d25.16615530000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f692e8914a2dd%3A0x2121b385b463b601!2sMSM%201%20Building!5e0!3m2!1sen!2s!4v1700227578789!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</div>
@endsection

@push('js')
<script>
    $(document).ready(function () {
        $('form').on('submit', function (e) {
            e.preventDefault();

            $('.text-danger').empty();

            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var model = $('#model').val();
            var file = $('#file').val();
            var date = $('#date').val();
            var time = $('#time').val();
            var description = $('#description').val();

            var formData =  new FormData($(this)[0]);
            formData.append('name', name);
            formData.append('phone', phone);
            formData.append('email', email);
            formData.append('model', model);
            formData.append('file', file);
            formData.append('date', date);
            formData.append('time', time);
            formData.append('description', description);
            formData.append("_token", "{{ csrf_token() }}");


            $.ajax({
                type: 'POST',
                url: '/contact-us/form',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    $('#successMessage').removeClass('d-none').fadeIn();

                    setTimeout(function () {
                        $('#successMessage').fadeOut(function () {
                            location.reload();
                        });
                    }, 3000);
                },
                error: function (response) {
                if (response.status === 422) {
                    var errors = response.responseJSON.errors;

                    for (var key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            $('#' + key).siblings('.text-danger').text(errors[key][0]);
                        }
                    }
                }
              }
            });
        });
    });
</script>
<script>

    $(document).ready(function () {
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            separateDialCode: true,
            initialCountry: 'ae',
        });
    });
</script>
@endpush
