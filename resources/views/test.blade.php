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
  {!! $html !!}
@endsection

