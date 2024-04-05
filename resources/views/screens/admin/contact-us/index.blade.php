@extends('layouts.admin')
@section('content')
    <div class="w-100 m-0 p-0">
        <div class="cotainer">
            <div class="row pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>
                        BLOG
                    </h4>
                    {{-- <a href="{{ route('faqs.create') }}" class="btn btn-danger p-2 d-inline">ADD FAQ</a> --}}
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
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
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ Str::limit($contact->description,60,'...') }}</td>
                            <td class="d-flex">
                                {{-- <a href="#" class="btn btn-sm btn-info p-2">Edit</a> --}}
                                <a href="#" class="btn btn-sm btn-danger p-2 ms-1" data-confirm-delete="true">DELETE</a>
                                {{-- <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-info p-2">Edit</a>
                                <a href="{{ route('contacts.destroy',$contact->id) }}" class="btn btn-sm btn-danger p-2 ms-1" data-confirm-delete="true">DELETE</a> --}}
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
    </div>
@endsection
