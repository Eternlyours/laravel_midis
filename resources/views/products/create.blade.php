<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product Create</h1>
    <form action="{{ route('products.store') }}" method="post">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        @csrf
        <input type="text" name="title" id="title" placeholder="iphone" require>
        <br>
        <textarea name="description" id="description" placeholder="description" require></textarea>
        <br>
        <input type="number" name="price" id="price" placeholder="000" require>
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>