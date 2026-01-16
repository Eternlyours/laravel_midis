<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <h2>{{ $product->id }}</h2>
    <h2>{{ $product->title }}</h2>
    <p>{{ $product->description }}</p>
    <h4>{{ $product->price }}</h4>
    <strong>{{ $product->category_id }}</strong>
</body>
</html>