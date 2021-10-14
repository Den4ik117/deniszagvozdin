{{--@extends('layouts.app')--}}

{{--@section('header', 'Store article')--}}

{{--@section('content')--}}
{{--  <div class="max-w-7xl mx-auto">--}}
{{--    <div class="bg-white p-4 border rounded">--}}
{{--      <form action="{{ route('articles.store') }}" method="POST">--}}
{{--        @csrf--}}

{{--        <div>--}}
{{--          <x-label for="title">Название статьи:</x-label>--}}
{{--          <x-input id="title" class="block mt-1 w-full" type="text" name="title"/>--}}
{{--        </div>--}}

{{--        <div class="mt-4">--}}
{{--          <x-label for="description">Описание статьи:</x-label>--}}
{{--          <x-input id="description" class="block mt-1 w-full" type="text" name="description"/>--}}
{{--        </div>--}}

{{--        <div class="mt-4">--}}
{{--          <x-label for="og_title">Open Graph заголовок статьи:</x-label>--}}
{{--          <x-input id="og_title" class="block mt-1 w-full" type="text" name="og_title"/>--}}
{{--        </div>--}}

{{--        <div class="mt-4">--}}
{{--          <x-label for="og_description">Open Graph описание статьи:</x-label>--}}
{{--          <x-input id="og_description" class="block mt-1 w-full" type="text" name="og_description"/>--}}
{{--        </div>--}}

{{--        <div class="mt-4">--}}
{{--          <x-label for="content">Содержание статьи:</x-label>--}}
{{--          <textarea id="content" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 resize-none" name="content" cols="30" rows="10"></textarea>--}}
{{--        </div>--}}

{{--        <div class="mt-4 text-right">--}}
{{--          <x-button>{{ __('Store article') }}</x-button>--}}
{{--        </div>--}}
{{--      </form>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--@endsection--}}
@extends('layouts.master')

@section('title', 'Написать статью')

@section('scripts')
  <script src="{{ asset('js/article.js') }}"></script>
@endsection

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
              <li class="breadcrumb-item active" aria-current="page">Написать статью</li>
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

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="card-body">
            <div class="row">
              <div class="col-md-6">

                <div class="form-group">
                  <label for="title">Введите название статьи:</label>
                  <input id="title" class="form-control" type="text" name="title" placeholder="Название"
                         value="{{ old('title') }}">
                </div>

                <div class="form-group">
                  <label for="description">Введите описание статьи:</label>
                  <input id="description" class="form-control" type="text" name="description" placeholder="Описание"
                         value="{{ old('description') }}">
                </div>

              </div>
              <div class="col-md-6">

                <div class="form-group">
                  <label for="og_title">Введите название статьи для соцсетей:</label>
                  <input id="og_title" class="form-control" type="text" name="og_title"
                         placeholder="Название для соцсетей" value="{{ old('og_title') }}">
                </div>

                <div class="form-group">
                  <label for="og_description">Введите описание статьи для соцсетей:</label>
                  <input id="og_description" class="form-control" type="text" name="og_description"
                         placeholder="Описание для соцсетей" value="{{ old('og_description') }}">
                </div>

              </div>
            </div>
            <div class="form-group">
              <label for="short_content" class="form-label">Введите краткое содержание статьи:</label>
              <textarea id="short_content" class="form-control" rows="3" name="short_content"
                        placeholder="Краткое содержание...">{{ old('short_content') }}</textarea>
            </div>

            <div class="form-group">
              <label for="image" class="form-label">Изображение на фоне</label>
              <input id="image" class="form-control" type="file" name="image">
            </div>

            <div class="form-group">
              <label for="content" class="form-label">Введите содержание статьи (JSON):</label>
              <textarea id="content" class="form-control" rows="10" name="content"
                        placeholder="Содержание...">{{ old('content') }}</textarea>
            </div>

            <button class="btn btn-primary mt-2" type="submit">Создать статью</button>
          </div>
        </form>
      </div>
    </section>

<!--    <section id="application" class="section">

      <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
           aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel1">Добавить текст</h5>
              <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                <i data-feather="x"></i>
              </button>
            </div>
            <div class="modal-body">

              <div class="form-group">
                <label class="form-label">Вид текста:</label>
                <select class="form-select" v-model="selectType">
                  <option>Параграф</option>
                  <option>Заголовок 2-го уровня</option>
                  <option>Заголовок 3-го уровня</option>
                </select>
              </div>

              <div class="form-group">
                <label class="form-label">Содержание статьи:</label>
                <textarea class="form-control" rows="6" name="content" placeholder="Содержание..." v-model="text"></textarea>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn" data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Закрыть</span>
              </button>
              <button type="button" class="btn btn-primary ml-1" @click="addText" data-bs-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Добавить</span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Создание статьи</h4>
        </div>

        <div class="card-body">
          <div class="btn-group" role="group">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#default">Добавить тектст</button>
            <button class="btn btn-secondary">Добавить список</button>
            <button class="btn btn-secondary">Добавить голый HTML</button>
            <button class="btn btn-secondary">Добавить изображение</button>
          </div>

          <div v-if="content">
            <p v-for="(value, index) in content" :key="index">
              @{{ value.content }}
            </p>
          </div>
        </div>
      </div>
    </section>-->
  </div>
@endsection
