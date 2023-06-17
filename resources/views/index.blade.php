<!doctype html>
<html class="h-full" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Блог Дениса Загвоздина</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Сайт-портфолио и блог Дениса Загвоздина. Здесь вы найдёте информацию обо мне, статьи и мои проекты">
    <meta property="og:type" content="site">
    <meta property="og:title" content="Сайт-портфолио, блог Дениса Загвоздина">
    <meta property="og:description" content="Сайт-портфолио и блог Дениса Загвоздина. Здесь вы найдёте информацию обо мне, статьи и мои проекты">
    <meta property="og:url" content="{{ config('app.url') }}">
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
<body class="antialiased font-sans-manrope text-white font-medium h-full">
<div class="h-full overflow-hidden bg-white p-1.5">
    <div class="h-full grid grid-rows-[min-content_1fr_min-content] gap-1.5">
        <header class="bg-black md:px-10 px-3 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-6">
                    <button id="header-button-menu" class="group border-2 border-white p-3 grid grid-cols-2 gap-1 hover:bg-blue-500" type="button" aria-label="Меню">
                        <span class="bg-white rounded h-4 w-4"></span>
                        <span class="bg-white rounded h-4 w-4"></span>
                        <span class="bg-white rounded h-4 w-4"></span>
                        <span class="bg-red-500 group-hover:bg-white rounded h-4 w-4"></span>
                    </button>
                    <span class="w-0.5 h-12 bg-white sm:block hidden"></span>
                    <a class="xl:text-2xl text-lg sm:block hidden font-semibold" href="/">Денис Загвоздин,<br class="xl:hidden block"> создание сайтов</a>
                </div>

                <div class="flex items-center gap-6">
                    <button id="header-button-about-me" class="border-2 border-white px-4 h-16 text-xl font-bold hover:bg-blue-500 flex items-center gap-2 fill-white" type="button" aria-label="Обо мне">
                        <svg class="w-8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title/><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm-.5,3A1.5,1.5,0,1,1,10,6.5,1.5,1.5,0,0,1,11.5,5ZM14,18H13a2,2,0,0,1-2-2V12a1,1,0,0,1,0-2h1a1,1,0,0,1,1,1v5h1a1,1,0,0,1,0,2Z" /></svg>
                        <span class="xl:block hidden">Обо мне</span>
                    </button>
                    <span class="w-px h-12 bg-white md:block hidden"></span>
                    <button id="header-button-change-background" class="border-2 border-white px-4 h-16 md:flex hidden items-center" type="button">
                        <img src="{{ Vite::image('icon-img.svg') }}" alt="icon-img">
                    </button>
                    <span class="w-0.5 h-12 bg-white md:block hidden"></span>
                    <button id="header-button-submit" class="border-2 border-white px-4 h-16 text-xl font-bold bg-blue-500 hover:bg-transparent flex items-center gap-2 stroke-white" type="button" aria-label="Оставить заявку">
                        <svg class="w-8" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><title/><g data-name="18-paper" id="_18-paper"><path class="cls-1" d="M27,5V3a2,2,0,0,0-2-2H7A2,2,0,0,0,5,3V29a2,2,0,0,0,2,2H25a2,2,0,0,0,2-2V19"/><line class="cls-1" x1="14" x2="18" y1="27" y2="27"/><polygon class="cls-1" points="22.75 19.25 19 20 19.75 16.25 28 8 31 11 22.75 19.25"/><line class="cls-1" x1="16" x2="9" y1="20" y2="20"/><line class="cls-1" x1="9" x2="17" y1="16" y2="16"/><line class="cls-1" x1="9" x2="19" y1="12" y2="12"/></g></svg>
                        <span class="xl:block hidden">Оставить заявку</span>
                    </button>
                </div>
            </div>
        </header>
        <main id="main" class="bg-black relative bg-no-repeat bg-cover min-w-0 bg-center">
            <div class="flex items-center justify-center h-full gap-8">
                <button id="main-button-about-me" class="md:absolute top-[80px] left-[100px] flex flex-col items-center p-4 gap-2" type="button">
                    <img class="md:w-20 w-16" src="{{ Vite::image('icon-docx-orange.svg') }}" alt="icon-docx-orange">
                    <span class="md:text-2xl text-lg font-bold">Обо мне</span>
                </button>

                <button id="main-button-my-projects" class="md:absolute top-[200px] left-[340px] flex flex-col items-center p-4 gap-2" type="button">
                    <img class="md:w-20 w-16" src="{{ Vite::image('icon-folder.svg') }}" alt="icon-folder">
                    <span class="md:text-2xl text-lg font-bold">Мои работы</span>
                </button>
            </div>

            <section id="submit-section" class="absolute top-0 right-0 bottom-0 h-full w-full md:w-[70%] xl:w-[45%] md:pl-1.5 bg-white overflow-hidden hidden">
                <div class="grid grid-rows-[min-content_1fr] gap-1.5 h-full overflow-y-auto overflow-x-hidden">
                    <div class="grid grid-cols-[1fr_min-content] gap-1.5 text-black">
                        <div class="flex-1 font-sans-russo pl-4 md:pl-16 flex items-center bg-orange-500 text-2xl md:text-3xl">Оставить заявку</div>
                        <button id="submit-button-close" class="flex-shrink-0 p-2 sm:p-4 bg-orange-500 hover:bg-blue-500 hover:fill-white" type="button" aria-label="Закрыть">
                            <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"/></svg>
                        </button>
                    </div>
                    <form id="submit-form" class="p-4 md:p-16 flex flex-col gap-4 bg-black" method="POST">
                        <input class="border-2 border-white px-5 py-4 bg-transparent text-white font-semibold focus:outline-none focus:border-gray-400" type="text" name="name" placeholder="Введите ваше имя" aria-label="Имя" required>
                        <input class="border-2 border-white px-5 py-4 bg-transparent text-white font-semibold focus:outline-none focus:border-gray-400" type="email" name="email" placeholder="Введите вашу почту" aria-label="Почта" required>
                        <textarea class="border-2 border-white px-5 py-4 bg-transparent text-white font-semibold focus:outline-none focus:border-gray-400" rows="3" name="content" placeholder="Опишите ваш запрос" aria-label="Текст обращения" required></textarea>
                        <button class="border-2 border-white p-4 bg-orange-500 hover:bg-orange-600 text-lg font-semibold" type="submit">Оставить заявку</button>
                        <span id="success-form-text" class="text-center text-sm font-semibold text-green-500 hidden"></span>
                        <span id="error-form-text" class="text-center text-sm font-semibold text-red-500 hidden"></span>
                        <small class="text-center sm:px-12">Нажимая кнопку «Оставить заявку» вы даёте согласие на обработку Ваших персональных данных и соглашаетесь с <a class="underline" href="{{ asset('privacy.pdf') }}" target="_blank">политикой конфиденциальности</a>.</small>
                    </form>
                </div>
            </section>

            <section id="about-me" class="absolute top-0 right-0 bottom-0 h-full w-full md:w-[70%] xl:w-[45%] md:pl-1.5 bg-white overflow-hidden hidden">
                <div class="grid grid-rows-[min-content_1fr_min-content] gap-1.5 h-full overflow-y-auto overflow-x-hidden">
                    <div class="grid grid-cols-[1fr_min-content] gap-1.5 text-black">
                        <div class="flex-1 font-sans-russo pl-4 md:pl-16 flex items-center bg-orange-500 text-2xl md:text-3xl">Обо мне</div>
                        <button id="about-button-close" class="flex-shrink-0 p-2 sm:p-4 bg-orange-500 hover:bg-blue-500 hover:fill-white" type="button" aria-label="Закрыть">
                            <svg class="w-[40px] h-[40px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"/></svg>
                        </button>
                    </div>
                    <div class="p-4 md:p-16 bg-black">
                        <div class="grid sm:grid-cols-[5fr_9fr] grid-cols-1 items-center gap-4">
                            <img class="sm:w-full w-1/2 mx-auto rounded" src="{{ Vite::image('DenisZagvozdinPhoto.webp') }}" alt="Фото Загвоздина Дениса">
                            <div class="flex flex-col gap-2 indent-8 text-justify font-medium text-sm md:text-base">
                                <p>Привет! Меня зовут Денис, я создаю сайты. Программирование стало моим хобби ещё в 2018 году, но в какой-то момент это переросло во что-то более существенное.</p>
                                <p>В 2019 году я открыл для себя фриланс. С тех пор и до 2022 года мне с заказчиками удалось реализовать 2 крупных сайта, которые существуют и приносят пользу по сей день. Узнать о моих проектах больше можно в разделе «Мои работы».</p>
                                <p>С 2022 года работаю в компании. Я каждый день открываю для себя что-то новое и стараюсь улучшать свои практики написания кода. И если раньше этот сайт был возможностью рассказать всему миру о себе, то теперь этот сайт ― возможность поделиться своим опытом со всем миром.</p>
                            </div>
                        </div>
                    </div>
                    <a class="px-4 py-3 text-xl font-bold bg-blue-500 hover:bg-blue-600 text-center" href="{{ route('articles.index') }}">Кладезь знаний [Статьи]</a>
                </div>
            </section>

            <section id="my-projects" class="absolute top-0 right-0 bottom-0 h-full w-full md:w-[70%] xl:w-[45%] md:pl-1.5 bg-white overflow-hidden hidden">
                <div class="grid grid-rows-[min-content_1fr] gap-1.5 h-full overflow-y-auto overflow-x-hidden">
                    <div id="my-works" class="grid grid-cols-[1fr_min-content] gap-1.5 text-black">
                        <div class="flex-1 font-sans-russo pl-4 md:pl-16 flex items-center bg-orange-500 text-2xl md:text-3xl">Мои работы</div>
                        <button class="button-close flex-shrink-0 p-2 sm:p-4 bg-orange-500 hover:bg-blue-500 hover:fill-white" type="button" aria-label="Закрыть">
                            <svg class="w-[40px] h-[40px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"/></svg>
                        </button>
                    </div>
                    <div id="active-work" class="hidden grid-cols-[min-content_1fr_min-content] gap-1.5 text-black">
                        <button id="projects-button-backward" class="flex-shrink-0 p-2 sm:p-4 bg-orange-500 hover:bg-blue-500 hover:fill-white" type="button">
                            <svg width="40" height="40" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g id="Layer_1"/><g id="icons"><path class="st0" d="M16.4,29.8l1.5-1.5c0.3-0.3,0.3-0.7,0-1l-9.4-9.5h20.9c0.4,0,0.7-0.3,0.7-0.7v-2.1   c0-0.4-0.3-0.7-0.7-0.7H8.4l9.4-9.5c0.3-0.3,0.3-0.7,0-1l-1.5-1.5c-0.3-0.3-0.7-0.3-1,0L2.2,15.5c-0.3,0.3-0.3,0.7,0,1l13.1,13.3   C15.6,30.1,16.1,30.1,16.4,29.8z" id="backward_1_"/></g></svg>
                        </button>
                        <div id="title-output" class="font-sans-russo px-4 py-2 flex items-center bg-orange-500 text-2xl md:text-3xl"></div>
                        <button class="button-close flex-shrink-0 p-2 sm:p-4 bg-orange-500 hover:bg-blue-500 hover:fill-white" type="button" aria-label="Закрыть">
                            <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"/></svg>
                        </button>
                    </div>
                    <div id="article-viewport" class="p-4 md:p-8 bg-black">
                        <article id="article-1" class="prose prose-invert mx-auto hidden">
                            <h3>Проект онлайн школа «TeoSchool»</h3>
                            <p>У этого сайта длинная история, которая началась ещё в 2020 году. Тогда это была идея крутого стартапа, которая в разгар пандемии смотрелась ещё круче.</p>
                            <p>Сделать сайт получилось, но дальше этого идея не продвинулась по двум причинам:</p>
                            <ol>
                                <li>Нехватка опыта: сайт готов, но что делать дальше?</li>
                                <li>Очень сложно создать курсы, которые несли бы в себе действительную ценность.</li>
                            </ol>
                            <p>В 2020 году я учился в 10 классе, и считаю, что для того возраста результат получился более чем значимый. Думая об этом сейчас, я понимаю, что уже тогда было желание привнести в мир что-то полезное, что-то своё.</p>
                            <p>В 2022 году сайт получил второй дыхание. В университете на втором курсе по предмету «Проектный практикум» у нас свободный выбор проекта, который мы будем разрабатывать командой в течение семестра. Наша команда из 3 человек выбрала задачу создать онлайн-школу на базе той, что уже имелась.</p>
                            <p>Уже будучи командой, мы сделали сайт ещё круче. Те фотографии, которые находятся ниже, ― отрывки из готовой версии сайта: профиль, курсы, лендинг.</p>
                            <p>История всё ещё продолжается, а чем она закончится ― пока не знаю.</p>
                            <p><a href="https://teoschool.deniszagvozdin.ru/" target="_blank">Ссылка на сайт</a></p>
                            <p><img src="{{ Vite::image('works/1_article_3.jpg') }}" alt="Фотография сайта «TeoSchool»: профиль пользователя" loading="lazy"></p>
                            <p><img src="{{ Vite::image('works/1_article_2.jpg') }}" alt="Фотография сайта «TeoSchool»: курсы на выбор" loading="lazy"></p>
                            <p><img src="{{ Vite::image('works/1_article_1.jpg') }}" alt="Фотография сайта «TeoSchool»: лендинг, главная страница сайта" loading="lazy"></p>
                        </article>

                         <article id="article-2" class="prose prose-invert mx-auto hidden">
                             <h3>Лендинг «Ламинированные полы»</h3>
                             <p>Один из первых моих заказов на фрилансе ― начало пути. Тогда этот ресурс был сделан за символическую сумму и был передан заказчику. К сожалению, после этого историю сайта я не знаю, а сохранились лишь старые скриншоты.</p>
                             <p><img src="{{ Vite::image('works/2_article_1.png') }}" alt="Фотография лендинга «Ламинированные полы» №1" loading="lazy"></p>
                             <p><img src="{{ Vite::image('works/2_article_2.png') }}" alt="Фотография лендинга «Ламинированные полы» №2" loading="lazy"></p>
                             <p><img src="{{ Vite::image('works/2_article_3.png') }}" alt="Фотография лендинга «Ламинированные полы» №3" loading="lazy"></p>
                             <p><img src="{{ Vite::image('works/2_article_4.jpg') }}" alt="Фотография лендинга «Ламинированные полы» №4" loading="lazy"></p>
                             <p><img src="{{ Vite::image('works/2_article_5.jpg') }}" alt="Фотография лендинга «Ламинированные полы» №5" loading="lazy"></p>
                         </article>

                        <article id="article-3" class="prose prose-invert mx-auto hidden">
                            <h3>Внутренняя панель администратора для туроператора</h3>
                            <p>Одна из моих первый крупных работ ― админка для сотрудников компании-туроператора. Она была необходима для автоматизирования части рутинного труда. Вместо гугл-таблиц сотрудники могли в удобном интерфейсе заполнить данные о разных заказах. А при возникновении потребности ― распечатать или скачать эти данные в формате DOCX или PDF.</p>
                            <p><img src="{{ Vite::image('works/3_article_1.png') }}" alt="Фотография сайта, который делал Денис Загвоздин для компании-туроператора. Панель входа" loading="lazy"></p>
                            <p><img src="{{ Vite::image('works/3_article_2.png') }}" alt="Фотография сайта, который делал Денис Загвоздин для компании-туроператора. Главная страница сайта" loading="lazy"></p>
                            <p><img src="{{ Vite::image('works/3_article_3.png') }}" alt="Фотография сайта, который делал Денис Загвоздин для компании-туроператора. Пример формы на сайте" loading="lazy"></p>
                        </article>

                        <article id="article-4" class="prose prose-invert mx-auto hidden">
                            <h3>Сайт для библиотеки подсветки синтаксиса</h3>
                            <p>Pet-проект* 2019 года. Самописная библиотека для подсветки синтаксиса. И лендинг, представляющий общественности всю необходимую информацию о библиотеке.</p>
                            <p>* Pet-проект ― это проект, который разработчик делает для себя, в свободное от основной работы время. <sup><a href="https://blog.skillfactory.ru/chto-takoe-pet-proekty-i-zachem-oni-nuzhny/" target="_blank">Источник</a></sup></p>
                            <p><img src="{{ Vite::image('works/4_article_1.png') }}" alt="Фотография pet-проекта Дениса Загвоздина ― сайт для библиотеки подсветки синтаксиса: фото №1" loading="lazy"></p>
                            <p><img src="{{ Vite::image('works/4_article_2.png') }}" alt="Фотография pet-проекта Дениса Загвоздина ― сайт для библиотеки подсветки синтаксиса: фото №2" loading="lazy"></p>
                            <p><img src="{{ Vite::image('works/4_article_3.png') }}" alt="Фотография pet-проекта Дениса Загвоздина ― сайт для библиотеки подсветки синтаксиса: фото №3" loading="lazy"></p>
                        </article>

                        <article id="article-5" class="prose prose-invert mx-auto hidden">
                            <h3>Проект «Мастера без посредников»</h3>
                            <p>Проект, разработанный совместно с мастером-сантехником. Идея, лежащая в основе, ― мастер регистрируется на нашем специализированном ресурсе, заполняет данные о себе и может без посредников находить работу.</p>
                            <p>Целевая аудитория:</p>
                            <ul>
                                <li>сами мастера, которым необходимо заполнить анкету и указать область навыков;</li>
                                <li>обычные пользователи, нуждающиеся в ремонте какой-либо бытовой техники.</li>
                            </ul>
                            <p>Я буду честным. Этот заказ был одним из первых довольно крупных. Этот текст пишется спустя несколько лет после. Тогда нам так и не удалось запустить ресурс. И анализируя эту ситуацию сейчас, я понимаю, что мы бы так и не запустили тот сервис. На то, на мой взгляд, есть минимум 3 причины:</p>
                            <ol>
                                <li>тот ценовой сегмент, в котором я тогда работал, не предполагал наличие опытных специалистов-программистов, а успех продукта подобного рода отчасти зависел и от опытности того, кто делал сайт;</li>
                                <li>нечего монетизировать: сервис не предполагал сбора средств за какие-либо услуги;</li>
                                <li>слишком маленький размах, учитывая, что есть крупные ресурсы-сайты с большей посещаемостью и более гибким функционалом.</li>
                            </ol>
                            <p><img src="{{ Vite::image('works/5_article_1.png') }}" alt="Проект Дениса Загвоздина «Мастера без посредников», фото №1" loading="lazy"></p>
                            <p><img src="{{ Vite::image('works/5_article_2.png') }}" alt="Проект Дениса Загвоздина «Мастера без посредников», фото №2" loading="lazy"></p>
                            <p><img src="{{ Vite::image('works/5_article_3.png') }}" alt="Проект Дениса Загвоздина «Мастера без посредников», фото №3" loading="lazy"></p>
                            <p><img src="{{ Vite::image('works/5_article_4.png') }}" alt="Проект Дениса Загвоздина «Мастера без посредников», фото №4" loading="lazy"></p>
                            <p><img src="{{ Vite::image('works/5_article_5.jpg') }}" alt="Проект Дениса Загвоздина «Мастера без посредников», фото №5" loading="lazy"></p>
                            <p><img src="{{ Vite::image('works/5_article_6.jpg') }}" alt="Проект Дениса Загвоздина «Мастера без посредников», фото №6" loading="lazy"></p>
                        </article>

                        <article id="article-6" class="prose prose-invert mx-auto hidden">
                            <h3>Проект: аналог сайта banki.ru</h3>
                            <p>Один из свежих проектов (2022 год), разрабатывать который мне очень нравилось.</p>
                            <p>В какой-то момент разработка прекратилась по причине, не зависящей от меня. Проект, возможно, заброшен, возможно, когда-нибудь я к нему ещё вернусь, и он увидит свет.</p>
                            <p><a href="https://banki.deniszagvozdin.ru/" target="_blank">Ссылка на демо-версию сайта</a></p>
                            <p><img src="{{ Vite::image('works/6_article_1.jpg') }}" alt="Проект Дениса Загвоздина: аналог сайта banki.ru. Главная страница" loading="lazy"></p>
                            <p><img src="{{ Vite::image('works/6_article_2.jpg') }}" alt="Проект Дениса Загвоздина: аналог сайта banki.ru. Страница с вкладами" loading="lazy"></p>
                        </article>

                        <article id="article-7" class="prose prose-invert mx-auto hidden">
                            <h3>ГИФА.РФ ― горизонтальное бурение скважин</h3>
                            <p>На момент написания этого текста, это последний коммерческий сайт, который я писал (сайт был сделан летом 2022 года, а этот текст пишется в апреле 2023 года).</p>
                            <p>Был свёрстан лендинг, была сделана панель администратора для гибкой настройки главной страницы: текста, мета-информация для SEO-оптимизации, последние выполненные заказы и пр.</p>
                            <p>Сайт запущен и работает. Ниже прикрепляю ссылки на самую первую версию сайта с горизонтально-вертикальным скроллом и сайт в продакшене, который был много раз переделан.</p>
                            <p><a href="https://гифа.рф/" target="_blank">Ссылка на сайт</a></p>
                            <p><a href="https://gifa.deniszagvozdin.ru/" target="_blank">Ссылка на первую версию сайта (демо-версию)</a></p>
                            <p><img src="{{ Vite::image('works/7_article_1.jpg') }}" alt="Проект Дениса Загвоздина: главная страница сайта ГИФА.РФ" loading="lazy"></p>
                        </article>

                        <div id="work-list" class="grid md:grid-cols-4 grid-cols-2 gap-4 text-center">
                            <button class="work flex flex-col items-center p-4 gap-2 bg-gray-50 bg-opacity-0" data-target="#article-1" data-title="Онлайн-школа TeoSchool">
                                <img class="w-20" src="{{ Vite::image('icon-folder-trash.svg') }}" alt="icon-docx-orange">
                                <span class="text-sm font-bold">Онлайн-школа TeoSchool</span>
                            </button>
                            <button class="work flex flex-col items-center p-4 gap-2 bg-gray-50 bg-opacity-0" data-target="#article-2" data-title="Лендинг «Ламинированные полы»">
                                <img class="w-20" src="{{ Vite::image('icon-folder-trash.svg') }}" alt="icon-docx-orange">
                                <span class="text-sm font-bold">Лендинг «Ламинированные полы»</span>
                            </button>
                            <button class="work flex flex-col items-center p-4 gap-2 bg-gray-50 bg-opacity-0" data-target="#article-3" data-title="Внутренняя панель администратора для туроператора">
                                <img class="w-20" src="{{ Vite::image('icon-folder-trash.svg') }}" alt="icon-docx-orange">
                                <span class="text-sm font-bold">Внутренняя панель администратора для туроператора</span>
                            </button>
                            <button class="work flex flex-col items-center p-4 gap-2 bg-gray-50 bg-opacity-0" data-target="#article-4" data-title="Сайт для библиотеки подсветки синтаксиса">
                                <img class="w-20" src="{{ Vite::image('icon-folder-trash.svg') }}" alt="icon-docx-orange">
                                <span class="text-sm font-bold">Сайт для библиотеки подсветки синтаксиса</span>
                            </button>
                            <button class="work flex flex-col items-center p-4 gap-2 bg-gray-50 bg-opacity-0" data-target="#article-5" data-title="Мастера без посредников">
                                <img class="w-20" src="{{ Vite::image('icon-folder-trash.svg') }}" alt="icon-docx-orange">
                                <span class="text-sm font-bold">Мастера без посредников</span>
                            </button>
                            <button class="work flex flex-col items-center p-4 gap-2 bg-gray-50 bg-opacity-0" data-target="#article-6" data-title="Аналог сайта banki.ru">
                                <img class="w-20" src="{{ Vite::image('icon-folder-trash.svg') }}" alt="icon-docx-orange">
                                <span class="text-sm font-bold">Аналог сайта banki.ru</span>
                            </button>
                            <button class="work flex flex-col items-center p-4 gap-2 bg-gray-50 bg-opacity-0" data-target="#article-7" data-title="ГИФА.РФ ― горизонтальное бурение скважин">
                                <img class="w-20" src="{{ Vite::image('icon-folder-trash.svg') }}" alt="icon-docx-orange">
                                <span class="text-sm font-bold">ГИФА.РФ ― горизонтальное бурение скважин</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <nav id="navigation" class="absolute top-0 left-0 bottom-0 h-full w-[260px] sm:w-96 pr-1.5 bg-white hidden">
                <div class="grid grid-rows-4 gap-1.5 h-full">
                    <button id="nav-button-about-me" class="flex items-center justify-center bg-black text-xl sm:text-2xl font-bold" type="button">Обо мне</button>
                    <button id="nav-button-my-projects" class="flex items-center justify-center bg-black text-xl sm:text-2xl font-bold" type="button">Мои работы</button>
                    <a class="flex items-center justify-center bg-black text-xl sm:text-2xl font-bold" href="{{ route('articles.index') }}">Статьи</a>
                    <button id="nav-button-submit" class="flex items-center justify-center bg-blue-500 text-xl sm:text-2xl font-bold" type="button">Оставить заявку</button>
                </div>
            </nav>
        </main>
        <footer class="bg-black md:px-10 px-3 py-3 sm:block hidden">
            <div class="flex items-center justify-between">
                <ul class="flex items-center gap-4">
                    <li>
                        <a class="w-16 h-16 border-2 border-white flex items-center justify-center hover:bg-blue-500" href="https://t.me/denchik1170" target="_blank">
                            <img src="{{ Vite::image('icon-tg.svg') }}" alt="icon-tg">
                        </a>
                    </li>
                    <li>
                        <a class="w-16 h-16 border-2 border-white flex items-center justify-center hover:bg-blue-500" href="https://vk.com/public216979635" target="_blank">
                            <img src="{{ Vite::image('icon-vk.svg') }}" alt="icon-vk">
                        </a>
                    </li>
                </ul>

                <div class="flex items-center justify-center sm:w-auto w-full md:gap-x-8 gap-x-4 gap-y-1">
                    <a class="lg:text-xl text-base font-bold" href="tel:+79080675295">+7 908 067 52 95</a>
                    <a class="lg:text-xl text-base font-bold" href="mailto:my@deniszagvozdin.ru">my@deniszagvozdin.ru</a>
                    <span class="w-0.5 h-12 bg-white md:block hidden"></span>
                    <span id="time-span" class="text-2xl font-bold md:block hidden">00:00</span>
                </div>
            </div>
        </footer>

        <div class="bg-white sm:hidden grid grid-cols-4 gap-1.5">
            <a class="w-full h-14 bg-black flex items-center justify-center hover:bg-blue-500" href="https://t.me/denchik1170" target="_blank">
                <img class="h-6" height="24" width="24" src="{{ Vite::image('icon-tg.svg') }}" alt="icon-tg">
            </a>
            <a class="w-full h-14 bg-black flex items-center justify-center hover:bg-blue-500" href="https://vk.com/public216979635" target="_blank">
                <img class="h-5" height="20" width="20" src="{{ Vite::image('icon-vk.svg') }}" alt="icon-vk">
            </a>
            <a class="w-full h-14 bg-black flex items-center justify-center hover:bg-blue-500" href="tel:+79080675295">
                <img class="h-6" height="24" width="24" src="{{ Vite::image('icon-phone.svg') }}" alt="icon-phone">
            </a>
            <a class="w-full h-14 bg-black flex items-center justify-center hover:bg-blue-500" href="mailto:my@deniszagvozdin.ru">
                <img class="h-8" height="32" width="32" src="{{ Vite::image('icon-email.svg') }}" alt="icon-email">
            </a>
        </div>
    </div>
</div>

<script>
    window.backgrounds = [
        '{{ Vite::image('Background_1.webp') }}',
        '{{ Vite::image('Background_2.webp') }}',
        '{{ Vite::image('Background_3.webp') }}',
        '{{ Vite::image('Background_4.webp') }}',
        '{{ Vite::image('Background_5.webp') }}',
    ]
</script>
@vite('resources/ts/app.ts')
</body>
</html>
