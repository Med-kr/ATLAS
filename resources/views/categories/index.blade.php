@extends('layouts.app')

@section('title', 'Catégories | ATLAS')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center gap-4 justify-between mb-8">
            <div class="flex items-center gap-4">
                <a href="/dashboard" class="text-purple-400 hover:text-purple-300">← Back</a>
                <h1 class="text-3xl font-bold">Catégories</h1>
            </div>
            <a href="{{ route('categories.create') }}" class="px-4 py-2 bg-gradient-to-r from-purple-500 to-fuchsia-500 rounded-xl font-bold hover:scale-105 transition">+ Nouvelle Catégorie</a>
        </div>

        @if (session('success'))
            <div class="mb-4 p-4 rounded-xl bg-green-500/20 border border-green-500/30 text-green-300">
                {{ session('success') }}
            </div>
        @endif

        @if($categories->count() > 0)
            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach($categories as $category)
                    <div class="p-6 rounded-2xl backdrop-blur-xl bg-white/5 border border-white/10 hover:border-purple-400/50 transition">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-semibold text-purple-300">{{ $category->name }}</h3>
                                <p class="text-gray-400 text-sm mt-1">{{ $category->links->count() }} lien(x)</p>
                            </div>
                            <div class="flex gap-2">
                                <a href="{{ route('categories.edit', $category) }}" class="p-2 rounded-lg bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition">Modifier</a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Supprimer cette catégorie?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 rounded-lg bg-red-500/20 text-red-400 hover:bg-red-500/30 transition">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <p class="text-gray-400 mb-4">Aucune catégorie créée</p>
                <a href="{{ route('categories.create') }}" class="text-purple-400 hover:text-purple-300">Créer votre première catégorie →</a>
            </div>
        @endif
    </div>
@endsection


