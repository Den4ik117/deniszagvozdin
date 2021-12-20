<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Design Project</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 overflow-x-hidden">
  <header class="bg-white border-b border-gray-100">
    <div class="max-w-screen-lg mx-auto px-4">
      <div class="flex justify-between items-center py-2">
        <div class="flex items-center gap-2">
          <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-r from-indigo-300 to-purple-400">
            <span class="text-white font-bold select-none">
              @auth
                DV
              @endauth

              @guest
                A
              @endguest
            </span>
          </div>
          <span class="hidden sm:block font-semibold">
            @auth
              Dmitry Vinogradov  
            @endauth
          </span>
        </div>
        <div class="burger-menu">
          <span></span>
        </div>
      </div>

      <nav class="menu py-2">
        <ul class="flex flex-col gap-1">
          @auth
            <li><a class="block px-3 py-2 rounded-md font-medium hover:bg-gray-100" href="#">Main</a></li>
            <li><a class="block px-3 py-2 rounded-md font-medium hover:bg-gray-100" href="#">About</a></li>
            <li><a class="block px-3 py-2 rounded-md font-medium hover:bg-gray-100" href="#">Some more</a></li>
          @endauth

          @guest
            <li><a class="block px-3 py-2 rounded-md font-medium hover:bg-gray-100 @if(Route::is('login')) underline @endif" href="{{ route('login') }}">Авторизация</a></li>
            <li><a class="block px-3 py-2 rounded-md font-medium hover:bg-gray-100 @if(Route::is('register')) underline @endif" href="{{ route('register') }}">Регистрация</a></li>
          @endguest
        </ul>
      </nav>
    </div>
  </header>

  <section class="bg-white shadow">
    <div class="max-w-screen-lg mx-auto px-4">
      @yield('header')
    </div>
  </section>

  <main>
    <div class="max-w-screen-lg mx-auto px-4 pb-4">

      @if (session()->has('success'))
        <div class="flex mt-6 w-full overflow-hidden bg-white rounded-lg shadow">
          <div class="flex items-center justify-center w-12 bg-green-500">
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
              <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
            </svg>
          </div>
          
          <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
              <span class="font-semibold text-green-500">Успех</span>
              <p class="text-sm text-gray-600">{{ session('success') }}</p>
            </div>
          </div>
        </div>
      @endif

      @if ($errors->any())
        <div class="flex mt-6 w-full overflow-hidden bg-white rounded-lg shadow">
          <div class="flex items-center justify-center w-12 bg-red-500">
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
              <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"/>
            </svg>
          </div>
          
          <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
              <span class="font-semibold text-red-500">Ошибка</span>
              <ol class="text-sm text-gray-600 list-inside list-decimal">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ol>
            </div>
          </div>
        </div>
      @endif

      @yield('content')
    </div>
  </main>

  <script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts', '')
</body>
</html>