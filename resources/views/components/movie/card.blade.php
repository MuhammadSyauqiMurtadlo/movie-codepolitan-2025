<div class="bg-gray-800 p-4 rounded-lg shadow-lg text-center relative group">
    <a href="{{ route('movie.show', $index) }}">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full rounded-medium">
        <h3 class="text-md mt-2 font-md mb-4 line-clamp-2 h-14">{{ $title }}</h3>
        <p class="text-sm text-gray-400">{{ $releaseDate }}</p>
        <div class="absolute top-2 right-2 space-x-2 opacity-0 group-hover:opacity-100 transition">
            <a href="{{ route('movie.edit', $index) }}" class="bg-green-600 p-1 rounded hover:bg-green-500">✏️
            </a>
            <form id="delete-form-{{ $index }}" action="{{ route('movie.destroy', $index) }}"
                style="display: none;" method="POST">
                @csrf
                @method('DELETE')
            </form>
            <a href="{{ route('movie.destroy', $index) }}"
                onclick="event.preventDefault(); confirm('Are you sure you want to delete this movie?'); document.getElementById('delete-form-{{ $index }}').submit();"
                class="bg-red-600 p-1 rounded hover:bg-red-500">🗑️</a>
        </div>
    </a>
</div>
