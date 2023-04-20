@props(['name' => ''])

@error($name)
            <div class="div small text-danger pt-1">
                {{ $message }}
            </div>
        @enderror