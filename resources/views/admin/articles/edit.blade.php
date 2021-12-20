@extends('layouts.admin')

@section('title', 'Создать статью')

@section('header')
    <div class="flex items-center justify-between py-2">
        <div class="font-bold">
            <span>Редактировать статью</span>
            <a class="text-indigo-400 font-bold hover:underline" href="{{ route('admin.articles.index') }}">[назад]</a>
        </div>
    </div>
@endsection

@section('content')
    @if($files->isEmpty())
        <div class="flex mt-6 w-full overflow-hidden bg-white rounded-lg shadow">
            <div class="flex items-center justify-center w-12 bg-blue-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
                </svg>
            </div>
            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-blue-500">Информация</span>
                    <p class="text-sm text-gray-600">Файлов нет</p>
                </div>
            </div>
        </div>
    @else
        <div class="flex flex-col mt-6">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ссылка на файл
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Действия
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($files as $file)
                                <tr class="text-gray-900">
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        {{ $file->id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium select-all">
                                        {{ $file->path }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap flex gap-2 justify-center">
                                        <form action="{{ route('admin.files.destroy', $file->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-500 text-white font-semibold py-1 px-2 hover:bg-red-600 rounded text-xs" onclick="return confirm('Вы уверены, что хотите удалить файл?')">
                                                Удалить
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
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
                <form action="{{ route('admin.articles.update', $article->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">
                                    <label for="title" class="block text-sm font-medium text-gray-700">Заголовок:</label>
                                    <input id="title" type="text" name="title" autocomplete="off" required value="{{ $article->title }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6">
                                    <label for="description" class="block text-sm font-medium text-gray-700">Описание статьи:</label>
                                    <textarea id="description" name="description" rows="3" required class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{ $article->description }}</textarea>
                                </div>

                                <div class="col-span-6">
                                    <label for="og_title" class="block text-sm font-medium text-gray-700">Заголовок для соцсетей:</label>
                                    <input id="og_title" type="text" name="og_title" autocomplete="off" required value="{{ $article->og_title }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6">
                                    <label for="og_description" class="block text-sm font-medium text-gray-700">Описание статьи для соцсетей:</label>
                                    <textarea id="og_description" name="og_description" rows="3" required class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{ $article->og_description }}</textarea>
                                </div>

                                <div class="col-span-6">
                                    <label for="preview" class="block text-sm font-medium text-gray-700">Текст из начала статьи:</label>
                                    <textarea id="preview" name="preview" rows="6" required class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{ $article->preview }}</textarea>
                                </div>

                                <div class="col-span-6">
                                    <label for="content" class="block text-sm font-medium text-gray-700">Содержание:</label>
                                    <textarea id="content" name="content" rows="40" required class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{ $article->content }}</textarea>
                                </div>

                                <div class="col-span-6">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="visible" name="visible" type="checkbox" @if($article->visible) checked @endif class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
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
