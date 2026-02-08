@extends('layouts.app')

@section('title', 'Modifier Catégorie | ATLAS')

@section('content')
    <div class="container mx-auto px-4 py-8 max-w-md">
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('categories.index') }}" class="text-purple-400 hover:text-purple-300">← Back</a>
            <h1 class="text-2xl font-bold">Modifier Catégorie</h1>
        </div>

        <div class="p-6 rounded-2xl backdrop-blur-xl bg-white/5 border border-white/10">
            <form action="{{ route('categories.update', $category) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Nom de la catégorie</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/10 focus:border-purple-400 outline-none transition text-white placeholder-gray-500" placeholder="Ex: Développement Web" required>
                    @error('name') <p class="mt-2 text-sm text-red-400">{{ $message }}</p> @enderror
                </div>

                <div class="flex gap-4">
                    <button type="submit" class="flex-1 py-3 rounded-xl bg-gradient-to-r from-purple-500 via-fuchsia-500 to-cyan-400 font-bold hover:scale-105 transition shadow-lg">Mettre à jour</button>
                    <a href="{{ route('categories.index') }}" class="flex-1 py-3 rounded-xl bg-white/10 border border-white/10 text-center hover:bg-white/20 transition">Annuler</a>
                </div>
            </form>
        </div>
    </div>
@endsection

