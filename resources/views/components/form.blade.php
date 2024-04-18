<div class="mb-3">
    <input {{ $attributes }} />
    @error($attributes->get('name'))
        <span class="my-2 text-danger">{{ $message }}</span>
    @enderror
    {{ $slot }}
</div>
