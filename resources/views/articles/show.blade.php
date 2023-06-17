<!doctype html>
<html class="h-full dark" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $article->title }}</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta name="description" content="{{ $article->lead }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $article->title }}">
    <meta property="og:description" content="{{ $article->lead }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:site_name" content="Блог Дениса Загвоздина">
    <meta property="og:image" content="{{ $article->image_content }}">
    <meta property="og:locale" content="ru_RU">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ route('articles.show', $article->slug) }}"
          },
          "headline": "{{ $article->title }}",
          "description": "{{ $article->lead }}",
          "image": "{{ $article->image_content }}",
          "author": {
            "@type": "Person",
            "name": "{{ $article->author }}",
            "url": "{{ config('app.url') }}"
          },
          "publisher": {
            "@type": "Organization",
            "name": "{{ $article->author }}",
            "logo": {
              "@type": "ImageObject",
              "url": "{{ Vite::asset('resources/images/DenisZagvozdinPhoto.webp') }}"
            }
          },
          "datePublished": "{{ $article->published_at->format('Y-m-d') }}",
          "dateModified": "{{ $article->updated_at->format('Y-m-d') }}"
        }
    </script>
</head>
<body class="antialiased font-sans-manrope text-gray-600 dark:text-gray-200 font-medium bg-gray-100 dark:bg-[#0B1120] h-full">
    @include('layouts.header')

    <main class="min-h-full">
        <div class="max-w-prose mx-auto rounded py-10 px-4">
            <div class="flex flex-col gap-6">
                <div class="text-sm">
                    <a class="hover:underline" href="{{ route('index') }}">Главная</a>
                    <span class="px-1 select-none">»</span>
                    <a class="hover:underline" href="{{ route('articles.index') }}">Статьи</a>
                    <span class="px-1 select-none">»</span>
                    <h1 class="inline">{{ $article->title }}</h1>
                </div>
                <div class="flex flex-col gap-1">
                    <small>Автор: {{ $article->author }}</small>
                    <small>Дата публикации: {{ $article->published_at->format('d.m.Y') }}</small>
                </div>
                <article class="prose mx-auto dark:prose-invert">
                    {!! $article->content !!}
                </article>
            </div>
        </div>
    </main>

    @vite('resources/ts/app.ts')
    @include('layouts.metrics')
</body>
</html>
