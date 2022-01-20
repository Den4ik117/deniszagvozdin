<!DOCTYPE html>
<html lang="ru" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denis Zagvozdin | Создание сайтов под ключ</title>
    <meta name="description" content="Сайт-портфолио и по совместительству блог Дениса Загвоздина. создание сайтов под ключ ― лендинг, сайтов-визитка, сайт для предпринимателя, сайт для компании, блог">
    <meta property="og:type" content="site">
    <meta property="og:title" content="Сайт-портфолио, блог Дениса Загвоздина">
    <meta property="og:description" content="Сайт-портфолио и по совместительству блог Дениса Загвоздина. создание сайтов под ключ ― лендинг, сайтов-визитка, сайт для предпринимателя, сайт для компании, блог">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Создание сайтов под ключ от Full-stack разбработчика Дениса Загвоздина">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:locale" content="ru_RU">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            z-index: 1000;
        }

        #preloader img {
            display: block;
            margin: 0 auto;
            margin-top: 40vh;
            width: 48px;
        }

        body {
            overflow: hidden;
        }
    </style>
    <link rel="stylesheet" href="/css/index-xl.css" media="screen and (min-width: 1200px)">
    <link rel="stylesheet" href="/css/index-lg.css" media="screen and (min-width: 992px) and (max-width: 1199px)">
    <link rel="stylesheet" href="/css/index-md.css" media="screen and (min-width: 768px) and (max-width: 991px)">
    <link rel="stylesheet" href="/css/index-sm.css" media="screen and (min-width: 576px) and (max-width: 767px)">
    <link rel="stylesheet" href="/css/index-xs.css" media="screen and (max-width: 575px)">
</head>

