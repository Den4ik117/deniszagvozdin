<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Denis Zagvozdin | Панель администратора</title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link href="/css/dashboard.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/icofont.min.css">
</head>
<body class="min-h-screen bg-gray-100">
  <header class="border-b border-gray-100 bg-white">
    <div class="max-w-7xl mx-auto">
      <div class="flex justify-between items-center h-16 ">
        <div class="flex items-center text-sm text-gray-900">
          <a href="">
            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="block h-9 w-auto">
              <path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#6875F5"></path>
              <path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#6875F5"></path>
            </svg>
          </a>
          <a class="flex items-center ml-8 h-16 border-b-2 border-indigo-400 px-1" href="#">Dashboard</a>
        </div>
        <div>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            
            <button class="text-gray-500 text-sm p-1 hover:text-gray-700 border-transparent focus:outline-none" type="submit">Выйти</button>
          </form>
        </div>
      </div>
    </div>
  </header>

  <section class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </div>
  </section>

  <main class="py-12">
    <div class="max-w-7xl mx-auto">
      <div class="bg-white shadow-xl rounded-lg">
        <div class="p-6">Привет! Поздравляем тебя с регистрацией. Так будет выглядеть панель администратора. К сожалению, так как ты только зарегистрировался, тебе не доступны никакие функции, поэтому, если вы тут неспроста, ждите, пока администратор выдаст вам роль.</div>
      </div>
    </div>
  </main>
</body>
</html>