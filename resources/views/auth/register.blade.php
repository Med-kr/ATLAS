@extends('layouts.app')

@section('title', 'Créer un compte | ATLAS')

@section('content')
    <div class="w-full max-w-sm sm:max-w-md mx-auto px-3 sm:px-4">
        <div class="text-center mb-4 sm:mb-6">
            <img src="{{ asset('images/ATLAS.png') }}" alt="ATLAS" class="h-20 sm:h-24 md:h-28 mx-auto mb-3 sm:mb-4 animate-bounce">
            <h2 class="text-xl sm:text-2xl font-bold">Créer un compte</h2>
        </div>

        <!-- Status Session -->
        <x-auth-session-status class="mb-3 sm:mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('register') }}" class="space-y-3 sm:space-y-4 bg-white/5 p-4 sm:p-6 rounded-xl sm:rounded-2xl">
            @csrf

            <!-- Nom -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Adresse Email -->
            <div class="mt-3 sm:mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Mot de Passe -->
            <div class="mt-3 sm:mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirmation Mot de Passe -->
            <div class="mt-3 sm:mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-end mt-4 gap-3 sm:gap-0">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">{{ __('Already registered?') }}</a>

                <x-primary-button class="w-full sm:w-auto mt-3 sm:mt-0 sm:ms-4">{{ __('Register') }}</x-primary-button>
            </div>
        </form>
    </div>
@endsection
