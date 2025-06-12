<x-app>
    <x-slot name="sidebar">
        <x-partials.sidebar :menus="[
            ['title' => 'Home', 'link' => '/home'],
            ['title' => 'About', 'link' => '/about'],
            ['title' => 'Contact', 'link' => '/contact'],
            ['title' => 'Services', 'link' => '/services'],
            ['title' => 'Blog', 'link' => '/blog'],
            ['title' => 'Portfolio', 'link' => '/portfolio'],
            ['title' => 'Testimonials', 'link' => '/testimonials'],
            ['title' => 'FAQ', 'link' => '/faq'],
            ['title' => 'Privacy Policy', 'link' => '/privacy'],
            ['title' => 'Terms of Service', 'link' => '/terms'],
            ['title' => 'Support', 'link' => '/support'],
            ['title' => 'Login', 'link' => '/login'],
            ['title' => 'Register', 'link' => '/register'],
            ['title' => 'Dashboard', 'link' => '/dashboard'],
            ['title' => 'Settings', 'link' => '/settings'],
            ['title' => 'Profile', 'link' => '/profile'],
            ['title' => 'Logout', 'link' => '/logout'],
        ]"></x-partials.sidebar>
    </x-slot>
    <x-slot name="main">
        <div class="bg-blue-500 text-white py-16 px-8 rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold text-center">Welcome to Laravel 12</h2>
            <p class="text-xl text-center mt-6">This is a simple example of a Laravel 12 setup. You can customize the
                styles using utility classes.</p>
        </div>
    </x-slot>
</x-app>
