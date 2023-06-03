@extends('layouts.base')

@section('page.title', 'Blog Page')

@section('content')
    <section>
        <x-container>
            <x-title>
                {{ __('Posts') }}
            </x-title>
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
        </x-container>
    </section>

@endsection


