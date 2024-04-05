@extends('layouts.admin')
@section('content')
    <div class="w-100 m-0 p-0">
        <div class="cotainer">
            <div class="row pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>
                        BLOG
                    </h4>
                    <a href="{{ route('faqs.create') }}" class="btn btn-danger p-2 d-inline">ADD FAQ</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SNO</th>
                        <th>QUESTION</th>
                        <th>ANSWER</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($faqs as $faq)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ Str::limit($faq->question, 40, '...') }}</td>
                            <td>{{ Str::limit($faq->answer, 40, '...') }}</td>
                            <td class="d-flex">
                                <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-sm btn-info p-2">Edit</a>
                                <a href="{{ route('faqs.destroy',$faq->id) }}" class="btn btn-sm btn-danger p-2 ms-1" data-confirm-delete="true">DELETE</a>
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
