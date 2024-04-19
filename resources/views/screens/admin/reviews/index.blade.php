@extends('layouts.admin')
@section('content')
@section('content')
    <!-- content -->
    <div class="content">
        {{-- searching header --}}
    <x-searching-header href="{{ route('reviews.create') }}" title="ADD REVIEW" action="{{ route('reviews.index') }}" />

        <div class="table-responsive">
            <table id="invoices" class="table table-custom table-lg">
                <thead>
                    <tr>
                        <th class="ps-4">NAME</th>
                        <th>RATING</th>
                        <th>REVIEW</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reviews as $review)
                        <tr>
                            <td class="ps-4">
                                {{ $review->name }}
                            </td>
                            <td>{{ $review->rating }}</td>
                            <td>{{ Str::limit($review->review, 20, '...') }}</td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="{{ route('reviews.edit', $review->id) }}" class="dropdown-item">Edit</a>
                                        <a href="{{ route('reviews.destroy', $review->id) }}" class="dropdown-item"
                                            data-confirm-delete="true">DELETE</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="details-row" style="display: none;">
                            <td colspan="5">
                                <!-- Additional details here -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="" id="blogBody" style="height: 100px;overflow-y: scroll;">
                                                {{ $review->review }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <p class="text-muted">records not found...!</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $reviews->links() }}
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
@endsection
