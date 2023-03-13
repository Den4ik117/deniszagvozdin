<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <div>
        <p>Новое сообщение с сайта! Подробности ниже.</p>
        <ol>
            <li>
                Имя отправителя: <strong>{{ $validated['name'] }}</strong>
            </li>
            <li>
                Почта отправителя: <strong>{{ $validated['email'] }}</strong>
            </li>
            <li>
                IP отправителя: <strong>{{ Request::ip() }}</strong>
            </li>
            <li>
                Тема: <strong>{{ $validated['subject'] }}</strong>
            </li>
            <li>
                Сообщение:
                <div style="margin-top: 1rem; font-weight: bold;"><pre style="font-family: sans-serif;">{{ $validated['message'] }}</pre></div>
            </li>
        </ol>
    </div>
</body>
</html>
