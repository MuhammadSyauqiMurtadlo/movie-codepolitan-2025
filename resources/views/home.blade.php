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

    @switch($movieCategory)
        @case('action')
            <p>Action Movie</p>
        @break

        @case('comedy')
            <p>Comedy Movie</p>
        @break

        @default
            <p>Movie Category</p>
    @endswitch
</body>

</html>
