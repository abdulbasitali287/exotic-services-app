@extends('layouts.app')
@push('styles')
<style>
.active>.page-link, .page-link.active {
    background-color: #fdaa0d;
    border-color: #fdaa0d;
}
.page-link {
    color: #fdaa0d;
}
.page-link:hover {
    color: #fdaa0d;
}
</style>
@endpush
@section('content')

<div class="continer-fluid p-0 m-0">
    <section>
        <div class="container-fluid m-0 p-0">
            @foreach ($bannersData as $banner)
        @if ($banner->page === "reviews")
        <div class="row p-0 m-0">
            <div class="col-sm-12 p-0 m-0 d-flex justify-content-end contact-us_banner">
                <img src="{{ $banner->getFirstMediaUrl('banner_images') }}" class="w-75 rounded-0" alt="sevice image">
            </div>
            <div class="col-md-6 col z-0 position-absolute bg-white align-self-end ps-md-5 pb-md-5 brands-sec__start contact-us_bannerTxt">
                <p class="mt-md-5 mb-md-4 pt-sm-2 pt-2 font text-dark-emphasis fw-semibold">{{ $banner->description }}
                </p>
                <h1 class="text-black display-3 fw-bold pt-4 pb-4">{{ $banner->title }}</h1>
            </div>
        </div>
        @endif
        @endforeach
        </div>
    </section>
    <section>
        <div class="container-md overflow-hidden">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-dark display-5 fw-bold py-5 font_heading cus-approve">100% APPROVED BY CUSTOMERS</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center align-items-center reviews main-page__reviews">
                        @foreach ($reviews as $review)
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card mb-md-4 mb-2 mx-auto" style="width:330px!important">
                                <div class="w-100">
                                    <img src="{{ asset('assets/comma.png') }}" width="100" alt="">
                                </div>
                                <div class="px-3 pb-3">
                                    <p class="card-text d-block border-bottom font py-3 pb-4" style="color: #777777;text-align:justify;">
                                        {{ $review->review }}
                                    </p>
                                    <h5 class="card-title">{{ Str::ucfirst($review->name) }}</h5>
                                    @push('styles')
                                        <style>
                                            #rating .fa-star.filled{
                                                color: var(--background-color-two);
                                            }
                                        </style>
                                    @endpush
                                    <div id="rating">
                                        @for ($i = 1;$i <= 5;$i++)
                                            <span class="fa fa-star {{ $i <= $review->rating ? 'checked filled' : '' }}"></span>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                {{ $reviews->links() }}
            </div>
        </div>
    </section>
</div>


@endsection
