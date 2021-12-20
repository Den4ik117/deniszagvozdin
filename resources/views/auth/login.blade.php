@extends('layouts.app')

@section('header')
  <div class="flex items-center justify-between py-2">
    <div class="font-bold">
      <span>Авторизация</span>
      @if (Route::has('password.request'))
        <a class="text-indigo-400 font-bold hover:underline" href="{{ route('password.request') }}">[восстановить пароль]</a>
      @endif
    </div>
    <a class="create-btn bg-green-500 text-white font-semibold py-1 px-2 hover:bg-green-600 rounded text-sm" href="{{ route('register') }}">
      <span class="block sm:hidden">＋</span>
      <span class="hidden sm:block">Зарегистрироваться</span>
    </a>
  </div>
@endsection

@section('content')
  <div class="mt-6">
    <div class="md:grid md:grid-cols-4 md:gap-6">
      <div class="mt-5 md:mt-0 md:col-span-4">
        <form action="{{ route('login') }}" method="POST">
          @csrf

          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
  
                <div class="col-span-6 sm:col-span-3">
                  <label class="block text-sm font-medium text-gray-700" for="email">Почта:</label>
                  <input id="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="email" name="email" autocomplete="email" value="{{ old('email') }}" autofocus required>
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label class="block text-sm font-medium text-gray-700" for="password">Пароль:</label>
                  <input id="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="password" name="password" autocomplete="current-password" required>
                </div>

                <div class="col-span-6">
                  <div class="flex items-center">
                    <input id="remember" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" name="remember" type="checkbox">
                    <label class="ml-2 block text-sm font-medium text-gray-700 select-none" for="remember">Запомнить меня</label>
                  </div>
                </div>

              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-1 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Авторизоваться
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection