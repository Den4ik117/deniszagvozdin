@extends('layouts.app')

@section('header', 'Dashboard')

@section('content')
  <div class="max-w-7xl mx-auto">
    @if ($messages)
      <table class="w-full border-collapse bg-white shadow-lg">
        <thead>
        <tr>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Имя</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Почта</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Тема</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Сообщение</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($messages as $message)
          <tr>
            <td class="border border-gray-400 p-2 text-center">{{ $message->name }}</td>
            <td class="border border-gray-400 p-2 text-center">{{ $message->email }}</td>
            <td class="border border-gray-400 p-2 text-center">{{ $subjects[$message->subject] }}</td>
            <td class="border border-gray-400 p-2 text-center">{{ $message->message }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    @endif
  </div>
@endsection
