@extends('layouts.admin')
@section('content')
    <!-- content -->
    <div class="content">

        <div class="card">
            <div class="card-body">
                <div class="d-md-flex">
                    <div class="d-md-flex gap-4 align-items-center">
                        <form class="mb-3 mb-md-0">
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option>Sort by</option>
                                        <option value="desc">Desc</option>
                                        <option value="asc">Asc</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button class="btn btn-outline-light" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown ms-auto">
                        <a href="{{ route('service.create') }}" class="btn btn-primary">ADD SERVICE</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table id="invoices" class="table table-custom table-lg">
                <thead>
                    <tr>
                    <tr>
                        <th class="px-4">SNO</th>
                        <th>SERVICE</th>
                        <th>FEATURED</th>
                        <th>IMAGE</th>
                        <th class="text-end">Actions</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                        <tr>
                            <th scope="row" class="text-danger px-4">{{ '#' . $loop->iteration }}</th>
                            <td>{{ Str::limit(Str::upper($service->service_name), 30, '...') }}</td>
                            <td>{!! $service->feature_service
                                ? "<span class='btn btn-success btn-sm'>YES</span>"
                                : "<span class='btn btn-danger btn-sm'>NO</span>" !!}</td>
                            <td><img src="{{ asset($service->getFirstMediaUrl('service_banners')) }}"
                                    class="rounded img-thumbnail" width="100" alt="{{ $service->alt_text }}"></td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <button type="button" class="dropdown-item detail-btn"
                                            data-id="{{ $service->id }}" data-bs-toggle="modal"
                                            data-bs-target="#serviceModal">
                                            Details
                                        </button>
                                        <a href="{{ route('service.edit', $service->id) }}" class="dropdown-item">Edit</a>
                                        <a href="{{ route('service.destroy', $service->id) }}" class="dropdown-item"
                                            data-confirm-delete="true">DELETE</a>
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

        <nav class="mt-5" aria-label="Page navigation example">
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
        </nav>

    </div>
    <!-- ./ content -->

    <!-- Modal -->
    <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="serviceModalLabel">Service Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.detail-btn', function(event) {
                event.preventDefault();
                $('.modal-body').empty();
                const serviceId = $(this).data('id');
                $.ajax({
                    type: "get",
                    url: "{{ route('service.show', '') }}" + "/" + serviceId,
                    success: function(response) {
                        $('.modal-body').empty();
                            $('.modal-body').append(`
                                <div class="row">
                                    <div class="col" style="object-position: contain;">
                                        <strong>Image</strong>
                                        <img src="${response.image}" class="mb-2" width="100%" height="150px" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <strong>Navigation Name</strong>
                                        <p class="text-muted navigation-name">${response.service.service_name}</p>
                                    </div>
                                    <div class="col-6">
                                        <strong>Text on hover</strong>
                                        <p class="text-muted navigation-name">${response.service.text_on_hover}</p>
                                    </div>
                                    <div class="col">
                                        <strong>Alt text for image</strong>
                                        <p class="text-muted navigation-name">${response.service.alt_text}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <strong>Description</strong>
                                        <p class="text-muted navigation-name">${response.service.description}</p>
                                    </div>
                                </div>
                                `
                            );
                    }
                });
            });
        });
    </script>
@endpush
