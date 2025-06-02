@extends('app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 bg-gray-900 text-white rounded-lg shadow-lg sm:px-6 lg:px-8 py-8 mt-10">
        <h2 class="text-2xl font-bold mb-6">Add movie</h2>
        <form class="space-y-2" method="POST" action="{{ route('movie.store') }}">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title"
                    class="mt-1 block w-full bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="mt-1 block w-full bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-600"></textarea>
            </div>
            <div class="mb-4">
                <label for="release_date" class="block text-sm font-medium text-gray-700">Release Date</label>
                <input type="date" id="release_date" name="release_date"
                    class="mt-1 block w-full bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label for="cast" class="block text-sm font-medium text-gray-700">Cast (comma separated)</label>
                <input type="text" id="cast" name="cast"
                    class="mt-1 block w-full bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label for="genres" class="block text-sm font-medium text-gray-700">Genres (comma separated)</label>
                <input type="text" id="genres" name="genres"
                    class="mt-1 block w-full bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-600">
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image URL</label>
                <input type="text" id="image" name="image"
                    class="mt-1 block w-full bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-600">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Add Movie</button>
            </div>
        </form>
    </div>
@endsection
