@extends('layouts.app')

@section('header')
  <div class="flex items-center justify-between py-2">
    <div class="font-bold">
      <span>Подтверждение почты</span>
    </div>
    <a class="create-btn bg-green-500 text-white font-semibold py-1 px-2 hover:bg-green-600 rounded text-sm" href="{{ route('logout') }}">
      <span class="block sm:hidden">→</span>
      <span class="hidden sm:block">Выйти</span>
    </a>
  </div>
@endsection

@section('content')

  @if (session('status') == 'verification-link-sent')
    <div class="flex mt-6 w-full overflow-hidden bg-white rounded-lg shadow">
      <div class="flex items-center justify-center w-12 bg-green-500">
        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
          <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
        </svg>
      </div>
      
      <div class="px-4 py-2 -mx-3">
        <div class="mx-3">
          <span class="font-semibold text-green-500">Успех</span>
          <p class="text-sm text-gray-600">Ссылка подтверждения почты была успешно отправлена!</p>
        </div>
      </div>
    </div>
  @endif

  <div class="mt-6">
    <div class="md:grid md:grid-cols-4 md:gap-6">
      <div class="mt-5 md:mt-0 md:col-span-4">
        <form action="{{ route('verification.send') }}" method="POST">
          @csrf

          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div>
                <p>Вы успешно зарегистрировались, остался последний шаг — подтвердить свою почту.</p>
                <p>Письмо уже было отправлено на вашу почту, но, если письмо не пришло, вы можете его отправить ещё раз.</p>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-1 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Отправить письмо с подтверждением почты ещё раз
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection