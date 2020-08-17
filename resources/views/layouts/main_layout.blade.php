<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заполнение данных</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <a class="navbar-brand" href="/">База</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('main.participants.index')}}">Учасники</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('main.buttons.index')}}">Кнопки</a>
            </li>
        </ul>
    </div>
    </nav>
    <script src="{{asset('js/app.js')}}"></script>
    <main>
        @yield('content')
    </main>
</body>
</html>
