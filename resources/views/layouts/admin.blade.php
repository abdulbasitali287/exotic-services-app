<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Vetra | E-Commerce HTML Admin Dashboard Template </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }} "/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href=" {{ asset('admin/dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css') }} " type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href=" {{ asset('admin/dist/css/bootstrap-docs.css') }} " type="text/css">

    <!-- Slick -->
    <link rel="stylesheet" href=" {{ asset('admin/libs/slick/slick.css') }} " type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href=" {{ asset('admin/dist/css/app.min.css') }} " type="text/css">

    <!-- Font Awesome CDN -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @stack('styles')
    <style>
        i{
            color: #757D7D;
        }
        ul li:hover i{
            color: #FE7A50;
        }
    </style>
</head>
<body>
    @include('sweetalert::alert')
<!-- preloader -->
<div class="preloader">
    <img src=" {{ asset('admin/assets/images/logo.svg') }} " alt="logo">
    <div class="preloader-icon"></div>
</div>
<!-- ./ preloader -->

<!-- sidebars -->

<!-- notifications sidebar -->

<!-- ./ notifications sidebar -->

<!-- ./ sidebars -->

<!-- menu -->
<div class="menu">
    <div class="menu-header">
        <a href="index.html" class="menu-header-logo">
            <img src="./assets/images/logo.svg" alt="logo">
        </a>
        <a href="index.html" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="./assets/images/user/man_avatar3.jpg"
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">{{ Auth::user()->name }}</div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                {{-- <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                    <i class="bi bi-gear dropdown-item-icon"></i> Settings
                </a> --}}
                <li class="nav-item">
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item d-flex align-items-center text-danger"><i class="bi bi-plus-circle text-white"></i> Logout</button>
                    </form>
                </li>
            </div>
        </div>
        <ul>
            @php
            $currentRouteName = Route::currentRouteName();
        @endphp
            {{-- <li>
                <a class="{{ $currentRouteName == 'admin.dashboard' ? 'active' : '' }}"
                   href="{{ url('admin/dashboard') }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li> --}}
            <li>
                <a class="{{ $currentRouteName == 'service.index' || $currentRouteName == 'service.create' || $currentRouteName == 'service.edit' ? 'active' : '' }}" href="{{ route('service.index') }}">
                    <span class="nav-link-icon">
                        <i class="fa-brands fa-servicestack"></i>
                    </span>
                    <span>Manage services</span>
                </a>
            </li>
            <li>
                <a class="{{ $currentRouteName == 'banner.index' || $currentRouteName == 'banner.create' || $currentRouteName == 'banner.edit' ? 'active' : '' }}" href="{{ route('banner.index') }}">
                    <span class="nav-link-icon">
                        <i class="fa fa-image"></i>
                    </span>
                    <span>Manage banners</span>
                </a>
            </li>
            <li>
                <a class="{{ $currentRouteName == 'blog.index' || $currentRouteName == 'blog.create' || $currentRouteName == 'blog.edit' ? 'active' : '' }}" href="{{ route('blog.index') }}">
                    <span class="nav-link-icon">
                        <i class="fa fa-edit"></i>
                    </span>
                    <span>Manage blogs</span>
                </a>
            </li>
            <li>
                <a class="{{ $currentRouteName == 'reviews.index' || $currentRouteName == 'reviews.create' || $currentRouteName == 'reviews.edit' ? 'active' : '' }}" href="{{ route('reviews.index') }}">
                    <span class="nav-link-icon">
                        <i class="fa-solid fa-users-viewfinder"></i>
                    </span>
                    <span>Manage reviews</span>
                </a>
            </li>
            <li>
                <a class="{{ $currentRouteName == 'faqs.index' || $currentRouteName == 'faqs.create' || $currentRouteName == 'faqs.edit' ? 'active' : '' }}" href="{{ route('faqs.index') }}">
                    <span class="nav-link-icon">
                        <i class="fa fa-question-circle"></i>
                    </span>
                    <span>Manage faqs</span>
                </a>
            </li>
            <li>
                <a class="{{ $currentRouteName == 'phone-number.create' ? 'active' : '' }}" href="{{ route('phone-number.create') }}">
                    <span class="nav-link-icon">
                        <i class="fa fa-phone"></i>
                    </span>
                    <span>Manage phone number</span>
                </a>
            </li>
            <li>
                <a class="{{ $currentRouteName == 'contact-us.index' ? 'active' : '' }}" href="{{ route('contact-us.index') }}">
                    <span class="nav-link-icon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <span>Contact us</span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- ./  menu -->

<!-- layout-wrapper -->
<div class="layout-wrapper">

<!-- header -->
<div class="header">
    <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
        <a href="#">
            <i class="bi bi-list"></i>
        </a>
    </div>
    <!-- Logo -->
    <a href="index.html" class="logo">
        <img width="100" src=" {{ asset('admin/assets/images/logo.svg') }} " alt="logo">
    </a>
    <!-- ./ Logo -->
    <div class="page-title">Overview</div>
    {{-- <form class="search-form">
        <div class="input-group">
            <button class="btn btn-outline-light" type="button" id="button-addon1">
                <i class="bi bi-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Search..."
                   aria-label="Example text with button addon" aria-describedby="button-addon1">
            <a href="#" class="btn btn-outline-light close-header-search-bar">
                <i class="bi bi-x"></i>
            </a>
        </div>
    </form> --}}
    <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">
            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link nav-link-notify" data-count="3" data-bs-toggle="dropdown">
                    <i class="bi bi-cart2 icon-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <h6 class="m-0 px-4 py-3 border-bottom">Shopping Cart</h6>
                    <div class="dropdown-menu-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="./assets/images/products/3.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Digital clock</h6>
                                    <div>1 x $1.190,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="./assets/images/products/4.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Toy Car</h6>
                                    <div>1 x $139.58</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="./assets/images/products/5.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Sunglasses</h6>
                                    <div>2 x $50,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="./assets/images/products/6.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Cake</h6>
                                    <div>1 x $10,50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="m-0 px-4 py-3 border-top small">Sub Total : <strong
                            class="text-primary">$1.442,78</strong></h6>
                </div>
            </li> --}}
            {{-- <li class="nav-item ms-3">
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary btn-iconk"><i class="bi bi-plus-circle text-white"></i> Logout</button>
                </form>
            </li> --}}
        </ul>
    </div>
    <!-- Header mobile buttons -->
    <div class="header-mobile-buttons">
        <a href="#" class="search-bar-btn">
            <i class="bi bi-search"></i>
        </a>
        <a href="#" class="actions-btn">
            <i class="bi bi-three-dots"></i>
        </a>
    </div>
    <!-- ./ Header mobile buttons -->
</div>
<!-- ./ header -->

    <!-- content -->
    <div class="content">
        @yield('content')
    </div>
    <!-- ./ content -->

    <!-- content-footer -->
    {{-- <footer class="content-footer">
        <div>© 2021 Vetra - <a href="https://laborasyon.com" target="_blank">Laborasyon</a></div>
        <div>
            <nav class="nav gap-4">
                <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                <a href="#" class="nav-link">Change Log</a>
                <a href="#" class="nav-link">Get Help</a>
            </nav>
        </div>
    </footer> --}}
    <!-- ./ content-footer -->

</div>
<!-- Bundle scripts -->
<script src=" {{ asset('admin/libs/bundle.js') }}"></script>

<!-- Main Javascript file -->
<script src=" {{ asset('admin/dist/js/app.min.js') }}"></script>
@stack('scripts')
</body>
</html>
