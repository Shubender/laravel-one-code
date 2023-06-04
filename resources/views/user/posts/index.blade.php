@extends('layouts.main')

@section('page.title', 'My Posts')

@section('main.content')
    <x-title>
        {{ __('My Posts') }}
    </x-title>
    @if($posts)
            @foreach($posts as $post)
                <div class="mb-3">
                    <h2 class="h6">
                        <a href="{{ route('user.posts.show', $post->id) }}">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <div class="small text-muted">
                        {{ now()->format('d.m.Y H:i:s') }}
                    </div>
                </div>
            @endforeach
    @else
        {{ __('No Posts yet') }}
    @endif
@endsection
