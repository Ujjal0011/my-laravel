<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>
    <ul>
        @foreach ($topics as $topic)
            <li>{{ $topic }}</li>
        @endforeach
    </ul>
</body>

</html>
