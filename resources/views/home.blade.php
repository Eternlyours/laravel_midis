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
        <div class="content">
            <h1>Lorem ipsum dolor sit amet.</h1>
        <img src="{{ Vite::asset('resources/images/main.jpg') }}" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, autem nisi. Omnis quibusdam quos libero ab necessitatibus quisquam animi. Saepe, quod magnam. Voluptatibus quasi ducimus provident ipsa nisi, cumque repellendus!
        Optio aspernatur autem corporis minus veritatis maxime voluptatum numquam accusamus ipsam nemo quae, libero sequi modi molestiae mollitia! Sit quaerat amet ipsam eius aliquam explicabo ratione aliquid tempora harum nostrum.
        Et dolores cum, eos suscipit praesentium consequatur illo quibusdam voluptatem hic, eius nisi velit iusto aperiam deserunt. Nihil dolor at necessitatibus unde, voluptatum nulla ratione debitis laboriosam odit eveniet ut?
        Tempora, fugiat excepturi atque enim et ipsum minus reprehenderit cum nulla consequuntur placeat a. Odit autem ea excepturi consequuntur repudiandae culpa consectetur. Distinctio alias laudantium recusandae enim aut tempore ipsum.
        Cupiditate, deleniti! Alias placeat deleniti at aliquid quo asperiores nostrum corrupti, maiores dignissimos similique, modi facere dolore quidem minima laboriosam voluptatibus provident cupiditate! Ad eaque impedit veniam temporibus ipsa odio!
        Illo perferendis corporis explicabo doloribus delectus deserunt laudantium et fugiat voluptatem corrupti at sit quidem nisi accusantium animi, amet tenetur laborum a. Quo labore delectus deserunt qui voluptas? Totam, sunt!
        Autem ab neque corrupti quis fuga, obcaecati nesciunt accusantium enim dolorum, dicta, reprehenderit deleniti. Nihil asperiores libero, non facilis sequi cum temporibus obcaecati magnam, quibusdam alias nemo corrupti ducimus ab.
        Ratione, reiciendis nisi iure maiores unde incidunt fugit tempora facere animi reprehenderit quod mollitia! Mollitia enim odit, velit officia rerum perferendis, tempora accusamus voluptas quia culpa temporibus amet fugit pariatur.
        Debitis fuga eaque distinctio sapiente! Distinctio beatae at provident vitae. Ea ipsam debitis cupiditate, quisquam amet quia vero esse vitae provident minima dignissimos, tempora exercitationem. Officia natus reprehenderit odio similique!
        Quas harum veritatis quasi totam dolores illum laudantium deleniti autem nemo quibusdam, blanditiis, nesciunt fugit nisi cumque sapiente suscipit iste obcaecati, sequi animi accusamus quia eum. Sed iusto veritatis amet!</p>
        </div>
    </main>
    <footer>
        <p class="copyright">&copy; Нажметдинов Фаяз 2006</p>
    </footer>
</body>
</html>