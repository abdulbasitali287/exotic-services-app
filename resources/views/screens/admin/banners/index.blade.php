@extends('layouts.admin')
@section('content')

<!-- content -->
<div class="content">

    <div class="card">
        <div class="card-body">
            <div class="d-md-flex">
                <div class="d-md-flex gap-4 align-items-center">
                    <form action="{{ route('banner.search') }}" class="mb-3 mb-md-0">
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
                    <a href="{{ route('banner.create') }}" class="btn btn-primary">ADD BANNER</a>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table id="invoices" class="table table-custom table-lg">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">SNO</th>
                    <th scope="col">PAGE</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">ACTIONS</th>
                </tr>
              </thead>
            <tbody>
                @forelse ($banners as $banner)
                    <tr>
                        <td class="text-center">
                            <i class="fa-solid fa-angle-down details-btn me-1 fs-5 fw-bold text-danger d-block" style="cursor: pointer"></i>
                        </td>
                        <td class="text-danger fw-bold ps-2">{{ '#' . $loop->iteration }}</td>
                        <td>{{ $banner->page }}</td>
                        <td><img src="{{ asset($banner->getFirstMediaUrl('banner_images')) }}" class="rounded img-thumbnail" width="100" alt="{{ $banner->alt_text }}"></td>
                        <td>{{ Str::limit($banner->title, 30, '...') }}</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('banner.edit',$banner->id) }}" class="dropdown-item">Edit</a>
                                    <a href="{{ route('banner.destroy',$banner->id) }}" class="dropdown-item"
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
                                        <div class="w-100" id="blogBody" style="height: 200px;overflow-y: scroll;">
                                            {{ $banner->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td><p class="text-muted fs-5 p-2">No records found...!</p></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $banners->links() }}
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
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#blogBody').css({'color': '#777777','font-size': '16px!important','text-align':'justify'});
            $(".details-btn").click(function() {
                $(this).closest("tr").next(".details-row").toggle(400);
            });
        });
    </script>
    @endpush
@endsection
