<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav>
        <div>
            @if (Auth::check())
                <a href="">Профиль</a>
                <a href="">Выйти</a>
            @else
                <a href="/register">Регистрация</a>
                <a href="/login">Войти</a>
            @endif
        </div>
    </nav>
    {{ $slot }}

</body>

</html>
