<x-card>
    <x-card-body>
        <h2 class="h6">
            <a href="{{ route('libr.show', $book->id) }}">
                {{ $book->title }}
            </a>
        </h2>
       <div class="small text-muted">
        {{ $book->published_at->format('d.m.Y H:i:s') }}
       </div>
       {{ $book->id }}
    </x-card-body> 
</x-card>