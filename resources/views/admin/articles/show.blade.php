<!DOCTYPE html>
<html lang="ru" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }} | Denis Zagvozdin</title>
    <meta property="description" content="{{ $article->description }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $article->og_title }}">
    <meta property="og:description" content="{{ $article->og_description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Создание сайтов by Denis Zagvozdin">
    <meta property="og:image" content="/images/og-image.jpg">
    <meta property="article:published_time" content="{{ $article->created_at->toIso8601String() }}">
    <meta property="article:modified_time" content="{{ $article->updated_at->toIso8601String() }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/articles.css">
</head>
<body class="scrollbox">
<div id="line"></div>

<header id="header">
    <div class="container">
        <nav class="header__row">
            <a class="header__logo" href="/">Denis Zagvozdin</a>
            <ul class="header__list">
                <li class="header__item"><a href="/">Главная</a></li>
                <li class="header__item"><a href="/#services">Мои услуги</a></li>
                <li class="header__item"><a href="/#about">Обо мне</a></li>
                <li class="header__item"><a href="/#pricing">Цены и сроки</a></li>
                <li class="header__item"><a href="/#feedback">Связаться со мной</a></li>
            </ul>
            <img id="header__button" class="header__menu" src="/images/menu.png" alt="" width="48px">
        </nav>
    </div>
</header>

<div id="menu">
    <img id="menu__button" class="menu__image" src="/images/close.png" alt="" width="48px">
    <ul class="menu__links">
        <li class="menu__link"><a href="/">Главная</a></li>
        <li class="menu__link"><a href="/#services">Мои услуги</a></li>
        <li class="menu__link"><a href="/#about">Обо мне</a></li>
        <li class="menu__link"><a href="/#pricing">Цены и сроки</a></li>
        <li class="menu__link"><a href="/#feedback">Связаться со мной</a></li>
    </ul>
</div>

<div id="main">
    <div class="main__title">{{ $article->title }}</div>
    <div class="main__paths">
        <span class="main__path"><a href="{{ route('index') }}">Главная</a></span>
        <span class="main__path"><a href="{{ route('articles.index') }}">Блог</a></span>
        <span class="main__path"><h1>{{ $article->title }}</h1></span>
    </div>
    <div class="main__info">
        <span>{{ $article->created_at->format('d.m.Y') }}</span>
        <span>{{ auth()->user()->full_name }}</span>
    </div>
</div>

<section id="article">
    <div class="container">
        <div class="article__row">
            <div class="article__content text">
                {!! $article->content_html !!}
            </div>
            <div>
                <div class="article__banner">
                    <a href="/#feedback">
                        <img src="/images/banner.png" alt="" width="100%">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="modal">
    <div class="modal__content">
        <div class="modal__title">Контакты</div>
        <div class="modal__text">
            <ul class="modal__list">
                <li>Facebook: <strong><a href="https://www.facebook.com/denchik1170" target="_blank">denchik1170</a></strong></li>
                <li>Telegram: <strong><a href="https://t.me/denchik1170" target="_blank">denchik1170</a></strong></li>
                <li>Youtube (старый канал): <strong><a href="https://www.youtube.com/channel/UCM9BQfzhHABf3CHuinyZj_Q" target="_blank">ссылка</a></strong></li>
                <li>Youtube (новый канал): <strong><a href="https://www.youtube.com/channel/UCbxqhdu5HwhZC2rE-a1MwrQ" target="_blank">ссылка</a></strong></li>
                <li>Рабочая почта: <strong>gaz91.91@mail.ru</strong></li>
                <li>WhatsApp: <strong>8-908-067-52-95</strong></li>
            </ul>
        </div>
    </div>
</div>

<footer id="footer">
    <div class="footer__socials">
        <div class="footer__social">
            <span class="icon-facebook"></span>
        </div>
        <div class="footer__social">
            <span class="icon-telegram"></span>
        </div>
        <div class="footer__social">
            <span class="icon-youtube"></span>
        </div>
        <div class="footer__social">
            <span class="icon-mail"></span>
        </div>
        <div class="footer__social">
            <span class="icon-whatsapp"></span>
        </div>
    </div>
    <div class="footer__copyrights">© 2021 Denis Zagvozdin | Project Idea —&nbsp;<a href="https://scripteden.com/previews/Clean/" target="_blank">scripteden</a></div>
</footer>

<script src="/js/articles.js"></script>
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(80907394, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/80907394" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</body>
</html>


