@extends('app')

@section('content')
    <div class="flex flex-col md:flex-row items-start">
        <div class="w-full md:w-1/3 lg:w-1/4 p-4">
            <img src="{{ $movie['image'] }}" alt="Movie Image" class="w-full rounded-lg shadow-lg">
        </div>
        <div class="md:ml-10 mt-5 md:mt-0 w-full md:w-2/3 lg:w-3/4 p-4">
            <h2 class="text-4xl font-bold mb-4">{{ $movie['title'] }}</h2>
            <p class="text-gray-400 text-lg mb-4">
                Realease Date: {{ $movie['release_date'] }}
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
                <button class="bg-green-600 p-1 rounded hover:bg-green-500">✏️</button>
                <button class="bg-red-600 p-1 rounded hover:bg-red-500">🗑️</button>
            </div>
        </div>
    </div>
@endsection
