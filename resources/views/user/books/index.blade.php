@extends('layouts.main')

@section('page.title', 'Мои книги')

@section('main.content')

<section>
        <x-title>
            {{ __('Мои книги') }}

            <x-slot name="right">
                    <x-button-link href="{{ route('user.books.create') }}">
                        {{ __('Создать') }}
                    </x-button-link>
            </x-slot>
        </x-title>
        
        @if(empty($books))
            {{ __('Нет ни одной книги.') }}     
         @else
                @foreach ($books as $book)
                    <div class="mb-3">
                        <h2 class="h6">
                            <a href="{{ route('user.books.show', $book->id) }}">
                            {{ $book->title }}
                            </a>
                        </h2>

                        <div class="small text-muted">
                            {{ $book->published_at->format('d.m.Y H:i:s') }}
                        </div>
                    </div>
                @endforeach
                {{ $books->links() }}
        @endif
            </div>
        </div>
</section>
    
  
@endsection
