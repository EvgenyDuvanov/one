@extends('layouts.main')

@section('page.title', $book->title)

@section('content')

    <x-title>
        {{$book->title}}

        <x-slot name="link">
            <a href="{{ route('libr') }}">
                {{ __('Назад') }}
            </a> 
        </x-slot>
    </x-title>
  
    
    {!! $book->content !!}
    
@endsection

