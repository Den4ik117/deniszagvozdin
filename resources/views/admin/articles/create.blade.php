@extends('layouts.admin')

@section('title', 'Создать статью')

@section('header')
    <div class="flex items-center justify-between py-2">
        <div class="font-bold">
            <span>Создать статью</span>
            <a class="text-indigo-400 font-bold hover:underline" href="{{ route('admin.articles.index') }}">[назад]</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="mt-6">
        <div class="md:grid md:grid-cols-4 md:gap-6">
            {{-- <div class="md:col-span-1">
              <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                  Use a permanent address where you can receive mail.
                </p>
              </div>
            </div> --}}
            <div class="mt-5 md:mt-0 md:col-span-4">
                <form action="{{ route('admin.articles.store') }}" method="POST">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">
                                    <label for="title" class="block text-sm font-medium text-gray-700">Заголовок:</label>
                                    <input id="title" type="text" name="title" autocomplete="off" required value="{{ old('title') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6">
                                    <label for="description" class="block text-sm font-medium text-gray-700">Описание статьи:</label>
                                    <textarea id="description" name="description" rows="3" required class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{ old('description') }}</textarea>
                                </div>

                                <div class="col-span-6">
                                    <label for="og_title" class="block text-sm font-medium text-gray-700">Заголовок для соцсетей:</label>
                                    <input id="og_title" type="text" name="og_title" autocomplete="off" required value="{{ old('og_title') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6">
                                    <label for="og_description" class="block text-sm font-medium text-gray-700">Описание статьи для соцсетей:</label>
                                    <textarea id="og_description" name="og_description" rows="3" required class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{ old('og_description') }}</textarea>
                                </div>

                                <div class="col-span-6">
                                    <label for="preview" class="block text-sm font-medium text-gray-700">Текст из начала статьи:</label>
                                    <textarea id="preview" name="preview" rows="6" required class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{ old('preview') }}</textarea>
                                </div>

                                <div class="col-span-6">
                                    <label for="content_md" class="block text-sm font-medium text-gray-700">Содержание:</label>
                                    <textarea id="content_md" name="content_md" rows="9" required class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{ old('content_md') }}</textarea>
                                </div>

                                <div class="col-span-6">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="visible" name="visible" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm select-none">
                                            <label for="visible" class="font-medium text-gray-700">Статья видна пользователям сайта</label>
                                        </div>
                                    </div>
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
