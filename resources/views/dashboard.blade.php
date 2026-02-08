@extends('layouts.app')

@section('title', 'Dashboard | ATLAS')

@section('content')
    <div class="space-y-8">
        <!-- Page heading -->
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold">Resource & Knowledge Manager</h1>
                <p class="text-gray-400">Bienvenue, {{ auth()->user()->name }}</p>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="{{ route('links.index') }}" class="p-6 rounded-2xl backdrop-blur-xl bg-white/5 border border-white/10 hover:border-sky-400/50 transition group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm">Liens</p>
                        <p class="text-3xl font-bold text-sky-300 mt-1">{{ \App\Models\Link::count() }}</p>
                    </div>
                    <div class="p-3 rounded-xl bg-sky-500/20 text-sky-400 group-hover:scale-110 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                        </svg>
                    </div>
                </div>
            </a>

            <a href="{{ route('categories.index') }}" class="p-6 rounded-2xl backdrop-blur-xl bg-white/5 border border-white/10 hover:border-purple-400/50 transition group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm">Catégories</p>
                        <p class="text-3xl font-bold text-purple-300 mt-1">{{ \App\Models\Category::count() }}</p>
                    </div>
                    <div class="p-3 rounded-xl bg-purple-500/20 text-purple-400 group-hover:scale-110 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                    </div>
                </div>
            </a>

            <a href="{{ route('tags.index') }}" class="p-6 rounded-2xl backdrop-blur-xl bg-white/5 border border-white/10 hover:border-pink-400/50 transition group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm">Tags</p>
                        <p class="text-3xl font-bold text-pink-300 mt-1">{{ \App\Models\Tag::count() }}</p>
                    </div>
                    <div class="p-3 rounded-xl bg-pink-500/20 text-pink-400 group-hover:scale-110 transition flex items-center justify-center">
                        <span class="text-2xl font-bold">#</span>
                    </div>
                </div>
            </a>
        </div>

        <!-- Quick Actions -->
        <div class="p-6 rounded-2xl backdrop-blur-xl bg-white/5 border border-white/10">
            <h2 class="text-xl font-bold text-white mb-4">Actions Rapides</h2>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('links.create') }}" class="px-6 py-3 rounded-xl bg-gradient-to-r from-sky-500 to-blue-500 font-bold hover:scale-105 transition">+ Nouveau Lien</a>
                <a href="{{ route('categories.create') }}" class="px-6 py-3 rounded-xl bg-gradient-to-r from-purple-500 to-violet-500 font-bold hover:scale-105 transition">+ Nouvelle Catégorie</a>
                <a href="{{ route('tags.create') }}" class="px-6 py-3 rounded-xl bg-gradient-to-r from-pink-500 to-rose-500 font-bold hover:scale-105 transition">+ Nouveau Tag</a>
            </div>
        </div>
    </div>
@endsection

