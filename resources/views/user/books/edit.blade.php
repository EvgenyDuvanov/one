@extends('layouts.main')

@section('page.title', 'Изменить книгу')

@section('main.content')
        <x-title>
            {{ __('Изменить книгу') }}
      
            <x-slot name="link">
                <a href="{{ route('user.books.show', $book->id) }}">
                    {{ __('Назад' ) }}
                </a>
            </x-slot>
        </x-title>

        <x-book.form action="{{ route('user.books.update', $book->id) }}" method="put" :book="$book">
            <x-button type="submit">
                    {{ __('Сохранить') }}
                </x-button>
        </x-book.form>
            
@endsection

