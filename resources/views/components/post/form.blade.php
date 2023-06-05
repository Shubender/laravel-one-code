<x-form action="{{ route('user.posts.store') }}" method="POST">
    <x-form-item>
        <x-label required>{{ __('Название поста') }}</x-label>
        <x-input name="title" autofocus/>
    </x-form-item>

    <x-form-item>
        <x-label required>{{ __('Содержание поста') }}</x-label>
        <x-trix name="content"/>
    </x-form-item>

    <x-button type="submit">
        {{ __('Create Post') }}
    </x-button>
</x-form>
