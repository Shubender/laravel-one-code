@extends('layouts.base')

@section('page.title', $post->title)

@section('content')
    <a href="{{ route('blog') }}">
        <h5>
            Back to All Posts
        </h5>
    </a>
    <h1 class="mb-5">
        {{$post->title}}
    </h1>

    <p>
        {{$post->content}}
    </p>

@endsection


