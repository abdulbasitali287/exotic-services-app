@extends('layouts.admin')
@section('content')
    <div class="w-100 m-0 p-0">
        <div class="cotainer">
            <div class="row">
                <h4>
                    FAQ
                </h4>
            </div>
            {!! Form::open(['route' => ['faqs.update',$faq->id]]) !!}
            @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="form-group mb-2">
                            {{ Form::label('question', 'Question', ['class' => 'form-label']) }}
                            {{ Form::textarea('question', old('question',$faq->question) ,['class' => 'form-control','rows' => '2']) }}
                            <p class="text-muted d-block p-2">0/500 Characters</p>
                            @error('question')
                            <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('answer', 'Answer', ['class' => 'form-label']) }}
                            {{ Form::textarea('answer', old('answer',$faq->answer) ,['class' => 'form-control','rows' => '4']) }}
                            <p class="text-muted d-block p-2">0/1000 Characters</p>
                            @error('answer')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-success px-4 py-2">UPDATE FAQ</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

