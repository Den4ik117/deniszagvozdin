<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="robots" content="none">
        <meta name="author" content="Денис Загвоздин">
        <meta name="keywords" content="CRM, панель администратора, админка, дашборд, dashboard">
        <meta name="description" content="Панель администратора">

        {{-- Open Graph --}}
        <meta property="og:title" content="SunriseCRM">
        <meta property="og:description" content="CRM/админка для разных целей">
        <meta property="og:image" content="{{ asset('images/OG.png') }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">

        {{-- Title --}}
        <title>{{ config('app.name', 'SunriseCRM') }} | @yield('title', 'Панель администратора')</title>

        {{-- Font Family --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        {{-- Styles --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            @yield('content')
        </div>
    </body>
</html>