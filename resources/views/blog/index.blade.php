@extends('layouts.main')

@section('page.title', 'Blog Page')

@section('main.content')
    <x-title>
        {{ __('Posts') }}
    </x-title>

    @include('blog.filter')

    @if($posts)
        <div class="row">
            @foreach($posts as $post)
                <div class="col-12 col-md-4">
                    <x-post.card :post="$post"/>
                </div>
            @endforeach
        </div>
    @else
        {{ __('No Posts yet') }}
    @endif
@endsection