<body class="scrollbox">
    <h1 style="position: absolute; top: -1000px;">Создать сайт или лендинг быстро, качественно и недорого</h1>
    <div id="preloader">
        <img src="/images/loading.gif" alt="Loading...">
    </div>
    <script type="text/javascript">
        var preloader = document.getElementById('preloader');

    function fadeOut(el) {
      el.style.opacity = 1;
      var interpreloader = setInterval(function () {
        el.style.opacity = el.style.opacity - 0.05;
        if (el.style.opacity <= 0.05) {
          clearInterval(interpreloader);
          preloader.style.display = 'none';
          document.body.style.overflow = 'auto';
        }
      }, 16);
    }

    window.onload = function () {
      setTimeout(function () {
        fadeOut(preloader);
      }, 600);
    };
    </script>

    <main id="main">
        <div class="main__pattern"></div>
        <div class="main__description">
            <div class="main__simple_text">Привет, я — Загвоздин Денис</div>
            <div class="main__direction_text">Full stack веб-разработчик</div>
            <div class="main__simple_text">создающий современные и адаптивные веб-приложения</div>
        </div>
        <a class="main__cta" href="#header">
            <img class="main__arrow_down" src="/images/arrow_down.png" alt="↓" width="20px">
        </a>
    </main>

    <header id="header">
        <div class="container">
            <nav class="header__row">
                <a class="header__logo" href="/#main">Denis Zagvozdin</a>
                <ul class="header__links">
                    <li class="header__link"><a href="#main">Главная</a></li>
                    <li class="header__link"><a href="#services">Услуги</a></li>
                    <li class="header__link"><a href="#portfolio">Портфолио</a></li>
                    <li class="header__link"><a href="#skills">Навыки и умения</a></li>
                    <li class="header__link"><a href="#about">Обо мне</a></li>
                    <li class="header__link"><a href="#feedback">Связь со мной</a></li>
                </ul>
                <img id="header__button" class="header__menu" src="/images/menu.png" alt="" width="48px">
            </nav>
        </div>
    </header>

    <div id="menu">
        <img id="menu__button" class="menu__image" src="/images/close.png" alt="" width="48px">
        <ul class="menu__links">
            <li class="menu__link"><a href="#main">Главная</a></li>
            <li class="menu__link"><a href="#services">Услуги</a></li>
            <li class="menu__link"><a href="#portfolio">Портфолио</a></li>
            <li class="menu__link"><a href="#skills">Навыки и умения</a></li>
            <li class="menu__link"><a href="#about">Обо мне</a></li>
            <li class="menu__link"><a href="#pricing">Цены и сроки</a></li>
            <li class="menu__link"><a href="#blog">Блог</a></li>
            <li class="menu__link"><a href="#feedback">Связь со мной</a></li>
        </ul>
    </div>

    <section id="services">
        <div class="container">
            <div class="titles">
                <div class="titles__header">Мои услуги</div>
                <div class="titles__line"></div>
                <div class="titles__text">Весь процесс создания сайта я беру на себя, начиная с разработки дизайна и заканчивая публикацией на хостинге</div>
            </div>
            <div class="wrapper">
                <div class="services__items">
                    <div class="services__item">
                        <img class="services__image" src="/images/services/4.png" alt="" width="100px">
                        <div class="services__text">
                            <div class="services__service_name">Дизайн</div>
                            <div class="service__service_description">Разработаю дизайн будущего сайта: будь то посадочная страница, блог, панель администратора, CRM или ERP</div>
                        </div>
                    </div>
                    <div class="services__item">
                        <img class="services__image" src="/images/services/1.png" alt="" width="100px">
                        <div class="services__text">
                            <div class="services__service_name">Front End</div>
                            <div class="service__service_description">Сверстаю интерактивный, адаптивный, отзывчивый сайт с макета, сделанного мной или присланного Вами</div>
                        </div>
                    </div>
                    <div class="services__item">
                        <img class="services__image" src="/images/services/2.png" alt="" width="100px">
                        <div class="services__text">
                            <div class="services__service_name">Back End</div>
                            <div class="service__service_description">Сделаю серверную часть сайта с регистрацией и
                                авторизацией, надёжной системой оплаты, панелью администратора, ролями и разрешениями</div>
                        </div>
                    </div>
                    <div class="services__item">
                        <img class="services__image" src="/images/services/3.png" alt="" width="100px">
                        <div class="services__text">
                            <div class="services__service_name">Хостинг</div>
                            <div class="service__service_description">Установлю сайт на хостинг, помогу с доменным
                                именем, настрою статистику, оптимизирую для SEO-продвижения, отправлю сайт в индексацию</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="titles">
                <div class="titles__header">Мои работы</div>
                <div class="titles__line"></div>
                <div class="titles__text">Портфолио и мои лучшие проекты</div>
            </div>
            <div class="wrapper">
                <div class="portfolio__items">

                    <div class="porfolio__item">
                        <div class="portfolio__background" data-src="/images/portfolio/6/preview.jpg"
                            style="background-image: url(/images/1x1.png);">
                            <div class="portfolio__button">Посмотреть проект</div>
                        </div>
                        <div class="popup">
                            <div class="popup__content scrollbox">
                                <div class="popup__title">Проект онлайн школа «TeoSchool»</div>
                                <div class="popup__description">Мой стартап, который ни к чему не привёл, но тем не
                                    менее был создан крутой сайт, была сделана классная админка и было получено море
                                    опыта :) Посмотреть, кстати, можно по этой ссылке — https://teoschool.ru/</div>
                                <img class="popup__image" data-src="/images/portfolio/6/1.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/6/2.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/6/3.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/6/4.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/6/5.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/6/6.png" src="/images/1x1.png">
                                <img class="popup__image" data-src="/images/portfolio/6/7.png" src="/images/1x1.png">
                                <img class="popup__image" data-src="/images/portfolio/6/8.png" src="/images/1x1.png">
                            </div>
                        </div>
                    </div>

                    <div class="porfolio__item">
                        <div class="portfolio__background" data-src="/images/portfolio/5/preview.jpg"
                            style="background-image: url(/images/1x1.png);">
                            <div class="portfolio__button">Посмотреть проект</div>
                        </div>
                        <div class="popup">
                            <div class="popup__content scrollbox">
                                <div class="popup__title">Проект «Свой первый личный сайт»</div>
                                <div class="popup__description">Идея создать собственный сайт зародилась у меня ещё в
                                    2019 году. Тогда и началась медленная работа над сайтом: сбор идей дизайна, создание
                                    собственного дизайна, вёрстка, бек-энд. Старый сайт был сделан мной уже умелым, но
                                    не достаточно, поэтому сайт претерпел «перевёрстку», так сказать... Здесь я уже
                                    умелый в достаточной мере переверстал сайт с использованием всех самых новых
                                    технологий и более качественно. На скриншотах видно, что была поддержка
                                    мультиязычности, но я от неё отказался, так как решил, что буду работать всё-таки с
                                    русскими клиентами. Процесс создания, кстати, выложил на блог</div>
                                <img class="popup__image" data-src="/images/portfolio/5/1.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/5/2.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/5/3.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/5/4.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/5/5.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/5/6.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/5/7.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/5/8.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/5/9.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/5/10.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/5/11.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/5/12.png" src="/images/1x1.png"
                                    width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="porfolio__item">
                        <div class="portfolio__background" data-src="/images/portfolio/2/preview.jpg"
                            style="background-image: url(/images/1x1.png);">
                            <div class="portfolio__button">Посмотреть проект</div>
                        </div>
                        <div class="popup">
                            <div class="popup__content scrollbox">
                                <div class="popup__title">Проект «Ламинированные полы»</div>
                                <div class="popup__description">Сайт для компании, которая занимается созданием и
                                    продажей полов для дома</div>
                                <img class="popup__image" data-src="/images/portfolio/2/1.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/2/2.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/2/3.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/2/4 [phone].jpg"
                                    src="/images/1x1.png">
                                <img class="popup__image" data-src="/images/portfolio/2/5 [ipad].jpg"
                                    src="/images/1x1.png" width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="porfolio__item">
                        <div class="portfolio__background" data-src="/images/portfolio/3/preview.jpg"
                            style="background-image: url(/images/1x1.png);">
                            <div class="portfolio__button">Посмотреть проект</div>
                        </div>
                        <div class="popup">
                            <div class="popup__content scrollbox">
                                <div class="popup__title">Проект «Админка туроператора»</div>
                                <div class="popup__description">Компании-туроператору понадобилась админка для
                                    фиксирования заказов и разных юридических распечаток</div>
                                <img class="popup__image" data-src="/images/portfolio/3/1.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/3/2.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/3/3.png" src="/images/1x1.png"
                                    width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="porfolio__item">
                        <div class="portfolio__background" data-src="/images/portfolio/4/preview.jpg"
                            style="background-image: url(/images/1x1.png);">
                            <div class="portfolio__button">Посмотреть проект</div>
                        </div>
                        <div class="popup">
                            <div class="popup__content scrollbox">
                                <div class="popup__title">Проект «Сайт библиотеки подсветки синтаксиса»</div>
                                <div class="popup__description">Собственный движок для подстветки синтаксиса</div>
                                <img class="popup__image" data-src="/images/portfolio/4/1.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/4/2.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/4/3.png" src="/images/1x1.png"
                                    width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="porfolio__item">
                        <div class="portfolio__background" data-src="/images/portfolio/1/preview.jpg"
                            style="background-image: url(/images/1x1.png);">
                            <div class="portfolio__button">Посмотреть проект</div>
                        </div>
                        <div class="popup">
                            <div class="popup__content scrollbox">
                                <div class="popup__title">Проект «Мастера без посредников»</div>
                                <div class="popup__description">Данный проект разрабатывался совместно с мастером,
                                    который от работы на платных сервисах решил перейти на собственно ручно созданный
                                    сайт, где он сможет помочь не только себе, но и другим таким же работникам, которые
                                    хотят выполнять работу без посредников.</div>
                                <img class="popup__image" data-src="/images/portfolio/1/1.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/1/2.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/1/3.png" src="/images/1x1.png"
                                    width="100%">
                                <img class="popup__image" data-src="/images/portfolio/1/5 [phone].jpg"
                                    src="/images/1x1.png">
                                <img class="popup__image" data-src="/images/portfolio/1/6 [ipad].jpg"
                                    src="/images/1x1.png" width="100%">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <div class="titles">
                <div class="titles__header">Мои навыки и умения</div>
                <div class="titles__line"></div>
                <div class="titles__text">Основные навыки и технологии, которыми я владею</div>
            </div>
            <div class="wrapper">
                <div class="skills__items">
                    <div class="skills__item">
                        <div class="skills__pie_chart">
                            <div class="skills__pie_chart_content">95%</div>
                        </div>
                        <div class="skills__description">HTML5 & CSS3</div>
                    </div>
                    <div class="skills__item">
                        <div class="skills__pie_chart">
                            <div class="skills__pie_chart_content">89%</div>
                        </div>
                        <div class="skills__description">JavaScript & VueJS</div>
                    </div>
                    <div class="skills__item">
                        <div class="skills__pie_chart">
                            <div class="skills__pie_chart_content">90%</div>
                        </div>
                        <div class="skills__description">PHP & Laravel</div>
                    </div>
                    <div class="skills__item">
                        <div class="skills__pie_chart">
                            <div class="skills__pie_chart_content">84%</div>
                        </div>
                        <div class="skills__description">Дизайн & Figma</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="calltoaction" data-src="/images/call_to_action_image.webp" style="background-image: url(/images/1x1.png);">
        <div class="calltoaction__title">Готовы начать?</div>
        <div class="calltoaction__text">Я готов для срочных, амбициозных, экстраординарных проектов!</div>
        <a class="calltoaction__button" href="#feedback">Связаться со мной</a>
    </div>

    <section id="about">
        <div class="container">
            <div class="titles">
                <div class="titles__header">Обо мне</div>
                <div class="titles__line"></div>
                <div class="titles__text about__text">Мне было 15 лет, когда я решил: программирование — моя сфера
                    деятельности. Тогда я ещё не знал, что стану именно веб-разработчиком, но вот я здесь!.. За моей
                    спиной 5 лет опыта программирования, три из которых я нахожусь во фрилансе. Я не просто создаю
                    сайты. Я предлагаю свои реализации тех или иных идей, помогаю с выбором хостинга, настройской
                    статистики с другого. Этот сайт — демонстрация того, что я умею делать; и мой <a href="/articles"
                        style="color: inherit">блог</a>, где я делюсь своими мыслями и опытом</div>
            </div>
        </div>
    </section>

    <section id="pricing">
        <div class="container">
            <div class="titles">
                <div class="titles__header">Цены и сроки</div>
                <div class="titles__line"></div>
                <div class="titles__text">Под свою разработку беру как сайты под ключ, так и отдельно дизайн/верстку/серверную часть</div>
            </div>
            <div class="wrapper">
                <div class="pricing__items">
                    <div class="pricing__item">
                        <div class="pricing__title">Лендинг</div>
                        <div class="pricing__description">Лендинг (целевая страница) — одностраничный сайт, созданный в
                            маркетинговых или рекламных целей, чтобы повысить популярность товара/услуги. Лендинги
                            играют ключевую роль в увеличении узнаваемости бренда, повышении продаж, улучшении
                            SEO-показателей и привлечении новых клиентов. Посадочная страница — отличная возможность
                            расширить клиентскую базу</div>
                        <ul class="pricing__list">
                            <li>15-50 тысяч рублей</li>
                            <li>7-14 рабочих дней</li>
                        </ul>
                    </div>
                    <div class="pricing__item">
                        <div class="pricing__title">Сайт для компании/предпринимателя</div>
                        <div class="pricing__description">Сайт компании/предпринимателя призван предоставить клиентам
                            или бизнес-партнёрам подробную информацию о компании/предпринимателе, услугах, товарах,
                            команде и другом.<br><br>Благодаря сайту скромный клиент, не прибегая к звонку, например,
                            сможет посмотреть актуальную информацию для себя и, возможно, сможет заказать что-либо
                            онлайн</div>
                        <ul class="pricing__list">
                            <li>20-100 тысяч рублей</li>
                            <li>7-12 рабочих дней</li>
                        </ul>
                    </div>
                    <div class="pricing__item">
                        <div class="pricing__title">Интернет-магазин</div>
                        <div class="pricing__description">Интернет-магазин доступен клиенту 24 часа в сутки, 7 дней в
                            неделю; бизнес не привязан к конкретному региону — можно осуществлять торговлю из любой
                            точки мира; «витрины» сайта безграничны, поэтому не возникнет проблем, с недостатком места;
                            торговля онлайн, не нужно куда-либо идти — это далеко не полный список всех преимуществ
                            интернет-магазина. В моём распоряжении навыки мощного инструмента Laravel, что позволяет
                            делать качественные интернет-магазины</div>
                        <ul class="pricing__list">
                            <li>20-100 тысяч рублей</li>
                            <li>2-3 недели</li>
                        </ul>
                    </div>
                    <div class="pricing__item">
                        <div class="pricing__title">Блог</div>
                        <div class="pricing__description">Блог — интернет-дневник.<br><br>Ныне очень популярный вид
                            сайтов — блог. Готов быстро и качественно вам его сделать</div>
                        <ul class="pricing__list">
                            <li>15-40 тысяч рублей</li>
                            <li>1 неделя</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <div class="titles">
                <div class="titles__header">Блог</div>
                <div class="titles__line"></div>
                <div class="titles__text">Моя жизнь, мысли, идеи, уроки</div>
            </div>
            <div class="wrapper">
                @if($articles->isEmpty())
                    <p style="text-align: center; font-style: italic">Пока ничего :(</p>
                @else
                    <div class="blog__articles">
                        @foreach($articles as $article)
                            <div class="blog__article" data-src="{{ $article->files[0]->path }}" style="background-image: url({{ asset('images/1x1.png') }});">
                                <div class="blog__title">{{ $article->title }}</div>
                                <a class="blog__link" href="{{ route('articles.show', $article->slug) }}"></a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section id="feedback">
        <div class="container">
            <div class="titles">
                <div class="titles__header">Свяжитесь со мной</div>
                <div class="titles__line"></div>
                <div class="titles__text">
                    Чтобы связаться со мной, вы можете заполнить форму или написать в соцсетях, указанных ниже
                </div>
            </div>
            <div class="wrapper">
                <form class="feedback__form" action="{{ route('index.store') }}#feedback" method="POST">
                    @csrf

                    @if (\Session::has('success'))
                    <span class="feedback__success">{{ \Session::get('success') }}</span>
                    @endif

                    @if ($errors->has('name'))
                    <input class="feedback__input feedback__input-error" type="text" name="name"
                        placeholder="Введите своё имя" value="{{ old('name') }}">
                    <label class="feedback__error">{{ $errors->first('name') }}</label>
                    @else
                    <input class="feedback__input" type="text" name="name" placeholder="Введите своё имя"
                        value="{{ old('name') }}">
                    @endif

                    @if ($errors->has('email'))
                    <input class="feedback__input feedback__input-error" type="email" name="email"
                        placeholder="Введите свою почту" value="{{ old('email') }}">
                    <label class="feedback__error">{{ $errors->first('email') }}</label>
                    @else
                    <input class="feedback__input" type="email" name="email" placeholder="Введите свою почту"
                        value="{{ old('email') }}">
                    @endif

                    @if ($errors->has('subject'))
                    <select class="feedback__select feedback__input-error" name="subject">
                        <option value="">Выберите тему сообщения</option>
                        <option>Задать вопрос</option>
                        <option>Оставить заявку на создание сайта</option>
                        <option>Отправить отзыв</option>
                        <option>Другое</option>
                    </select>
                    <label class="feedback__error">{{ $errors->first('subject') }}</label>
                    @else
                    <select class="feedback__select" name="subject">
                        <option value="">Выберите тему сообщения</option>
                        <option @if(old('subject') == 'Задать вопрос') selected @endif>Задать вопрос</option>
                        <option @if(old('subject') == 'Оставить заявку на создание сайта') selected @endif>Оставить заявку на создание сайта</option>
                        <option @if(old('subject') == 'Отправить отзыв') selected @endif>Отправить отзыв</option>
                        <option @if(old('subject') == 'Другое') selected @endif>Другое</option>
                    </select>
                    @endif

                    @if ($errors->has('message'))
                    <textarea class="feedback__textarea feedback__input-error" name="message" rows="8"
                        placeholder="Введите сообщение">{{ old('message') }}</textarea>
                    <label class="feedback__error">{{ $errors->first('message') }}</label>
                    @else
                    <textarea class="feedback__textarea" name="message" rows="8"
                        placeholder="Введите сообщение">{{ old('message') }}</textarea>
                    @endif
                    
                    <button class="feedback__button" type="submit">Отправить сообщение</button>
                    <div class="feedback__text">
                        <small class="feedback__privacy">Нажимая кнопку «Отправить сообщение» вы даёте согласие на
                            обработку Ваших персональных данные и соглашаетесь с <a href="/privacy.pdf"
                                target="_blank">политикой конфиденциальности</a></small>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div id="modal">
        <div class="modal__content">
            <div class="modal__title">Контакты</div>
            <div class="modal__text">
                <ul class="modal__list">
                    <li>Facebook: <strong><a href="https://www.facebook.com/denchik1170"
                                target="_blank">denchik1170</a></strong></li>
                    <li>Telegram: <strong><a href="https://t.me/denchik1170" target="_blank">denchik1170</a></strong>
                    </li>
                    <li>Youtube (старый канал): <strong><a
                                href="https://www.youtube.com/channel/UCM9BQfzhHABf3CHuinyZj_Q"
                                target="_blank">ссылка</a></strong></li>
                    <li>Youtube (новый канал): <strong><a
                                href="https://www.youtube.com/channel/UCbxqhdu5HwhZC2rE-a1MwrQ"
                                target="_blank">ссылка</a></strong></li>
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
        <div class="footer__copyrights">© 2021–{{ date('Y') }} Denis Zagvozdin | Project Idea —&nbsp;<a
                href="https://scripteden.com/previews/Clean/" target="_blank">scripteden</a></div>
    </footer>

    <script src="/js/index.js"></script>
    <script type="text/javascript">
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
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/80907394" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Person",
          "name": "Denis Zagvozdin",
          "url": "https://deniszagvozdin.ru/",
          "image": "https://deniszagvozdin.ru/images/og-image.jpg",
          "sameAs": [
            "https://www.youtube.com/channel/UCbxqhdu5HwhZC2rE-a1MwrQ",
            "https://github.com/Den4ik117",
            "https://deniszagvozdin.ru"
          ],
          "jobTitle": "Создание сайтов под ключ"
        }
    </script>
</body>

</html>
