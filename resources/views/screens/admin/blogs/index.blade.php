@extends('layouts.admin')
@push('styles')
    <style>
        /* .details-content {
            width: 100%;
            max-height: 200px;
        overflow-y: scroll;
    } */
    .table td {
        white-space: wrap;
    }
    </style>
@endpush
@section('content')
    <div class="">
        <div class="cotainer">
            <div class="row pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>
                        BLOG
                    </h4>
                    <a href="{{ route('blog.create') }}" class="btn btn-danger p-2 d-inline">ADD BLOG</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>SNO</th>
                        <th>TITLE</th>
                        <th>PUBLISHED</th>
                        <th>IMAGE</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $blog)
                        <tr>
                            <td class="text-center">
                                  <i class="fa-solid fa-angle-down details-btn me-1 fs-5 fw-bold text-danger d-block" style="cursor: pointer"></i>
                            </td>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ Str::limit($blog->title, 30, '...') }}</td>
                            <td>{!! $blog->status
                                ? "<span class='btn btn-success btn-sm'>YES</span>"
                                : "<span class='btn btn-danger btn-sm'>NO</span>" !!}</td>
                            <td><img src="{{ asset($blog->getFirstMediaUrl('blog_images')) }}" class="rounded" width="100px" height="60px" style="object-fit: cover"
                                    alt="{{ $blog->alt_text }}"></td>
                            <td class="d-flex">
                                <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-info p-2">Edit</a>
                                <a href="{{ route('blog.destroy',$blog->id) }}" class="btn btn-sm btn-danger p-2 ms-1" data-confirm-delete="true">DELETE</a>
                            </td>
                        </tr>
                        <tr class="details-row" style="display: none;">
                            <td colspan="6">
                                <!-- Additional details here -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="" id="blogBody" style="height: 400px;overflow-y: scroll;">
                                                {!! $blog->body !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>
                                <p class="text-muted fs-5 p-2">No records found...!</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @push('scripts')
    <script>
        $(document).ready(function() {
            // $('#blogBody').css({'display':'flex','flex-wrap':'wrap'});
            $('#blogBody strong').css('text-transform', 'uppercase');
            $('#blogBody p').css({'color': '#777777','font-size': '16px!important','text-align':'justify'});
            $('#blogBody br').remove();

            $(".details-btn").click(function() {
                $(this).closest("tr").next(".details-row").toggle(400);
            });
        });
    </script>
    @endpush
@endsection
