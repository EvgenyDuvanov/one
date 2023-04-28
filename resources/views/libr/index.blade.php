@extends('layouts.main')

@section('page.title', 'Наши книги')

@section('main.content')

<section>
        <x-title>
            {{ __('Список книг') }}
        </x-title>

        @include('libr.filter')

        @if($books->isEmpty())
            {{ __('Нет ни одной книги.') }}     
         @else
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-12 col-md-4">
                        <x-libr.card :book="$book" />
                    </div>
                @endforeach
            </div>
            {{ $books->links() }}
        @endif
            </div>
        </div>
</section>
    
  
@endsection
