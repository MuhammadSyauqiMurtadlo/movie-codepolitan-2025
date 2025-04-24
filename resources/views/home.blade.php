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

    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif
    <br>

    My Profile :
    <ul>
        <li>Name: {{ $user['name'] }}</li>
        <li>Email: {{ $user['email'] }}</li>
        @if ($user['role'] == 'admin')
            <li>Role: Admin</li>
        @elseif ($user['role'] == 'user')
            <li>Role: User</li>
        @else
            <li>Role: Unknow</li>
        @endif
    </ul>

</body>

</html>
