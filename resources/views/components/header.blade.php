<header class="bg-transparent border-b border-white/10">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center gap-4">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/ATLAS.png') }}" alt="ATLAS" class="h-28 md:h-32 lg:h-36 w-auto object-contain">
            </a>

            <nav class="flex flex-col md:flex-row gap-4 ml-6 md:ml-6">
                @php
                    $linksActive = request()->routeIs('links.*') ? 'bg-gradient-to-r from-sky-500 to-blue-500 text-white px-2 py-1 rounded' : 'text-gray-300 hover:text-white';
                    $categoriesActive = request()->routeIs('categories.*') ? 'bg-gradient-to-r from-purple-500 to-violet-500 text-white px-2 py-1 rounded' : 'text-gray-300 hover:text-white';
                    $tagsActive = request()->routeIs('tags.*') ? 'bg-gradient-to-r from-pink-500 to-rose-500 text-white px-2 py-1 rounded' : 'text-gray-300 hover:text-white';
                @endphp
                <a href="{{ route('links.index') }}" class="{{ $linksActive }} hover:text-white">Liens</a>
                <a href="{{ route('categories.index') }}" class="{{ $categoriesActive }} hover:text-white">Catégories</a>
                <a href="{{ route('tags.index') }}" class="{{ $tagsActive }} hover:text-white">Tags</a>
            </nav>
        </div>

        <div class="flex items-center gap-4">
            @auth
                <a href="{{ route('dashboard') }}" class="text-gray-300 hidden sm:inline hover:underline">{{ auth()->user()->name }}</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-sm bg-white/10 px-3 py-2 rounded hover:bg-white/20">Se déconnecter</button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="text-gray-300">Se connecter</a>
            @endguest
        </div>
    </div>
</header>
