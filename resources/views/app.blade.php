<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Tailwind CSS</title>
</head>

<body class="bg-gray-900 text-white">
    <header class="flex justify-between p-5 bg-gray-800">
        <h1 class="text-2xl font-bold mb-4">Welcome to Tailwind CSS</h1>
        {{-- <p class="mb-4">This is a simple example of a Tailwind CSS setup.</p> --}}
        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Click Me
        </button>
    </header>

    <div class="border-t border-b border-gray-200 text-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-hold text-center">Welcome to Laravel 12</h2>
            <p class="text-xl text-center mt-6">This is a simple example of a Laravel 12 setup. You can customize the
                styles using utility classes.</p>
        </div>
    </div>

</body>

</html>
