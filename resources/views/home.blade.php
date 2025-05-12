<?php

$greeting = 'Hello, World!';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach($menu as $key => $value): ?>
        <li>
            <a href="<?= $value ?>"><?= $key ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
    <h1>{{ $greeting }}</h1>
    <p>Welcome to my website!</p>

    <form action="/submit" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <button type="submit">Submit</button>
    </form>

    <h1>Movie Category</h1>

    <ul>
        {{-- @foreach ($movies as $movie)
            <li>{{ $movie['title'] }} - {{ $movie['year'] }} - {{ $movie['genre'] }}</li>
        @endforeach --}}

        {{-- @forelse ($movies as $movie)
            <li>{{ $movie['title'] }} - {{ $movie['year'] }} - {{ $movie['genre'] }}</li>
        @empty
            <li>No movies available</li>
        @endforelse --}}

        {{-- @php
            $index = 0;
        @endphp

        @while ($index < count($movies))
            <li>{{ $movies[$index]['title'] }} - {{ $movies[$index]['year'] }} - {{ $movies[$index]['genre'] }}</li>
            @php
                $index++;
            @endphp
        @endwhile --}}

        @foreach ($movies as $movie)
            @if ($movie['year'] < 2025)
                @continue
            @endif
            @if ($movie['year'] > 2030)
                @break
            @endif
            <li>{{ $movie['title'] }} - {{ $movie['year'] }} - {{ $movie['genre'] }}</li>
        @endforeach
    </ul>
</body>

</html>
