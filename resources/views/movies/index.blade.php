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
    {{ dd($configuration) }}
    <h1>
        {{ $title }}
    </h1>
    <h2>
        {{ $description }}
    </h2>
    {{ dd($movies) }}
</body>

</html>
