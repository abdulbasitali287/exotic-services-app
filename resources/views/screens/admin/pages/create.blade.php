@extends('layouts.admin')
@section('content')
    <div class="w-100 m-0 p-0">
        <div class="cotainer">
            <div class="row">
                <h4>
                    PAGE
                </h4>
            </div>
            {!! Form::open(['route' => 'page.store','files' => true]) !!}
                <div class="row">
                    <div class="col">
                        <div class="form-group mb-2">
                            {{ Form::label('name', 'Page Name', ['class' => 'form-label']) }}
                            {{ Form::text('name', null ,['class' => 'form-control']) }}
                            @error('name')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('heading', 'Heading', ['class' => 'form-label']) }}
                            {{ Form::text('heading', null ,['class' => 'form-control']) }}
                            @error('heading')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('sub_heading', 'Sub_Heading', ['class' => 'form-label']) }}
                            {{ Form::text('sub_heading', null ,['class' => 'form-control']) }}
                            @error('sub_heading')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('content', 'Content', ['class' => 'form-label']) }}
                            {{ Form::textarea('content', null ,['class' => 'form-control','id' => 'editor']) }}
                            @error('content')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('description', 'Description', ['class' => 'form-label']) }}
                            {{ Form::textarea('description', null ,['class' => 'form-control']) }}
                            @error('description')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('upload images', 'Upload Images', ['class' => 'form-label']) }}
                            {{ Form::file('images[]',['class' => 'form-control','multiple' => true]) }}
                            @error('images.*')
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
                            <button type="submit" class="btn btn-success px-4 py-2">ADD</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    @endsection
    @push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endpush

