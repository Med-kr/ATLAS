<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <title>Tags | ATLAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0B0F1A] min-h-screen text-white">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div class="flex items-center gap-4">
                <a href="/dashboard" class="text-purple-400 hover:text-purple-300">
                    ← Back
                </a>
                <h1 class="text-3xl font-bold">Tags</h1>
            </div>
            <a href="{{ route('tags.create') }}"
                class="px-4 py-2 bg-gradient-to-r from-purple-500 to-fuchsia-500 rounded-xl font-bold hover:scale-105 transition">
                + Nouveau Tag
            </a>
        </div>

        <!-- Messages flash -->
        @if (session('success'))
            <div class="mb-4 p-4 rounded-xl bg-green-500/20 border border-green-500/30 text-green-300">
                {{ session('success') }}
            </div>
        @endif

        <!-- Liste des tags -->
        @if($tags->count() > 0)
            <div class="flex flex-wrap gap-4">
                @foreach($tags as $tag)
                    <div class="flex items-center gap-2 p-4 rounded-2xl backdrop-blur-xl bg-white/5 border border-white/10 hover:border-purple-400/50 transition group">
                        <span class="px-3 py-1 rounded-lg bg-cyan-500/20 text-cyan-300 font-medium">
                            {{ $tag->name }}
                        </span>
                        <span class="text-gray-500 text-sm">
                            ({{ $tag->links->count() }})
                        </span>
                        <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition">
                            <a href="{{ route('tags.edit', $tag) }}"
                                class="p-1 rounded-lg bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </a>
                            <form action="{{ route('tags.destroy', $tag) }}" method="POST"
                                onsubmit="return confirm('Supprimer ce tag?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="p-1 rounded-lg bg-red-500/20 text-red-400 hover:bg-red-500/30 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <p class="text-gray-400 mb-4">Aucun tag créé</p>
                <a href="{{ route('tags.create') }}"
                    class="text-purple-400 hover:text-purple-300">
                    Créer votre premier tag →
                </a>
            </div>
        @endif
    </div>
</body>
</html>

