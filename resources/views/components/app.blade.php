<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Movie App</title>
</head>

<body class="bg-gray-900 text-white">
    <x-partials.header></x-partials.header>
    {{-- <section class="container mx-auto p-6">
        {{ $slot }}
    </section> --}}

    <div class="min-h-screen flex">
        <asside class="w-64 bg-gray-800 p-6">
            {{ $sidebar }}
        </asside>

        <main class="flex-1 p-6 bg-gray-900">
            <div class="container mx-auto">
                {{ $main }}
            </div>
        </main>
    </div>

</body>

</html>
