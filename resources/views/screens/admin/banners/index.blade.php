@extends('layouts.admin')
@section('content')
    <div class="w-100 m-0 p-0">
        <div class="cotainer">
            <div class="row pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>
                        BANNER
                    </h4>
                    <a href="{{ route('banner.create') }}" class="btn btn-danger p-2 d-inline">ADD BANNER</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">SNO</th>
                    <th scope="col">PAGE</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($banners as $banner)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $banner->page }}</td>
                            <td><img src="{{ asset($banner->getFirstMediaUrl('banner_images')) }}" class="img-thumbnail" alt="{{ $banner->alt_text }}"></td>
                            <td>{{ Str::limit($banner->title, 30, '...') }}</td>
                            <td>{{ Str::limit($banner->description, 40, '...') }}</td>
                            <td class="d-flex">
                                <a href="{{ route('banner.edit',$banner->id) }}" class="btn btn-sm btn-info p-2">Edit</a>
                                <a href="{{ route('banner.destroy',$banner->id) }}" class="btn btn-sm btn-danger p-2 ms-1" data-confirm-delete="true">DELETE</a>
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
    </div>
@endsection
