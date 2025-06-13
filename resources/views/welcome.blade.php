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
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach ($movies as $movie)
                <x-movie.card :index="$loop->index" :image="$movie['image']" :title="$movie['title']" :release_date="$movie['release_date']" />
            @endforeach
        </div>
    </x-slot>
</x-app>
