@extends('layouts.admin')
@section('content')

<!-- content -->
<div class="content">
    <div class="card">
        <div class="card-body">
            <div class="d-md-flex">
                <div class="d-md-flex gap-4 align-items-center">
                    <form action="{{ route('contact-us.index') }}" class="mb-3 mb-md-0">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <select class="form-select" name="sort">
                                    <option value="">Sort by</option>
                                    <option value="name">name</option>
                                    <option value="-email">email</option>
                                </select>
                            </div>
                            {{-- <div class="col-md-3">
                                <select class="form-select" name="sort">
                                    <option value="">select order</option>
                                    <option value="2">2</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="filter[name],filter[email]" class="form-control" placeholder="Search">
                                    <button class="btn btn-outline-light" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                    <input type="submit" style="background-color: #FF6E40;" class="btn btn-sm text-white" value="Search">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="dropdown ms-auto">
                    <a href="{{ route('reviews.create') }}" class="btn btn-primary">ADD REVIEW</a>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table id="invoices" class="table table-custom table-lg">
            <thead>
                <tr>
                    <th></th>
                    <th>SNO</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>MOBILE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
                        <tr>
                            <td class="text-center">
                                <i class="fa-solid fa-angle-down details-btn me-1 fs-5 fw-bold text-danger d-block" style="cursor: pointer"></i>
                            </td>
                            <td class="text-danger fw-bold">{{ '#' . $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="{{ route('contact-us.destroy',$contact->id) }}" class="dropdown-item"
                                            data-confirm-delete="true">DELETE</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="details-row" style="display: none;">
                            <td colspan="7">
                                <!-- Additional details here -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <strong class="pb-3">Description:</strong>
                                            <div class="w-100" id="blogBody" style="height: 200px;overflow-y: scroll;">
                                                {{ $contact->description }}
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
        {{ $contacts->links() }}
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
            // $('#blogBody').css({'display':'flex','flex-wrap':'wrap'});
            // $('#blogBody strong').css('text-transform', 'uppercase');
            $('#blogBody').css({'color': '#777777','font-size': '16px!important','text-align':'justify'});

            $(".details-btn").click(function() {
                $(this).closest("tr").next(".details-row").toggle(400);
            });
        });
    </script>
    @endpush
@endsection
