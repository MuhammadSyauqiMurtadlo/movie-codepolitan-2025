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

    <h1>{{ $greeting }}</h1>
    <p>Welcome to my website!</p>

    <form action="/submit" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <button type="submit">Submit</button>
    </form>

    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif
</body>

</html>
