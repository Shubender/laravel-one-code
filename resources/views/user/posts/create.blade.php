@extends('layouts.main')

@section('page.title', 'Create Post')

@section('main.content')
    <x-title>
        {{ __('Create Post') }}

        <x-slot name="link">
            <a href="{{ route('user.posts') }}">
                {{ __('Назад') }}
            </a>
        </x-slot>
    </x-title>

    <x-post.form action="{{ route('user.posts.store') }}" method="POST"/>
@endsection


