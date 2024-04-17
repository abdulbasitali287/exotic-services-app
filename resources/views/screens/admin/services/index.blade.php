@extends('layouts.admin')
@push('styles')
    <style>
    .table td {
        white-space: wrap;
    }
    </style>
@endpush
@section('content')
    <!-- content -->
    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="d-md-flex">
                    <div class="d-md-flex gap-4 align-items-center">
                        <form action="{{ route('service.search') }}" class="mb-3 mb-md-0">
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <select class="form-select" name="order">
                                        <option value="">Sort by</option>
                                        <option value="desc">Desc</option>
                                        <option value="asc">Asc</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" name="sort">
                                        <option value="">select order</option>
                                        <option value="2">2</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control" placeholder="Search">
                                        <button class="btn btn-outline-light" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                        <input type="submit" style="background-color: #FF6E40;" class="btn btn-sm text-white" value="Search">
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
                        <th></th>
                        <th class="px-4">SNO</th>
                        <th>SERVICE</th>
                        <th>FEATURED</th>
                        <th>IMAGE</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                        <tr>
                            <td class="text-center">
                                <i class="fa-solid fa-angle-down details-btn me-1 fs-5 fw-bold text-danger d-block" style="cursor: pointer"></i>
                            </td>
                            <td class="text-danger px-4 fw-bold">{{ '#' . $loop->iteration }}</td>
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
                                        <a href="{{ route('service.edit', $service->id) }}" class="dropdown-item">Edit</a>
                                        <a href="{{ route('service.destroy', $service->id) }}" class="dropdown-item"
                                            data-confirm-delete="true">DELETE</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="details-row" style="display: none;">
                            <td colspan="6">
                                <!-- Additional details here -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="" style="height: 400px;overflow-y: scroll;">
                                                <p class="text-capitalize"> <strong>Service Name:</strong> {{ $service->service_name }} </p>
                                                <p class="text-capitalize"><strong>Text on hover:</strong> {{ $service->text_on_hover }}</p>
                                                <p class="text-capitalize"><strong>Alt text:</strong> {{ $service->alt_text }}</p>
                                                <strong class="d-block pb-2">Description:</strong>
                                                <div id="blogBody" >
                                                    {!! $service->description !!}
                                                </div>
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
        <div class="d-flex justify-content-center">
            {{ $services->links() }}
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
