<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'ATLAS')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0B0F1A] text-white min-h-screen flex flex-col">

    @include('components.header')

    <main class="flex-1 container mx-auto px-4 py-8 max-w-4xl">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>

