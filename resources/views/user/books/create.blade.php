@extends('layouts.main')

@section('page.title', 'Создать книгу')

@section('main.content')

        <x-title>
            {{ __('Создать книгу') }}
      
            <x-slot name="link">
                <a href="{{ route('user.books') }}">
                    {{__('Назад')}}
                </a>
            </x-slot>
        </x-title>

        <x-book.form action="{{ route('user.books.store') }}"  method="post">
            <x-button type="submit">
                {{ __('Создать книгу') }}
            </x-button>
        </x-post.form>
@endsection



