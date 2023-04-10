<x-card>
    <x-card-body>
        <h2 class="h6">
            <a href="{{ route('libr.show', $book->id) }}">
                {{ $book->title }}
            </a>
        </h2>
       <div class="small text-muted">
        {{ now()->format('d.m.Y H:i:s') }}
       </div>
    </x-card-body> 
</x-card>