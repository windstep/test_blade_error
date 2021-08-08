<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test laravel blade error</title>
</head>
<body>
<ul>
    @include('menu-item', ['name' => 'some_name', 'items' => [['name' => 'submenu item']]])
</ul>
</body>
</html>