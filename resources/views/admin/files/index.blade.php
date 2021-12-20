@extends('layouts.admin')

@section('title', 'Файлы')

@section('header')
    <div class="flex items-center justify-between py-2">
        <div class="font-bold">
            <span>Файлы</span>
        </div>
        <a class="create-btn bg-green-500 text-white font-semibold py-1 px-2 hover:bg-green-600 rounded text-sm" href="{{ route('admin.files.create') }}">
            <span class="block sm:hidden">＋</span>
            <span class="hidden sm:block">Создать</span>
        </a>
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
                                    ID статьи
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
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        {{ $file->article_id }}
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
@endsection
