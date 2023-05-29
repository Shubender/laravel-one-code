@extends('layouts.base')

@section('page.title', 'Blog Page')

@section('content')
    <h1 class="mb-5">Blog</h1>

    @if($posts)
        @foreach($posts as $post)
            <div class="me-3">
                <a href="{{ route('blog.show', $post->id) }}">
                    <h5>
                        {{$post->title}}
                    </h5>
                </a>
                <p>{{$post->content}}</p>
            </div>
        @endforeach
    @else
        No Posts yet
    @endif

@endsection


