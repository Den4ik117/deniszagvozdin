@extends('layouts.article')

@section('head')
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
@endsection

@section('description')
  <div class="main__title">{{ $article->title }}</div>
  <div class="main__paths">
    <span class="main__path"><a href="{{ route('index') }}">Главная</a></span>
    <span class="main__path"><a href="{{ route('articles') }}">Блог</a></span>
    <span class="main__path"><h1>{{ $article->title }}</h1></span>
  </div>
  <div class="main__info">
    <span>{{ $article->created_at->format('d.m.Y') }}</span>
    <span>{{ auth()->user()->name . ' ' . auth()->user()->surname }}</span>
  </div>
@endsection

@section('content'){!! $article->content !!}@endsection

