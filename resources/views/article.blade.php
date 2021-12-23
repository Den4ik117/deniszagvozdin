<!doctype html>
<html lang="ru" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="description" content="{{ $article->description }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $article->og_title }}">
    <meta property="og:description" content="{{ $article->og_description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Создание сайтов by Denis Zagvozdin">
    <meta property="og:image" content="/images/og-image.jpg">
    <meta property="article:published_time" content="{{ $article->created_at->toIso8601String() }}">
    <meta property="article:modified_time" content="{{ $article->updated_at->toIso8601String() }}">
    <title>{{ $article->title }} | Denis Zagvozdin</title>
    <link rel="stylesheet" href="{{ asset('css/article.css') }}">
    <link rel="shortcut icon" href={{ asset('favicon.ico') }} type="image/x-icon">
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
                        <span>{{ $article->created_at->format('d.m.Y') }}</span>
                        <span>{{ $article->user->full_name }}</span>
                    </div>
                </div>
            </div>
        </div>

            <main class="main">
                <div class="container">
                    <div class="main__row">
                        <div class="main__content text">
                            {!! $article->content_html !!}
                        </div>
                        <div>
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
                        </div>
                    </div>
                </div>
            </main>

        {{--    <main class="articles">--}}
        {{--        <div class="container">--}}
        {{--            <div class="articles__row">--}}
        {{--                @foreach($articles as $article)--}}
        {{--                    <article class="articles__article">--}}
        {{--                        <a href="{{ route('articles.show', $article->slug) }}">--}}
        {{--                            <img class="articles__image" src="{{ $article->files[0]->path }}">--}}
        {{--                        </a>--}}
        {{--                        <div class="articles__description">--}}
        {{--                            <a class="articles__title" href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>--}}
        {{--                            <span class="articles__preview">{{ $article->preview }}</span>--}}
        {{--                        </div>--}}
        {{--                        <div class="articles__info">--}}
        {{--                            <span>{{ $article->created_at->format('d.m.Y') }}</span>--}}
        {{--                            <span>{{ $article->user->full_name }}</span>--}}
        {{--                        </div>--}}
        {{--                    </article>--}}
        {{--                @endforeach--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </main>--}}

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
                    © 2021 Denis Zagvozdin | Project Idea —
                    <a class="footer__project_idea" href="https://scripteden.com/previews/Clean/" target="_blank">scripteden</a>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/article.js') }}"></script>
</body>
</html>
