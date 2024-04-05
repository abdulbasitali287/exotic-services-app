@extends('layouts.admin')
@section('content')
    <div class="w-100 m-0 p-0">
        <div class="cotainer">
            <div class="row">
                <h4>
                    SERVICES
                </h4>
            </div>
            {!! Form::open(['route' => 'service.store','files' => true]) !!}
                <div class="row">
                    <div class="col">
                        <div class="form-group mb-2">
                            {{ Form::label('service name', 'Service Name', ['class' => 'form-label']) }}
                            {{ Form::text('service_name', null ,['class' => 'form-control']) }}
                            @error('service_name')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('Slug', 'Slug', ['class' => 'form-label']) }}
                            {{ Form::text('slug', null ,['class' => 'form-control']) }}
                            @error('slug')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('service type', 'Service Type', ['class' => 'form-label']) }}
                            {{ Form::select('service_type', ['servicing garage' => 'SERVICING GARAGE','bodyshop' => 'BODYSHOP'] , null, ['placeholder' => 'select service type...','class' => 'form-control']) }}
                            @error('service_type')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('navigation name', 'Navigation Name', ['class' => 'form-label']) }}
                            {{ Form::text('navigation_name', null ,['class' => 'form-control']) }}
                            @error('navigation_name')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('feature service', 'Feature Service', ['class' => 'form-label']) }}
                            {{ Form::select('feature_service', ['1' => 'YES','0' => 'NO'] , null, ['placeholder' => 'select feature service...','class' => 'form-control']) }}
                            @error('feature_service')
                            <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('text on hover', 'Text on hover', ['class' => 'form-label']) }}
                            {{ Form::text('text_on_hover', null ,['class' => 'form-control']) }}
                            @error('text_on_hover')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('Service Banner', 'Service Banner', ['class' => 'form-label']) }}
                            {{ Form::file('service_banner',['class' => 'form-control','multiple' => true]) }}
                            <p class="text-muted py-2">(Dimensions 1900px X 750px)</p>
                            @error('service_banner')
                            <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('alt_text', 'alt text for banner image', ['class' => 'form-label']) }}
                            {{ Form::text('alt_text', null ,['class' => 'form-control']) }}
                            @error('alt_text')
                            <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('description', 'Body Description', ['class' => 'form-label']) }}
                            {{ Form::textarea('description', null ,['class' => 'form-control','rows' => 3]) }}
                            <p class="text-muted py-2">0/500 Characters</p>
                            @error('description')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-success px-4 py-2">ADD SERVICE</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

