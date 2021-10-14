{{--@extends('layouts.app')--}}

{{--@section('header', 'Dashboard')--}}

{{--@section('content')--}}
{{--  <div class="max-w-7xl mx-auto">--}}
{{--    @if ($messages)--}}
{{--      <table class="w-full border-collapse bg-white shadow-lg">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Имя</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Почта</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Тема</td>--}}
{{--          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Сообщение</td>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach ($messages as $message)--}}
{{--          <tr>--}}
{{--            <td class="border border-gray-400 p-2 text-center">{{ $message->name }}</td>--}}
{{--            <td class="border border-gray-400 p-2 text-center">{{ $message->email }}</td>--}}
{{--            <td class="border border-gray-400 p-2 text-center">{{ $subjects[$message->subject] }}</td>--}}
{{--            <td class="border border-gray-400 p-2 text-center">{{ $message->message }}</td>--}}
{{--          </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--      </table>--}}
{{--    @endif--}}
{{--  </div>--}}
{{--@endsection--}}
@extends('layouts.master')

@section('title', 'Главная')

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
          <h3>Главная</h3>
          <p class="text-subtitle text-muted">Таблица оставленных заявок</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Главная</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="card">
        <div class="card-header">
          Таблица заявок
        </div>
        <div class="card-body">
          <table class="table table-striped" id="table">
            <thead>
            <tr>
              <th>Имя</th>
              <th>Почта</th>
              <th>Тема</th>
              <th>Сообщение</th>
              <th>Дата</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
              <tr>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $subjects[$message->subject] }}</td>
                <td>{{ $message->message }}</td>
                <td>{{ $message->created_at->format('d.m.Y H:m:s') }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </section>
  </div>
@endsection
