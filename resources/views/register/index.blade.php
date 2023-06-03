@extends('layouts.auth')

@section('page.title', 'Register Page')

@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>
                {{ __('Регистарция') }}
            </x-card-title>
        </x-card-header>
        <x-card-body>
            <x-form action="{{ route('register.store') }}" method="POST">
                <x-form-item>
                    <x-label required>{{ __('Name') }}</x-label>
                    <x-input type="text" name="name" class="form-control" autofocus required/>
                </x-form-item>
                <x-form-item>
                    <x-label required>{{ __('Email') }}</x-label>
                    <x-input type="email" name="email" class="form-control" required/>
                </x-form-item>
                <x-form-item>
                    <x-label required>{{ __('Password') }}</x-label>
                    <x-input type="password" name="password" class="form-control" required/>
                </x-form-item>
                <x-form-item>
                    <x-label required>{{ __('Repeat Password') }}</x-label>
                    <x-input type="password" name="password_confirmation" class="form-control" required/>
                </x-form-item>
                <x-form-item>
                    <x-checkbox name="remember">
                        {{ __('Я согласен на обработку персональных данных') }}
                    </x-checkbox>
                </x-form-item>
                <x-button type="submit">
                    {{ __('Зарегистрироваться') }}
                </x-button>
            </x-form>
        </x-card-body>
    </x-card>
@endsection

