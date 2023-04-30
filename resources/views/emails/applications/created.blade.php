<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<div>
    <p>Новое сообщение с сайта! Подробности ниже.</p>
    <ol>
        <li>
            <span>Имя отправителя:</span>
            <strong>{{ $application->name }}</strong>
        </li>
        <li>
            <span>Почта отправителя:</span>
            <strong>{{ $application->email }}</strong>
        </li>
        <li>
            <span>IP отправителя:</span>
            <strong>{{ $application->ip }}</strong>
        </li>
        <li>
            <span>Сообщение:</span>
            <div style="margin-top: 1rem; font-weight: bold;"><pre style="font-family: sans-serif;">{{ $application->content }}</pre></div>
        </li>
    </ol>
</div>
</body>
</html>
