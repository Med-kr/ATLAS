<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <title>Nouveau Tag | ATLAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0B0F1A] min-h-screen text-white">
    <div class="container mx-auto px-4 py-8 max-w-md">
        <!-- Header -->
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('tags.index') }}" class="text-purple-400 hover:text-purple-300">
                ← Back
            </a>
            <h1 class="text-2xl font-bold">Nouveau Tag</h1>
        </div>

        <!-- Formulaire -->
        <div class="p-6 rounded-2xl backdrop-blur-xl bg-white/5 border border-white/10">
            <form action="{{ route('tags.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">
                        Nom du tag
                    </label>
                    <input type="text" name="name" id="name"
                        value="{{ old('name') }}"
                        class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/10 focus:border-purple-400 outline-none transition text-white placeholder-gray-500"
                        placeholder="Ex: PHP, JavaScript, Laravel"
                        required>
                    @error('name')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full py-3 rounded-xl bg-gradient-to-r from-purple-500 via-fuchsia-500 to-cyan-400 font-bold hover:scale-105 transition shadow-lg">
                    Créer le tag
                </button>
            </form>
        </div>
    </div>
</body>
</html>

