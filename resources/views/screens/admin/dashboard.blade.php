@extends('layouts.admin')
@push('styles')
    <style>
        .card .card-body .card-title{
            color: #757D7D;
        }
    </style>
@endpush
@section('content')
    <!-- content -->
    <div class="content">
        <div class="row">
            <x-dashboard-card>
                <x-slot:heading>
                    User Response
                </x-slot>
                <x-slot:model>
                    {{ App\Models\Contact::count() }}
                </x-slot>
            </x-dashboard-card>
            <x-dashboard-card>
                <x-slot:heading>
                    SERVICES
                </x-slot>
                <x-slot:model>
                    {{ App\Models\Service::count() }}
                </x-slot>
            </x-dashboard-card>
            <x-dashboard-card>
                <x-slot:heading>
                    BLOGS
                </x-slot>
                <x-slot:model>
                    {{ App\Models\Blog::count() }}
                </x-slot>
            </x-dashboard-card>
            <x-dashboard-card>
                <x-slot:heading>
                    REVIEWS
                </x-slot>
                <x-slot:model>
                    {{ App\Models\Review::count() }}
                </x-slot>
            </x-dashboard-card>
            <x-dashboard-card>
                <x-slot:heading>
                    FAQS
                </x-slot>
                <x-slot:model>
                    {{ App\Models\Faqs::count() }}
                </x-slot>
            </x-dashboard-card>
            <x-dashboard-card>
                <x-slot:heading>
                    PAGES
                </x-slot>
                <x-slot:model>
                    {{ App\Models\Banner::count() }}
                </x-slot>
            </x-dashboard-card>
        </div>
    </div>
    <!-- ./ content -->
@endsection
