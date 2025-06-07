<x-app>
    <div class="bg-black text-white p-8 rounded-lg shadow-lg mt-5 max-w-md mx-auto text-center">
        <h1 class="text-3xl font-bold mb-4">Welcome to Our Application</h1>
        <p class="text-gray-700 mb-6">This is a simple welcome page built with Laravel and Tailwind CSS.</p>
        <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</a>
        {{-- <a href="{{ route('register') }}"
            class="ml-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Register</a> --}}
    </div>
</x-app>
