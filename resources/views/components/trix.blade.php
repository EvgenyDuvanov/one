
<input type="hidden"   {{ $attributes }}  id="{{ $name }}">
<trix-editor input="{{ $name }}"></trix-editor>

@push('css')
    <link rel="stylesheet" href="/css/trix.css">
@endpush
@push('js')
    <script src="/js/trix.js"></script>
@endpush