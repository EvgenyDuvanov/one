@php($id = Str::uuid())
@props(['checked' => false])

<div class="form-check">
    <input class="checkbox" {{ $attributes->merge([
        'value'=> 1,
        'checked'=>false,
    ]) }} type="checkbox" id="remember">

    <label class="form-check-label" for="remember">
        {{ $slot }}
    </label>
</div>