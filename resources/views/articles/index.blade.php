<!doctype html>
<html class="h-full dark" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Статьи | Denis Zagvozdin</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta property="description" content="Статьи Загвоздина Дениса: события из жизни, интересы, мысли, идеи, уроки, создание сайтов">
    <meta property="og:type" content="product">
    <meta property="og:title" content="Статьи | Denis Zagvozdin">
    <meta property="og:description" content="Статьи Загвоздина Дениса: события из жизни, интересы, мысли, идеи, уроки, создание сайтов">
    <meta property="og:url" content="{{ route('articles.index') }}">
    <meta property="og:site_name" content="Блог Дениса Загвоздина">
    <meta property="og:image" content="{{ Vite::asset('resources/images/OpenGraphImage.jpg') }}">
    <meta property="og:locale" content="ru_RU">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "name": "Denis Zagvozdin",
            "url": "{{ config('app.url') }}",
            "image": "{{ Vite::asset('resources/images/OpenGraphImage.jpg') }}",
            "sameAs": [
                "https://www.youtube.com/channel/UCbxqhdu5HwhZC2rE-a1MwrQ",
                "https://github.com/Den4ik117",
                "https://deniszagvozdin.ru"
            ],
            "jobTitle": "Блог Дениса Загвоздина"
        }
    </script>
</head>
<body class="antialiased font-sans-manrope text-gray-600 dark:text-gray-200 font-medium bg-gray-100 dark:bg-[#0B1120] h-full">
    @include('layouts.header')

    <main class="min-h-full">
        <div class="max-w-6xl mx-auto rounded py-10 px-4">
            <h1 class="mb-10 text-2xl font-sans-russo">Статьи</h1>

            <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
                @foreach($articles->split(3) as $chunk)
                    <div class="flex flex-col gap-6">
                        @foreach($chunk as $article)
                            @include('articles.partials.card', ['article' => $article])
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    @vite('resources/ts/app.ts')
</body>
</html>
