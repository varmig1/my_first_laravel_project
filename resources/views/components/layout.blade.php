<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="bg-gray-800">
        <div>
            @if (Auth::check())
                <a href="" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Профиль</a>
                <a href="" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Выйти</a>
            @else
                <a href="/register" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Регистрация</a>
                <a href="/login" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Войти</a>
                <a href="/example" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Пример</a>
            @endif
        </div>
    </nav>
    {{ $slot }}

</body>

</html>
