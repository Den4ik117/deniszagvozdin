{{--@extends('layouts.app')--}}

{{--@section('header', 'Store article')--}}

{{--@section('content')--}}
{{--  <div class="max-w-7xl mx-auto">--}}
{{--    <div class="bg-white p-4 border rounded">--}}
{{--      <form action="{{ route('articles.update', $article->id) }}" method="POST">--}}
{{--        @csrf--}}
{{--        @method('PUT')--}}

{{--        <div>--}}
{{--          <x-label for="title">Название статьи:</x-label>--}}
{{--          <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $article->title }}"/>--}}
{{--        </div>--}}

{{--        <div>--}}
{{--          <x-label for="slug">Slug статьи:</x-label>--}}
{{--          <x-input id="slug" class="block mt-1 w-full" type="text" name="slug" value="{{ $article->slug }}"/>--}}
{{--        </div>--}}

{{--        <div class="mt-4">--}}
{{--          <x-label for="description">Описание статьи:</x-label>--}}
{{--          <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{ $article->description }}"/>--}}
{{--        </div>--}}

{{--        <div class="mt-4">--}}
{{--          <x-label for="og_title">Open Graph заголовок статьи:</x-label>--}}
{{--          <x-input id="og_title" class="block mt-1 w-full" type="text" name="og_title" value="{{ $article->og_title }}"/>--}}
{{--        </div>--}}

{{--        <div class="mt-4">--}}
{{--          <x-label for="og_description">Open Graph описание статьи:</x-label>--}}
{{--          <x-input id="og_description" class="block mt-1 w-full" type="text" name="og_description" value="{{ $article->og_description }}"/>--}}
{{--        </div>--}}

{{--        <div class="mt-4">--}}
{{--          <x-label for="content">Содержание статьи:</x-label>--}}
{{--          <textarea id="content" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 resize-none" name="content" cols="30" rows="10">{{ $article->content }}</textarea>--}}
{{--        </div>--}}

{{--        <div class="mt-4 text-right">--}}
{{--          <x-button>{{ __('Update article') }}</x-button>--}}
{{--        </div>--}}
{{--      </form>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--@endsection--}}
@extends('layouts.master')

@section('title', 'Редактировать статью')

@section('content')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Написать статью</h3>
          <p class="text-subtitle text-muted">Форма для написания статьи</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard') }}">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Редактировать статью</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    @if($errors->any())
      <div class="alert alert-danger" role="alert">
        {{ $errors->first() }}
      </div>
    @endif

    @if(session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <section class="section">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Написание статьи</h4>
        </div>

        <form action="{{ route('articles.update', $article->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="card-body">
            <div class="row">
              <div class="col-md-6">

                <div class="form-group">
                  <label for="title">Название статьи:</label>
                  <input id="title" class="form-control" type="text" name="title" placeholder="Название" value="{{ $article->title }}">
                </div>

                <div class="form-group">
                  <label for="description">Описание статьи:</label>
                  <input id="description" class="form-control" type="text" name="description" placeholder="Описание" value="{{ $article->description }}">
                </div>

                <div class="form-group">
                  <label for="slug">Slug статьи:</label>
                  <input id="slug" class="form-control" type="text" name="slug" placeholder="Slug" value="{{ $article->slug }}">
                </div>

              </div>
              <div class="col-md-6">

                <div class="form-group">
                  <label for="og_title">Название статьи для соцсетей:</label>
                  <input id="og_title" class="form-control" type="text" name="og_title" placeholder="Название для соцсетей" value="{{ $article->og_title }}">
                </div>

                <div class="form-group">
                  <label for="og_description">Описание статьи для соцсетей:</label>
                  <input id="og_description" class="form-control" type="text" name="og_description" placeholder="Описание для соцсетей" value="{{ $article->og_description }}">
                </div>

              </div>
            </div>

            <div class="form-group">
              <label for="short_content" class="form-label">Введите краткое содержание статьи:</label>
              <textarea id="short_content" class="form-control" rows="3" name="short_content"
                        placeholder="Краткое содержание...">{{ $article->short_content }}</textarea>
            </div>

            <div class="form-group">
              <label for="content" class="form-label">Содержание статьи:</label>
              <textarea id="content" class="form-control" rows="10" name="content" placeholder="Содержание...">{{ $article->content }}</textarea>
            </div>

            <button class="btn btn-primary mt-2" type="submit">Сохранить</button>
          </div>
        </form>
      </div>
    </section>
  </div>
@endsection
