@extends('layouts.admin')
@section('content')
    <div class="w-100 m-0 p-0">
        <div class="cotainer">
            <div class="row">
                <h4>
                    BANNER
                </h4>
            </div>
            {!! Form::open(['route' => 'banner.store','files' => true]) !!}
                <div class="row">
                    <div class="col">
                        <div class="form-group mb-2">
                            {{ Form::label('page', 'Page', ['class' => 'form-label']) }}
                            {{ Form::text('page', null ,['class' => 'form-control']) }}
                            @error('page')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('title', 'Title', ['class' => 'form-label']) }}
                            {{ Form::text('title', null ,['class' => 'form-control']) }}
                            @error('title')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('other text', 'Other Text', ['class' => 'form-label']) }}
                            {{ Form::textarea('description', null ,['class' => 'form-control','rows' => 3]) }}
                            @error('description')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('banner image', 'Banner Image', ['class' => 'form-label']) }}
                            {{ Form::file('banner_image[]',['class' => 'form-control','multiple' => true]) }}
                            @error('banner_image.*')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('alt_text', 'alt text for image', ['class' => 'form-label']) }}
                            {{ Form::text('alt_text', null ,['class' => 'form-control']) }}
                            @error('alt_text')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-success px-4 py-2">ADD BANNER</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

