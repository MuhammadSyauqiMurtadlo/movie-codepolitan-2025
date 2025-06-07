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

    {{-- This slot will be replaced by the content of the page that uses this component --}}
    <section class="container mx-auto p-6">
        {{ $slot }}
    </section>

</body>

</html>
