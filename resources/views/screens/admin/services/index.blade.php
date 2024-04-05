@extends('layouts.admin')
@section('content')
    <div class="w-100 m-0 p-0">
        <div class="cotainer">
            <div class="row pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>
                        BLOG
                    </h4>
                    <a href="{{ route('service.create') }}" class="btn btn-danger p-2 d-inline">ADD SERVICE</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ARROW</th>
                        <th>SERVICE</th>
                        <th>FEATURED</th>
                        <th>IMAGE</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                        <tr class="closestRow">
                            <th class="text-center">
                                <button class="closestBtn btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-2 h-2" style="width: 17px;color: #a7a3a3;">
                                        <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                                      </svg>
                                </button>
                            </th>
                            <th scope="row" class="text-danger">{{ "#" . $loop->iteration }}</th>
                            <td>{{ Str::limit(Str::upper($service->service_name), 30, '...') }}</td>
                            <td>{!! $service->feature_service
                                ? "<span class='btn btn-success btn-sm'>YES</span>"
                                : "<span class='btn btn-danger btn-sm'>NO</span>" !!}</td>
                            <td><img src="{{ asset($service->getFirstMediaUrl('service_banners')) }}" class="rounded" width="100"
                                    alt="{{ $service->alt_text }}"></td>
                            <td class="d-flex">
                                <a href="{{ route('service.edit', $service->id) }}" class="btn btn-sm btn-info p-2">Edit</a>
                                <a href="{{ route('service.destroy',$service->id) }}" class="btn btn-sm btn-danger p-2 ms-1" data-confirm-delete="true">DELETE</a>
                            </td>
                            <tr class="d-none">
                                <td>{{ $service->feature_service }}</td>
                                <td>{{ $service->navigation_name }}</td>
                                <td>{{ $service->text_on_hover }}</td>
                                <td>{{ $service->alt_text }}</td>
                                <td>{{ $service->description }}</td>
                            </tr>
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
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $(document).on('click', '.closestBtn' , function () {
                // let parentRow = $(this).closest('tr');
                // console.log(parentRow.find('.d-none').toggleClass('d-none'));
                $(".closestBtn").click(function(){
            $(this).closest('tr.closestRow').jqlas('tr.d-none').toggleClass('d-none');
        });
            });
        });
    </script>
@endpush
