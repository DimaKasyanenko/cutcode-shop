@extends('layouts.auth')

@section('title', 'Восстановление пароля')

@section('content')
    <x-forms.auth-forms title="Восстановление пароля" action="" method="POST">
        @csrf

        <x-forms.text-input
            name="email"
            type="email"
            placeholder="E-mail"
            :isError="$errors->has('email')"
            required="true"
        />
        @error('email')
        <x-forms.error>{{ $message }}</x-forms.error>
        @enderror

        <x-forms.text-input
            name="password"
            type="password"
            placeholder="Пароль"
            :isError="$errors->has('password')"
            required="true"
        />

        @error('password')
        <x-forms.error>{{ $message }}</x-forms.error>
        @enderror

        <x-forms.text-input
            name="password_confirmation"
            type="password"
            placeholder="Повторите пароль"
            :isError="$errors->has('password')"
            required="true"
        />

        @error('password_confirmation')
        <x-forms.error>{{ $message }}</x-forms.error>
        @enderror

        <x-forms.primary-button>Обновить пароль</x-forms.primary-button>

        <x-slot:socialAuth>
        </x-slot:socialAuth>
        <x-slot:buttons>
        </x-slot:buttons>
    </x-forms.auth-forms>
@endsection
