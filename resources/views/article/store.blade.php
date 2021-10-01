@extends('layouts.app')

@section('header', 'Store article')

@section('content')
  <div class="max-w-7xl mx-auto">
    <div class="bg-white p-4 border rounded">
      <form action="{{ route('articles.store') }}" method="POST">
        @csrf

        <div>
          <x-label for="title">Название статьи:</x-label>
          <x-input id="title" class="block mt-1 w-full" type="text" name="title"/>
        </div>

        <div class="mt-4">
          <x-label for="description">Описание статьи:</x-label>
          <x-input id="description" class="block mt-1 w-full" type="text" name="description"/>
        </div>

        <div class="mt-4">
          <x-label for="og_title">Open Graph заголовок статьи:</x-label>
          <x-input id="og_title" class="block mt-1 w-full" type="text" name="og_title"/>
        </div>

        <div class="mt-4">
          <x-label for="og_description">Open Graph описание статьи:</x-label>
          <x-input id="og_description" class="block mt-1 w-full" type="text" name="og_description"/>
        </div>

        <div class="mt-4">
          <x-label for="content">Содержание статьи:</x-label>
          <textarea id="content" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 resize-none" name="content" cols="30" rows="10"></textarea>
        </div>

        <div class="mt-4 text-right">
          <x-button>{{ __('Store article') }}</x-button>
        </div>
      </form>
    </div>
  </div>
@endsection
