<!doctype html>
<html lang="ru" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="description" content="{{ $article->description }}">
    <meta name="author" content="{{ $article->author }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $article->title }}">
    <meta property="og:description" content="{{ $article->description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Создание сайтов под ключ от Full-stack разбработчика Дениса Загвоздина">
    <meta property="og:image" content="{{ $article->files[0]->path }}">
    <meta property="og:locale" content="ru_RU">
    <meta property="article:published_time" content="{{ $article->published_at->toIso8601String() }}">
    <meta property="article:modified_time" content="{{ $article->published_at->toIso8601String() }}">
    <title>{{ $article->title }} | Denis Zagvozdin</title>
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}">
    <link rel="shortcut icon" href={{ asset('favicon.ico') }} type="image/x-icon">
    <style>.hljs{display:block;overflow-x:auto;padding:.5em;color:#abb2bf;background:#282c34}.hljs-comment,.hljs-quote{color:#5c6370;font-style:italic}.hljs-doctag,.hljs-formula,.hljs-keyword{color:#c678dd}.hljs-deletion,.hljs-name,.hljs-section,.hljs-selector-tag,.hljs-subst{color:#e06c75}.hljs-literal{color:#56b6c2}.hljs-addition,.hljs-attribute,.hljs-meta-string,.hljs-regexp,.hljs-string{color:#98c379}.hljs-built_in,.hljs-class .hljs-title{color:#e6c07b}.hljs-attr,.hljs-number,.hljs-selector-attr,.hljs-selector-class,.hljs-selector-pseudo,.hljs-template-variable,.hljs-type,.hljs-variable{color:#d19a66}.hljs-bullet,.hljs-link,.hljs-meta,.hljs-selector-id,.hljs-symbol,.hljs-title{color:#61aeee}.hljs-emphasis{font-style:italic}.hljs-strong{font-weight:700}.hljs-link{text-decoration:underline}</style>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="header__row">
                <a class="header__logo" href="{{ route('index') }}">Denis Zagvozdin</a>
                <div class="header__menu">
                    <img class="header__close" src="{{ asset('images/close.png') }}" alt="Close">
                    <ul class="header__list">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/#services">Мои услуги</a></li>
                        <li><a href="/#about">Обо мне</a></li>
                        <li><a href="/#pricing">Цены и сроки</a></li>
                        <li><a href="/#feedback">Связаться со мной</a></li>
                    </ul>
                    <img class="header__open" src="{{ asset('images/menu.png') }}" alt="Menu">
                </div>
            </nav>
        </div>
    </header>

    <div class="content">
        <div class="title">
            <div class="container">
                <div class="title__info">
                    <h1 class="title__header">{{ $article->title }}</h1>
                    <div class="title__breadcrumbs">
                        <span class="title__crumb"><a href="{{ route('index') }}">Главная</a></span>
                        <span class="title__crumb"><a href="{{ route('articles.index') }}">Блог</a></span>
                        <span class="title__crumb">{{ $article->title }}</span>
                    </div>
                    <div class="title__about">
                        <time datetime="{{ $article->published_at }}">{{ $article->published_at->format('d.m.Y') }}</time>
                        <span>{{ $article->author }}</span>
                    </div>
                </div>
            </div>
        </div>

        <main class="main">
            <div class="container">
                <div class="main__row">
                    <article class="main__content text">
                        {!! $article->content !!}
                    </article>
                    <aside>
                        <div class="main__aside">
                            <div>
                                Меня зовут Денис, на протяжении 5 лет я изучаю создание сайтов.
                            </div>
                            <div>
                                Основная специализация:
                                <ol>
                                    <li>создание лендингов</li>
                                    <li>проектирование админок</li>
                                    <li>разработка CRM и ERP</li>
                                    <li>вёрстка шаблона</li>
                                </ol>
                            </div>
                            <div>
                                По каким вопросам в основном обращаются ко мне?
                            </div>
                            <ol>
                                <li>сверстать макет</li>
                                <li>создать лендинг с нуля, имея чёткий план</li>
                                <li>разработать приложение, которое облегчит работу специалистам</li>
                                <li>админка, помогающая управлять контентом на сайте</li>
                                <li>блог</li>
                                <li>админка с возможностью формирования DOCX или PDF отчёта</li>
                            </ol>
                            <div>
                                Заявку можно оставить в Telegram по номеру 8-908-067-52-95
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </main>

        <footer class="footer">
            <div class="container">
                <div class="footer__socials">
                    <a class="footer__social" href="https://vk.com/denchik1170" target="_blank">
                        <span class="icon-vk"></span>
                    </a>
                    <a class="footer__social" href="https://t.me/denchik1170" target="_blank">
                        <span class="icon-telegram"></span>
                    </a>
                    <a class="footer__social" href="https://www.youtube.com/channel/UCbxqhdu5HwhZC2rE-a1MwrQ" target="_blank">
                        <span class="icon-youtube"></span>
                    </a>
                    <a class="footer__social" href="/#feedback" target="_blank">
                        <span class="icon-send"></span>
                    </a>
                    <a class="footer__social" href="https://wa.me/79080675295" target="_blank">
                        <span class="icon-whatsapp"></span>
                    </a>
                </div>
                <div>
                    © 2021–{{ date('Y') }} Denis Zagvozdin | Project Idea —
                    <a class="footer__project_idea" href="https://scripteden.com/previews/Clean/" target="_blank">scripteden</a>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/articles.js') }}"></script>
    @production
        @include('layouts.metrics')
    @endproduction
</body>
</html>
