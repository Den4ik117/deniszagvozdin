<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/css/articles.css">
  <title>Denis Zagvozdin | Блог</title>
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
    <div class="main__title">Блог</div>
    <div class="main__paths">
      <span class="main__path"><a href="/">Главная</a></span>
      <span class="main__path">Блог</span>
    </div>
  </div>

  <section id="articles">
    <div class="container">
      <div class="articles__items">
        @foreach($articles as $article)
          <div class="articles__item">
            <div class="articles__image" style="background-image: url({{ $article->files[0]->path }});"><a href="{{ route('articles.show', $article->slug) }}"></a></div>
            <div class="articles__description">
              <div class="articles__text">
                <a class="articles__title" href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                <div class="articles__part">{{ $article->preview }}</div>
              </div>
              <div class="articles__info">
                <span>{{ $article->created_at->format('d.m.Y') }}</span>
                <span>{{ $article->user->full_name }}</span>
              </div>
            </div>
          </div>
        @endforeach
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
