@extends('layouts.guest')
@section('content')
    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="ltf-block-logo d-block d-lg-none text-center text-lg-start">
                                    <img width="120" src="{{ asset('admin/assets/images/logo.svg')}}" alt="logo">
                                </div>
                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8">Create Account</h1>
                                    <p class="text-muted">You can create a free account now</p>
                                </div>
                                <form class="mb-5" action="{{ route('auth.registered') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Enter fullname" autofocus>
                                        @error('name')
                                            <span class="my-2 text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                                        @error('email')
                                            <span class="my-2 text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                                        @error('password')
                                            <span class="my-2 text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Re-enter password">
                                        @error('password_confirmation')
                                            <span class="my-2 text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="text-center text-lg-start">
                                        <button type="submit" class="btn btn-primary">Sign Up</button>
                                    </div>
                                </form>
                                <p class="text-center d-block d-lg-none mt-5 mt-lg-0">
                                    Don't have an account? <a href="{{ route('auth.loginView') }}">Sign In</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-none d-lg-flex border-start align-items-center justify-content-between flex-column text-center">
                        <div class="logo">
                            <img width="120" src="{{ asset('admin/assets/images/logo.svg')}}" alt="logo">
                        </div>
                        <div>
                            <h3 class="fw-bold">Welcome to Vetra!</h3>
                            <p class="lead my-5">Do you already have an account?</p>
                            <a href="{{ route('auth.loginView') }}" class="btn btn-primary">Sign In</a>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
