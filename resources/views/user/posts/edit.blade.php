@extends('layouts.main')

@section('page.title', 'Edit Post')

@section('main.content')
    <x-title>
        {{ __('Edit Post') }}

        <x-slot name="link">
            <a href="{{ route('user.posts.show', $post->id) }}">
                {{ __('Back') }}
            </a>
        </x-slot>
    </x-title>

    <x-post.form action="{{ route('user.posts.update', $post->id) }}" :post="$post"/>
@endsection


