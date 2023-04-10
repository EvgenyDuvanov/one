<div class="form-check">
    <input class="checkbox" {{ $attributes->merge([
        'value'=> 1,
    ]) }} type="checkbox" id="remember">

    <label class="form-check-label" for="remember">
        {{ $slot }}
    </label>
</div>