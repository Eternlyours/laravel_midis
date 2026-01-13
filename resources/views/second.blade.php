<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    @foreach ($users as $user)
    <hr>
        <h2>{{$user->name}}</h2>
        <p>{{$user->email}}</p>
        <hr>
        <br>
    @endforeach
</body>
</html>