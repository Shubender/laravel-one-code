@extends('layouts.main')

@section('page.title', 'Show Post')

@section('main.content')
    <x-title>
        {{ __('Show Post') }}
    </x-title>
    <div class="mb-3">
        <h2 class="h4">
            {{ $post->title }}
        </h2>
        <div class="small text-muted">
            {{ now()->format('d.m.Y H:i:s') }}
        </div>
        <div class="pt-3">
            {!! $post->content !!}
        </div>
    </div>
@endsection
