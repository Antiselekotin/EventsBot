<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма входа</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="height: 100vh">
<div class="w-100 h-100 bg-dark">
    <form action="{{route('main.check')}}" method="POST"
          class="bg-light m-auto rounded"
          style="transform: translateY(calc(50vh - 50%)); height: 240px;width: 300px; @if(session('err')) box-shadow: 0 0 10px red; @endif"
    >
        @method('PATCH')
        @csrf
        <input type="hidden" name="path" value="{{$path}}">
        <div class="form-group p-3 ">
            <div class="display-6 text-center">Вход</div>
            <input type="text" class="form-control mt-2" placeholder="Логин" name="login">
            <input type="password" class="form-control mt-2 ds-input" placeholder="Пароль" name="password">
            @if(session('err')) <p class="text-center mt-1 text-danger">Неверный логин или пароль.</p> @endif
            <button class="btn btn-success d-block ml-auto mr-auto mb-2 fixed-bottom w-50">Войти</button>
        </div>
    </form>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
