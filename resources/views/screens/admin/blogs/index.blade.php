@extends('layouts.admin')
@section('content')

<!-- content -->
<div class="content">
    {{-- searching header --}}
    <x-searching-header href="{{ route('blog.create') }}" title="ADD BLOG" action="{{ route('blog.index') }}" />
    <div class="table-responsive">
        <table id="invoices" class="table table-custom table-lg">
            <thead>
                <tr>
                    <th class="ps-4">TITLE</th>
                    <th>PUBLISHED</th>
                    <th>DESCRIPTION</th>
                    <th>IMAGE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blogs as $blog)
                        <tr>
                            {{-- <td class="text-center">
                                  <i class="fa-solid fa-angle-down details-btn me-1 fs-5 fw-bold text-danger d-block" style="cursor: pointer"></i>
                            </td> --}}
                            <td class="ps-4">{{ Str::limit($blog->title, 30, '...') }}</td>
                            <td>{!! $blog->status
                                ? "<span class='btn btn-success btn-sm'>YES</span>"
                                : "<span class='btn btn-danger btn-sm'>NO</span>" !!}
                                </td>
                                <td>
                                    {!! Str::limit($blog->body, 30, '...') !!}
                                </td>
                            <td><img src="{{ asset($blog->getFirstMediaUrl('blog_images')) }}" class="rounded p-1 border" width="100" height="60" style="object-fit: cover"
                                    alt="{{ $blog->alt_text }}"></td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="{{ route('blog.edit', $blog->id) }}" class="dropdown-item">Edit</a>
                                        <a href="{{ route('blog.destroy',$blog->id) }}" class="dropdown-item"
                                            data-confirm-delete="true">DELETE</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {{-- <tr class="details-row" style="display: none;">
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
                        </tr> --}}
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
    <div class="d-flex justify-content-center">
        {{ $blogs->links() }}
    </div>
    {{-- <nav class="mt-5" aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav> --}}

</div>
<!-- ./ content -->
    {{-- @push('scripts')
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
    @endpush --}}
@endsection
