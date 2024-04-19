@extends('layouts.admin')
@section('content')

<!-- content -->
<div class="content">
    {{-- searching header --}}
    <x-searching-header action="{{ route('contact-us.index') }}" />

    <div class="table-responsive">
        <table id="invoices" class="table table-custom table-lg">
            <thead>
                <tr>
                    <th></th>
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
                                            <strong class="pb-3">Message:</strong>
                                            <div class="w-100" id="blogBody" style="height: 150px;overflow-y: scroll;">
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
