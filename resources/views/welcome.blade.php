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
            @if (isset($movies) && is_array($movies) && count($movies))
                @foreach ($movies as $movie)
                    <x-movie.card :index="$loop->index" :title="$movie['title']" :image="$movie['image']" :releaseDate="$movie['releaseDate']" />
                @endforeach
            @else
                <div class="col-span-full text-center text-gray-500">No movies available.</div>
            @endif
        </div>
    </x-slot>
</x-app>
