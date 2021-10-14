{{--@extends('layouts.app')--}}

{{--@section('header', 'Articles')--}}

{{--@section('content')--}}
{{--  <div class="max-w-7xl mx-auto">--}}
{{--    <a class="block mb-6 underline" href="{{ route('articles.create') }}">Create article</a>--}}

{{--    @if ($articles)--}}
{{--      <table class="w-full border-collapse bg-white shadow-lg">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">ID</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Title</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Slug</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Description</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">OG title</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">OG description</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">User ID</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Content</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Show</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Edit</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Delete</td>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach ($articles as $article)--}}
{{--          <tr>--}}
{{--            <td class="border border-gray-400 p-2 text-center">{{ $article->id }}</td>--}}
{{--            <td class="border border-gray-400 p-2 text-center">{{ $article->title }}</td>--}}
{{--            <td class="border border-gray-400 p-2 text-center">{{ $article->slug }}</td>--}}
{{--            <td class="border border-gray-400 p-2 text-center">{{ $article->description }}</td>--}}
{{--            <td class="border border-gray-400 p-2 text-center">{{ $article->og_title }}</td>--}}
{{--            <td class="border border-gray-400 p-2 text-center">{{ $article->og_description }}</td>--}}
{{--            <td class="border border-gray-400 p-2 text-center">{{ $article->user_id }}</td>--}}
{{--            <td class="border border-gray-400 p-2 text-center">{{ $article->content }}</td>--}}
{{--            <td class="border border-gray-400 p-2 text-center"><a href="{{ route('articles.show', $article->slug) }}">Show</a></td>--}}
{{--            <td class="border border-gray-400 p-2 text-center"><a href="{{ route('articles.edit', $article->id) }}">Edit</a></td>--}}
{{--            <td class="border border-gray-400 p-2 text-center">--}}
{{--              <form action="{{ route('articles.destroy', $article->id) }}" method="POST">--}}
{{--                @csrf--}}
{{--                @method('DELETE')--}}
{{--                <button type="submit" onclick="return confirm('Are you sure to delete this item?')">Delete</button>--}}
{{--              </form>--}}
{{--            </td>--}}
{{--          </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--      </table>--}}
{{--    @endif--}}
{{--  </div>--}}
{{--@endsection--}}
@extends('layouts.master')

@section('title', 'Все статьи')

@section('styles')
  <link rel="stylesheet" href="{{ asset('vendors/simple-datatables/style.css') }}">
@endsection

@section('scripts')
  <script src="{{ asset('vendors/simple-datatables/simple-datatables.js') }}"></script>
  <script>
    let table = document.querySelector('#table');
    let dataTable = new simpleDatatables.DataTable(table, {
      labels: {
        placeholder: "Поиск...",
        perPage: "{select}<label>элементов на странице</label>",
        noRows: "Таблица пуста",
        info: "Показано от {start} до {end} из {rows} (Страница {page} из {pages})",
      },
    });
  </script>
@endsection

@section('content')
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Все статьи</h3>
          <p class="text-subtitle text-muted">Таблица статей</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard') }}">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Все статьи</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="card">
        <div class="card-header">
          Таблица статей
        </div>
        <div class="card-body">
          <table class="table table-striped" id="table">
            <thead>
            <tr>
              <th>ID</th>
              <th>Заголовок</th>
              <th>Ссылка</th>
              <th>Изображение</th>
              <th>Описание</th>
              <th>OG заголовок</th>
              <th>OG описание</th>
              <th>Показать</th>
              <th>Редактировать</th>
              <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
              <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td><a href="{{ route('article', $article->slug) }}">ссылка</a></td>
                <td><a href="{{ $article->image_url }}">изображение</a></td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->og_title }}</td>
                <td>{{ $article->og_description }}</td>
                <td><a class="btn btn-primary btn-sm" href="{{ route('articles.show', $article->id) }}">Показать</a></td>
                <td><a class="btn btn-warning btn-sm" href="{{ route('articles.edit', $article->id) }}">Редактировать</a></td>
                <td>
                  <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">Удалить</button>
                  </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </section>
  </div>
@endsection
