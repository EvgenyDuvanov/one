@extends('layouts.main')

@section('page.title', 'Просмотр')

@section('main.content')


    <x-title>
        {{ __('Просмотр книги') }}
        
        <x-slot name="link">
            <a href="{{ route('user.books') }}">
                {{ __('Назад') }}
            </a>
        </x-slot>

        <x-slot name="right">
            <x-button-link href="{{ route('user.books.edit', $book->id) }}">
                {{ __('Изменить') }}
            </x-button-link>

            <x-button-link href="{{ route('user.books.destroy', $book->id) }}">
                {{ __('Удалить') }}
            </x-button-link>
        </x-slot>

    </x-title>
        
    <h2 class="h4">
        {{ $book->title }}
    </h2>

    <div class="small text-muted">
        {{ now()->format('d.m.Y H:i:s') }}
    </div>
    <div class="pt-3">
        {{ $book->content }}
    </div>
@endsection
