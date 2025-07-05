<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header class="container-fluid">
        <div>
            @if (Auth::check())
                <a href="" class="btn btn-primary">Профиль</a>
                <a href="" class="btn btn-primary">Выйти</a>
            @else
                <a href="/register" class="btn btn-primary">Регистрация</a>
                <a href="/login" class="btn btn-primary">Войти</a>
            @endif
        </div>
    </header>
    {{ $slot }}

</body>

</html>
