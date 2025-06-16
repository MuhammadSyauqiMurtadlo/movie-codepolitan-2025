@extends('app')

@section('content')
    <div class="flex flex-col md:flex-row items-start">
        <div class="w-full md:w-1/3 lg:w-1/4 p-4">
            <img src="{{ $movie['image'] }}" alt="Movie Image" class="w-full rounded-lg shadow-lg">
        </div>
        <div class="md:ml-10 mt-5 md:mt-0 w-full md:w-2/3 lg:w-3/4 p-4">
            <h2 class="text-4xl font-bold mb-4">{{ $movie['title'] }}</h2>
            <p class="text-gray-400 text-lg mb-4">
                Release Date: {{ $movie['releaseDate'] }}
            </p>
            <p class="text-lg mb-4">{{ $movie['description'] }}</p>

            <h3 class="text-xl font-semibold mb-2">
                Cast
            </h3>
            <p class="text-gray-400 mb-4">
                @foreach ($movie['cast'] as $cast)
                    {{ $cast }},
                @endforeach
            </p>
            <h3 class="text-xl font-semibold mb-2">
                Genres
            </h3>
            <p class="text-gray-400 mb-4">
                @foreach ($movie['genres'] as $genre)
                    {{ $genre }},
                @endforeach
            </p>
            <div class="flex space-x-4 mt-5">
                <a href="{{ route('movie.edit', $movieId) }}" class="bg-green-600 p-1 rounded hover:bg-green-500">✏️</a>
                <form id="delete-form-{{ $movieId }}" action="{{ route('movie.destroy', $movieId) }}"
                    style="display: none;" method="POST">
                    @csrf
                    @method('DELETE')
                </form>
                <a href="{{ route('movie.destroy', $movieId) }}"
                    onclick="event.preventDefault(); confirm('Are you sure you want to delete this movie?'); document.getElementById('delete-form-{{ $movieId }}').submit();"
                    class="bg-red-600 p-1 rounded hover:bg-red-500">🗑️</a>
            </div>
        </div>
    </div>
@endsection
