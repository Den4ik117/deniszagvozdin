@extends('layouts.admin')

@section('title', 'Создать файл')

@section('header')
    <div class="flex items-center justify-between py-2">
        <div class="font-bold">
            <span>Создать файл</span>
            <a class="text-indigo-400 font-bold hover:underline" href="{{ route('admin.files.index') }}">[назад]</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="mt-6">
        <div class="md:grid md:grid-cols-4 md:gap-6">
            <div class="mt-5 md:mt-0 md:col-span-4">
                <form action="{{ route('admin.files.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">
                                    <label for="article_id" class="block text-sm font-medium text-gray-700">Статья:</label>
                                    <select id="article_id" name="article_id" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach($articles as $article)
                                            <option value="{{ $article->id }}">{{ $article->id }} – {{ $article->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6">
                                    <label for="file" class="block text-sm font-medium text-gray-700">Файл:</label>
                                    <input id="file" type="file" name="file" required class="mt-1 block w-full text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-1 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Сохранить
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
