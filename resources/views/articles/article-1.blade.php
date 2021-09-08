@extends('layouts.article')

@section('head')
  <title>Создание сайта Denis Zagvozdin RU от а до я | Denis Zagvozdin</title>

  <meta property="description" content="В этой статье я показываю, как создавал свой личный сайт-портфолио буква от создания первой и пустой папки до стадии, когда сайт можно выложить в продакшн.">

  <meta property="og:type" content="article">
  <meta property="og:title" content="Создание сайта Denis Zagvozdin">
  <meta property="og:description" content="В этой статье я показываю, как создавал свой личный сайт-портфолио буква от создания первой и пустой папки до стадии, когда сайт можно выложить в продакшн.">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:site_name" content="Создание сайтов by Denis Zagvozdin">
  <meta property="og:image" content="/images/og-image.jpg">
{{--  <meta property="article:published_time" content="">--}}
{{--  <meta property="article:modified_time" content="">--}}
@endsection

@section('description')
  <div class="main__title">Как создать сайт? Показываю на примере собственного сайта</div>
  <div class="main__paths">
    <span class="main__path"><a href="{{ route('index') }}">Главная</a></span>
    <span class="main__path"><a href="{{ route('articles') }}">Блог</a></span>
    <span class="main__path"><h1>Как создать сайт? Показываю на примере собственного сайта</h1></span>
  </div>
  <div class="main__info">
    <span>08.09.2021</span>
    <span>Denis Zagvozdin</span>
  </div>
@endsection

@section('content')
  <img src="/images/articles/article-1-photo-1.png" alt="Первая фотография на странице" width="100%">
  <h2>Вступление</h2>
  <p class="text__simple_text">Почти каждый человек в 21 веке пользовался сайтами. Сайты - это уже неотъемлемая часть нашей жизни, то, из чего, по сути, состоит вся мировая паутина. Каждый бизнес стремится создать свой сайт, каждый самозанятый предприниматель хочется, чтобы у него был сайт-визитка или лендинг, ведь мы все так привыкли пользоваться интернетом.</p>
  <h2>Так ли сложно в 21 веке научиться создавать сайты?</h2>
  <p class="text__simple_text">Давайте разберёмся с этим вопросом. Научиться писать сайты сейчас может любой желающий человек - материала, уроков, гадов, курсов в интернете очень много, причёсм как платных, так и бесплатнных. Но на это всё нужен очень ценный ресурс - время. Не у всех оно есть. С другой стороны, писать сайты самому сейчас не обязательно: есть очень много конструкторов сайтов, в которых уже заготовлены шаблоны для разных бизнесов, есть CMS-движки, которые тоже при минимальных знаниях программирования позволяют создавать сложные сайты. Но конструкторы имеют несколько недостатков перед ручным написанием сайта:</p>
  <ul class="text__list">
    <li>конструкторы/движки добавляют лишний код из-за чего сайт замедляется</li>
    <li>невозможно построить сложную архитектуру (подходит только для небольших проектов)</li>
  </ul>
  <p class="text__simple_text">Прямо противоположные особенности имеет ручное написание кода:</p>
  <ul class="text__list">
    <li>код пишет программист, лишнего ничего нет, скорость загрузки увеличивается</li>
    <li>возможно писать сложные и большие проекты</li>
  </ul>
  <h2>А теперь покажу видео, как я создавал этот сайт</h2>
{{--  <p class="text__simple_text"></p>--}}
  <iframe width="100%" height="400" src="https://www.youtube.com/embed/mnNTIXDIJRs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endsection

