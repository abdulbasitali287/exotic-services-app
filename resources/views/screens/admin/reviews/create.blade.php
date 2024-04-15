@extends('layouts.admin')
@section('content')
    <!-- content -->
    <div class="content ">

        <div class="mb-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <i class="bi bi-globe2 small me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="checkout-form-wizard">
                    <h3>Review</h3>
                    <section class="card card-body mb-0">
                        {!! Form::open(['route' => 'reviews.store']) !!}
                        <div class="mb-4">
                            <h6 class="card-title mb-3">Review</h6>
                            <div class="text-muted">Enter your review information</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-group pb-2">
                                    {{ Form::label('Name', 'Name', ['class' => 'form-label']) }}
                                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                                    @error('name')
                                        <span class="text-danger py-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group pb-3">{{ Form::label('slug', 'Slug', ['class' => 'form-label']) }}
                                    {{ Form::text('slug', null, ['class' => 'form-control']) }}
                                    @error('slug')
                                        <span class="text-danger py-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group pb-3">
                                    {{ Form::label('rating', 'Rating', ['class' => 'form-check-label']) }}
                                    {{ Form::select('rating', ['' => 'Select rating...',1 => '1 Star', 2 => '2 Star', 3 => '3 Star', 4 => '4 Star', 5 => '5 Star'], null, ['class' => 'form-control']) }}
                                    @error('rating')
                                        <span class="text-danger py-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group pb-3">{{ Form::label('review', 'Review', ['class' => 'form-label']) }}
                                    {{ Form::textarea('review', null, ['class' => 'form-control', 'rows' => 3]) }}
                                    @error('review')
                                        <span class="text-danger py-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                {{ Form::submit('ADD REVIEW', ['class' => 'btn btn-sm btn-danger px-4 py-2']) }}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </section>
                </div>
            </div>
        </div>

    </div>
    <!-- ./ content -->
@endsection
