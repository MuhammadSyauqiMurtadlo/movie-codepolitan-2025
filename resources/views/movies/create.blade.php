@extends('app')

@section('content')
    {{-- error-messages --}}
    {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    @endif --}}
    {{-- end error-messages --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold mb-6">Add movie</h2>
        <form class="space-y-6" method="POST" action="{{ route('movie.store') }}">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title"
                    class="mt-1 w-full bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-600 @error('title') border-red-500 @enderror">
                @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="mt-1 w-full bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-600 @error('description') border-red-500 @enderror"></textarea>
                @error('description')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="releaseDate" class="block text-sm font-medium text-gray-700">Release Date</label>
                <input type="date" id="releaseDate" name="releaseDate"
                    class="mt-1 w-full bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-600 @error('releaseDate') border-red-500 @enderror">
                @error('releaseDate')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="cast" class="block text-sm font-medium text-gray-700">Cast</label>
                <input type="text" id="cast" name="cast"
                    class="mt-1 w-full bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-600 @error('cast') border-red-500 @enderror">
                @error('cast')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="genres" class="block text-sm font-medium text-gray-700">Genres</label>
                <input type="text" id="genres" name="genres"
                    class="mt-1 w-full bg-gray-800 border border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-600 @error('genres') border-red-500 @enderror">
                @error('genres')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image URL</label>
                <input type="text" id="image" name="image"
                    class="mt-1 w-full bg-gray-800 border-gray-700 rounded shadow-sm focus:outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-600 @error('image') border-red-500 @enderror">
                @error('image')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-500">Save</button>
            </div>
        </form>
    </div>
@endsection
