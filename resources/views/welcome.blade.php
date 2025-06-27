<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <a href="{{ route('home.index') }}">Home</a>
    <a href="{{ route('home.user', ['id' => 1, 'slug' => 'abc']) }}">User</a>
    <a href="{{ route('home.about') }}">About</a>
</body>

</html>
