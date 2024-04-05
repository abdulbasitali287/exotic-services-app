@extends('layouts.admin')
@section('content')
    <div class="w-100 m-0 p-0">
        <div class="cotainer">
            <div class="row">
                <h4>
                    PHONE NUMBER
                </h4>
            </div>
            {!! Form::open(['route' => 'phone-number.store']) !!}
                <div class="row">
                    <div class="col">
                        <div class="form-group mb-2">
                            {{ Form::label('phone number', 'Phone Number', ['class' => 'form-label']) }}
                            {{ Form::text('phone_number', old('phone_number',$phoneNumber->phone_number ?? '') ,['class' => 'form-control']) }}
                            @error('phone_number')
                            <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-success px-4 py-2">UPDATE PHONE NUMBER</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

