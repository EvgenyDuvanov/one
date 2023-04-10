@extends('layouts.main')

@section('page.title', 'Наши книги')

@section('main.content')

<section>
        <x-title>
            {{ __('Список книг') }}
        </x-title>
        
        @if(empty($books))
            {{ __('Нет ни одной книги.') }}     
         @else
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-12 col-md-4">
                        <x-libr.card :book="$book" />
                    </div>
                @endforeach
            </div>
        @endif
            </div>
        </div>
</section>
    
  
@endsection
