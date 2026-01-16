<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('products.create') }}">Create product</a>
    <h1>Products Get</h1>
    @foreach ($products as $product)
        <div>
            <h2>{{ $product->title }}</h2>
            <p>{{ $product->description }}</p>
            <h4>{{ $product->price }}</h4>
            <strong>{{ $product->category_id }}</strong>
            <form action="{{ route('products.delete', $product->id) }}" method="post">
                @csrf
                @method('delete')
                <!-- <input type="hidden" name="id" value="{{ $product->id }}"> -->
                <input type="submit" value="Delete">
            </form>
            <a href="{{ route('products.show', $product->id) }}">Show</a>
        </div>
        <hr>
    @endforeach
</body>
</html>