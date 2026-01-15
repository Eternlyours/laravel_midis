<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="">
        </div>
        <ul class="menu__list">
            <li class="list__item"><a href="/" class="list__item_link">Главная</a></li>
            <li class="list__item"><a href="/array/" class="list__item_link">Массивы</a></li>
        </ul>
    </header>
    <main>
        @foreach ($array as $item)
            <p>
                <strong>id:</strong>{{ $item['id'] }}
                <strong>title:</strong>{{ $item['title'] }}
                <strong>price:</strong>{{ $item['price'] }}
                <strong>image:</strong><img src="{{ Vite::asset($item['path']) }}" class="img_item" alt="">
            </p>
            <hr>
        @endforeach
    </main>
    <footer>
        <p class="copyright">&copy; Нажметдинов Фаяз 2026</p>
    </footer>
</body>
</html>