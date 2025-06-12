<div>
    <h2 class="text-xl font-bold mb-4">Menu</h2>
    <ul>
        @foreach ($menus as $menu)
            <li><a href="{{ $menu['link'] }}" class="text-white hover:text-gray-400">{{ $menu['title'] }}</a></li>
        @endforeach
    </ul>
</div>
