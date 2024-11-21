@props([
    'name',
    'label' => 'Field',
    'type',
])

<div class="col-md-12">
    <label for="{{ $name }}" class="form-label">{{ Str::of($label)->headline() }}</label>

    <input class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" {{ $attributes }}>
</div>
