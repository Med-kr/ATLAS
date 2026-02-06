<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <title>Liens | ATLAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0B0F1A] min-h-screen text-white">
    <div class="container mx-auto px-4 py-8">
        <!-- Header avec recherche -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
            <div class="flex items-center gap-4">
                <a href="/dashboard" class="text-purple-400 hover:text-purple-300">
                    ← Back
                </a>
                <h1 class="text-3xl font-bold">Mes Liens</h1>
            </div>
            <div class="flex gap-4">
                <form action="{{ route('links.index') }}" method="GET" class="flex gap-2">
                    <input type="text" name="search"
                        value="{{ request('search') }}"
                        placeholder="Rechercher..."
                        class="px-4 py-2 rounded-xl bg-white/10 border border-white/10 focus:border-purple-400 outline-none text-white placeholder-gray-500">
                    <select name="category"
                        class="px-4 py-2 rounded-xl bg-white/10 border border-white/10 focus:border-purple-400 outline-none text-white">
                        <option value="">Toutes catégories</option>
                        @foreach(\App\Models\Category::all() as $cat)
                            <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit"
                        class="px-4 py-2 rounded-xl bg-purple-500/20 text-purple-400 hover:bg-purple-500/30 transition">
                        Filtrer
                    </button>
                </form>
                <a href="{{ route('links.create') }}"
                    class="px-4 py-2 bg-gradient-to-r from-purple-500 to-fuchsia-500 rounded-xl font-bold hover:scale-105 transition">
                    + Nouveau Lien
                </a>
            </div>
        </div>

        <!-- Messages flash -->
        @if (session('success'))
            <div class="mb-4 p-4 rounded-xl bg-green-500/20 border border-green-500/30 text-green-300">
                {{ session('success') }}
            </div>
        @endif

        <!-- Filtres actifs -->
        @if(request('search') || request('category'))
            <div class="mb-4 flex items-center gap-2">
                <span class="text-gray-400">Filtres:</span>
                @if(request('search'))
                    <span class="px-3 py-1 rounded-lg bg-purple-500/20 text-purple-300 text-sm">
                        "{{ request('search') }}"
                        <a href="{{ route('links.index', request()->except('search')) }}" class="ml-1">×</a>
                    </span>
                @endif
                @if(request('category'))
                    @php $cat = \App\Models\Category::find(request('category')) @endphp
                    <span class="px-3 py-1 rounded-lg bg-blue-500/20 text-blue-300 text-sm">
                        {{ $cat->name }}
                        <a href="{{ route('links.index', request()->except('category')) }}" class="ml-1">×</a>
                    </span>
                @endif
            </div>
        @endif

        <!-- Liste des liens -->
        @if($links->count() > 0)
            <div class="grid gap-4">
                @foreach($links as $link)
                    <div class="p-6 rounded-2xl backdrop-blur-xl bg-white/5 border border-white/10 hover:border-purple-400/50 transition">
                        <div class="flex justify-between items-start">
                            <div class="flex-1">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-xl font-semibold text-purple-300">{{ $link->title }}</h3>
                                    <span class="px-2 py-1 rounded-lg bg-blue-500/20 text-blue-300 text-xs">
                                        {{ $link->category->name }}
                                    </span>
                                </div>
                                <a href="{{ $link->url }}" target="_blank"
                                    class="text-gray-400 hover:text-purple-400 text-sm mt-1 block truncate">
                                    {{ $link->url }}
                                </a>
                                <!-- Tags -->
                                @if($link->tags->count() > 0)
                                    <div class="flex flex-wrap gap-2 mt-3">
                                        @foreach($link->tags as $tag)
                                            <span class="px-2 py-1 rounded-lg bg-cyan-500/20 text-cyan-300 text-xs">
                                                {{ $tag->name }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="flex gap-2 ml-4">
                                <a href="{{ $link->url }}" target="_blank"
                                    class="p-2 rounded-lg bg-green-500/20 text-green-400 hover:bg-green-500/30 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                                <a href="{{ route('links.edit', $link) }}"
                                    class="p-2 rounded-lg bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                </a>
                                <form action="{{ route('links.destroy', $link) }}" method="POST"
                                    onsubmit="return confirm('Supprimer ce lien?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="p-2 rounded-lg bg-red-500/20 text-red-400 hover:bg-red-500/30 transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <p class="text-gray-400 mb-4">Aucun lien trouvé</p>
                <a href="{{ route('links.create') }}"
                    class="text-purple-400 hover:text-purple-300">
                    Ajouter votre premier lien →
                </a>
            </div>
        @endif
    </div>
</body>
</html>

