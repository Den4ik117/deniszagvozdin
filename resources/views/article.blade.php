@extends('layouts.article')

@section('head')
  <title>Denis Zagvozdin | Название статьи</title>

  <meta property="description" content="описание">

  <meta property="og:type" content="article">
  <meta property="og:title" content="Заголовок статьи">
  <meta property="og:description" content="Описание статьи статьи">
  <meta property="og:url" content="https://google.com">
  <meta property="og:site_name" content="Laravel статьи">
  <meta property="og:image" content="/images/og-image.jpg">
  <meta property="article:published_time" content="">
  <meta property="article:modified_time" content="">
@endsection

@section('description')
  <div class="main__title">Работа на удалёнке: миф или реальность?</div>
  <div class="main__paths">
    <span class="main__path"><a href="{{ route('index') }}">Главная</a></span>
    <span class="main__path"><a href="{{ route('articles') }}">Блог</a></span>
    <span class="main__path"><h1>Работа на удалёнке: миф или реальность?</h1></span>
  </div>
  <div class="main__info">
    <span>10.06.2021</span>
    <span>Admin</span>
  </div>
@endsection

@section('content')
  <img src="https://cdn.pixabay.com/photo/2021/06/04/15/51/coast-6310250_960_720.jpg" alt="" width="100%">
  <p class="text__simple_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, assumenda deleniti! Optio quo veniam illo, dolores cumque laborum esse laboriosam dicta nemo voluptatibus labore, asperiores, exercitationem sapiente repudiandae inventore soluta.</p>
  <p class="text__simple_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, assumenda deleniti! Optio quo veniam illo, dolores cumque laborum esse laboriosam dicta nemo voluptatibus labore, asperiores, exercitationem sapiente repudiandae inventore soluta.</p>
  <p class="text__simple_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, assumenda deleniti! Optio quo veniam illo, dolores cumque laborum esse laboriosam dicta nemo voluptatibus labore, asperiores, exercitationem sapiente repudiandae inventore soluta.</p>
  <h2>Какой-то заголовок</h2>
  <iframe width="100%" height="400" src="https://www.youtube.com/embed/mnNTIXDIJRs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <img src="https://cdn.pixabay.com/photo/2020/08/29/09/26/beach-5526592_960_720.jpg" alt="" width="100%">
  <p class="text__simple_text">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea in nesciunt amet quis odit eveniet sit deleniti unde praesentium obcaecati rem temporibus, consectetur incidunt asperiores! Animi harum asperiores corrupti dolores numquam rem quo facilis quaerat excepturi aperiam, voluptas, consequuntur tempora. Eaque molestiae consectetur quam placeat quidem vero assumenda sed. Consectetur tempora ducimus adipisci maiores ratione? Magnam totam soluta illo quos, odit perspiciatis impedit vel. Alias, ea! Cum at voluptates error aperiam placeat perspiciatis repellendus. Quos sequi beatae eum, molestias blanditiis praesentium adipisci in perspiciatis culpa natus. Suscipit dolorem veritatis vitae ex expedita officiis voluptatem blanditiis eaque sit quo. Dignissimos, quae.
  </p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ab autem consectetur ducimus eos est, eveniet ex exercitationem ipsam iste magnam nam nemo nesciunt nisi quisquam rem, repellendus unde voluptas!</p>
@endsection
