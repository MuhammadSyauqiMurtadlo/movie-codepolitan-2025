@extends('app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold mb-6">Edit Movie</h2>
        <form class="space-y-6" method="POST" action="{{ route('movie.update', $movieId) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-lg font-medium mb-2">Title</label>
                <input type="text" id="title" name="title" value="{{ $movie['title'] }}"
                    class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-lg font-medium mb-2">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="w-full p-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-600">{{ $movie['description'] }}</textarea>
            </div>
            <div class="mb-4">
                <label for="release_date" class="block text-lg font-medium mb-2">Release Date</label>
                <input type="date" id="release_date" name="release_date" value="{{ $movie['release_date'] }}"
                    class="w-full p-2 bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label for="cast" class="block text-lg font-medium mb-2">Cast (comma separated)</label>
                <input type="text" id="cast" name="cast" value="{{ $movie['cast'] }}"
                    class="w-full p-2 bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label for="genres" class="block text-lg font-medium mb-2">Genres (comma separated)</label>
                <input type="text" id="genres" name="genres" value="{{ $movie['genres'] }}"
                    class="w-full p-2 bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label for="image" class="block text-lg font-medium mb-2">Image URL</label>
                <input type="text" id="image" name="image" value="{{ $movie['image'] }}"
                    class="w-full p-2 bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-500">Save</button>
            </div>
        </form>
    </div>
@endsection
