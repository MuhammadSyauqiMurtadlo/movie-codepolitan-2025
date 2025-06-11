<x-app>
    <x-slot name="sidebar">
        <ul class="space-y-4">
            <li>
                <a href="" class="block text-gray-300 hover:text-white">Dashborad</a>
            </li>
            <li>
                <a href="" class="block text-gray-300 hover:text-white">Profile</a>
            </li>
            <li>
                <a href="" class="block text-gray-300 hover:text-white">Settings</a>
            </li>
            <li>
                <a href="" class="block text-gray-300 hover:text-white">Logout</a>
            </li>
        </ul>
    </x-slot>
    <x-slot name="main">
        <div class="bg-blue-500 text-white py-16 px-8 rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold text-center">Welcome to Laravel 12</h2>
            <p class="text-xl text-center mt-6">This is a simple example of a Laravel 12 setup. You can customize the
                styles using utility classes.</p>
        </div>
    </x-slot>
</x-app>
