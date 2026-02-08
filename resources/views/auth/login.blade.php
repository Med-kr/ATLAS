@extends('layouts.app')

@section('title', 'Se connecter | ATLAS')

@section('content')
    <div class="w-full max-w-sm sm:max-w-md mx-auto px-3 sm:px-4">
        <div class="text-center mb-4 sm:mb-6">
            <img src="{{ asset('images/ATLAS.png') }}" alt="ATLAS" class="h-20 sm:h-24 md:h-28 mx-auto mb-3 sm:mb-4 animate-bounce">
            <h2 class="text-xl sm:text-2xl font-bold">Se connecter</h2>
        </div>

        <!-- Status Sesi -->
        <x-auth-session-status class="mb-3 sm:mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-3 sm:space-y-4 bg-white/5 p-4 sm:p-6 rounded-xl sm:rounded-2xl">
        @csrf

        <!-- Alamat Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Kata Sandi -->
        <div class="mt-3 sm:mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Ingat Saya -->
        <div class="block mt-3 sm:mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-end mt-4 gap-3 sm:gap-0">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="w-full sm:w-auto mt-3 sm:mt-0 sm:ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="text-center mt-4">
            <span class="text-sm text-gray-600">Vous n'avez pas de compte ?</span>
            <a class="ms-1 underline text-sm text-indigo-600 hover:text-indigo-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                Créer un compte
            </a>
        </div>
        </form>
    </div>
@endsection
