@extends('layouts.admin')
@section('content')
    <div class="w-100 m-0 p-0">
        <div class="cotainer">
            <div class="row pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>
                        PAGES
                    </h4>
                    <a href="{{ route('page.create') }}" class="btn btn-danger p-2 d-inline">ADD PAGE</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    {{-- <th scope="col">SNO</th> --}}
                    {{-- <th scope="col">IMAGE</th> --}}
                    <th scope="col">NAME</th>
                    <th scope="col">HEADING</th>
                    <th scope="col">SUB HEADING</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($pages as $page)
                        <tr>
                            {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                            <th>{{ $page->name }}</th>
                            <th>{{ $page->heading }}</th>
                            <th>{{ $page->sub_heading }}</th>
                            <td>{{ Str::limit($page->description, 40, '...') }}</td>
                            <td class="d-flex">
                                <a href="{{ route('page.edit',$page->id) }}" class="btn btn-sm btn-info p-2">Edit</a>
                                <a href="{{ route('page.destroy',$page->id) }}" class="btn btn-sm btn-danger p-2 ms-1" data-confirm-delete="true">DELETE</a>
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
