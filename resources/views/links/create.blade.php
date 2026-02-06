<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <title>Nouveau Lien | ATLAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0B0F1A] min-h-screen text-white">
    <div class="container mx-auto px-4 py-8 max-w-md">
        <!-- Header -->
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('links.index') }}" class="text-purple-400 hover:text-purple-300">
                ← Back
            </a>
            <h1 class="text-2xl font-bold">Nouveau Lien</h1>
        </div>

        <!-- Formulaire -->
        <div class="p-6 rounded-2xl backdrop-blur-xl bg-white/5 border border-white/10">
            <form action="{{ route('links.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-300 mb-2">
                        Titre du lien
                    </label>
                    <input type="text" name="title" id="title"
                        value="{{ old('title') }}"
                        class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/10 focus:border-purple-400 outline-none transition text-white placeholder-gray-500"
                        placeholder="Ex: Documentation Laravel"
                        required>
                    @error('title')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="url" class="block text-sm font-medium text-gray-300 mb-2">
                        URL
                    </label>
                    <input type="url" name="url" id="url"
                        value="{{ old('url') }}"
                        class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/10 focus:border-purple-400 outline-none transition text-white placeholder-gray-500"
                        placeholder="https://laravel.com/docs"
                        required>
                    @error('url')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-300 mb-2">
                        Catégorie
                    </label>
                    <select name="category_id" id="category_id"
                        class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/10 focus:border-purple-400 outline-none transition text-white"
                        required>
                        <option value="">Sélectionner une catégorie</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tags Selection -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Tags (optionnel)
                    </label>
                    <div class="space-y-2 max-h-40 overflow-y-auto p-2 rounded-xl bg-white/5 border border-white/10">
                        @php $allTags = \App\Models\Tag::all(); @endphp
                        @if($allTags->count() > 0)
                            @foreach($allTags as $tag)
                                <label class="flex items-center gap-2 cursor-pointer hover:bg-white/5 p-1 rounded">
                                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                        class="w-4 h-4 rounded border-gray-600 bg-gray-700 text-purple-500 focus:ring-purple-500"
                                        {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
                                    <span class="text-gray-300">{{ $tag->name }}</span>
                                </label>
                            @endforeach
                        @else
                            <p class="text-gray-500 text-sm">Aucun tag disponible. Créez des tags d'abord.</p>
                        @endif
                    </div>
                    <a href="{{ route('tags.create') }}" class="text-xs text-purple-400 hover:text-purple-300 mt-1 inline-block">
                        + Créer un nouveau tag
                    </a>
                </div>

                <div class="flex gap-4">
                    <button type="submit"
                        class="flex-1 py-3 rounded-xl bg-gradient-to-r from-purple-500 via-fuchsia-500 to-cyan-400 font-bold hover:scale-105 transition shadow-lg">
                        Créer le lien
                    </button>
                    <a href="{{ route('links.index') }}"
                        class="flex-1 py-3 rounded-xl bg-white/10 border border-white/10 text-center hover:bg-white/20 transition">
                        Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

