@extends('app')

@section('content')
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
        @foreach ($movies as $movie)
            <div class="bg-gray-800 p-4 rounded-lg shadow-lg text-center relative group">
                <a href="{{ route('movie.show', $loop->index) }}">
                    <img src="{{ $movie['image'] }}" alt="Movies" class="w-full rounded-medium">
                    <h3 class="text-md mt-2 font-md mb-4 line-clamp-2 h-14">{{ $movie['title'] }}</h3>
                    <p class="text-sm text-gray-400">{{ $movie['release_date'] }}</p>
                    <div class="absolute top-2 right-2 space-x-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="{{ route('movie.edit', $loop->index) }}"
                            class="bg-green-600 p-1 rounded hover:bg-green-500">✏️
                        </a>
                        <form id="delete-form-{{ $loop->index }}" action="{{ route('movie.destroy', $loop->index) }}"
                            style="display: none;" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                        <a href="{{ route('movie.destroy', $loop->index) }}"
                            onclick="event.preventDefault(); confirm('Are you sure you want to delete this movie?'); document.getElementById('delete-form-{{ $loop->index }}').submit();"
                            class="bg-red-600 p-1 rounded hover:bg-red-500">🗑️</a>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
