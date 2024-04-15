@extends('layouts.admin')
@section('content')
    {{-- <div class="w-100 m-0 p-0">
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
    </div> --}}

    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="accordion" id="accordionExample">
                    @forelse ($faqs as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse1">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse{{$loop->iteration}}" class="accordion-collapse collapse {{ $loop->iteration === 1 ? 'show' : '' }}" aria-labelledby="heading1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                                <div class="ps-3 pb-3">
                                    <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-sm btn-light bg-gradient px-3">Edit</a>
                                    <a href="{{ route('faqs.destroy',$faq->id) }}" class="btn btn-sm btn-danger bg-gradient ms-1" data-confirm-delete="true">DELETE</a>
                                </div>
                            </div>
                        </div>
                    @empty
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
                                No Faqs
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body"></div>
                    </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
@endsection
