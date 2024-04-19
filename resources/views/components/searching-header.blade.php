<div class="card">
    <div class="card-body">
        <div class="d-md-flex">
            <div class="d-md-flex gap-4 align-items-center">
                <form {{ $attributes->get('action') }} class="mb-3 mb-md-0">
                    <div class="row g-3">
                        <div class="col">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search">
                                <button class="btn btn-outline-light" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                                <input type="submit" style="background-color: #FF6E40;" class="btn btn-sm text-white" value="Search">
                                <input type="submit" style="background-color: #FF6E40;" class="btn btn-sm text-white ms-1" value="Reset">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="dropdown ms-auto">
                @if ($attributes->has('href'))
                    <a href="{{ $attributes->get('href') }}" class="btn btn-primary">
                        {{ $attributes->get('title') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
