![Главное изображение статьи о подходах к написанию кода на Laravel + VueJS](00_preview.webp)

Ежедневная работа над большими и сложными проектами подталкивает меня улучшать практики написания кода,
работать над его масшабируемостью.

Эта статья про архитектурные методологии для связки Laravel + VueJS, которая применима и для связки Laravel + React.

## С чего всё началось

В интернете много обучающего контента по Laravel и по VueJS (да вообще по всему),
но чаще всего авторы материалов показывают простые примеры, далёкие от реальных проектов, где всё устроено немного
сложнее.

В начале пути я повторял за ними: писал проекты так же. Но очень быстро такие проекты становилось сложно поддерживать,
сложно вносить правки и рефакторить.

Я использую Laravel на бекэнде и VueJS на фронтэнде, поэтому в сети начал искать, как мне структурировать проект и какие
архитектурные методологии есть на этот счёт. Ничего не нашёл. Везде показывали только простые примеры, которые только
иллюстрировали возможности ЯП/библиотеки/фреймворка.

Начался путь проб и ошибок.

## К содержанию

Важно: это не микросервисная архитектура, это _монолит_.

Здесь я использую в качестве основного шаблонизатора Blade, встроенный в Laravel из коробки. VueJS задействуется тогда,
когда страничкам сайта необходимо придать живости и интерактивности.

Шаблоны VueJS получают данные в 80% случаев из `props`, и лишь в 20% случаев мы пишем API.

## Если коротко

### Frontend

На фронтэнде модульная архитектура. Структура папки `resources/js`:

- `/pages`
- `/modules`
- `/components`
- `/ui`
- `/app.js`

Принципы:

1. `app.js` — точка входа;
2. Компоненты внутри папки не могут использовать другие компоненты;
3. Чтобы связать 2 компонента, нужно обратиться на слой `modules`;
4. Чтобы связать 2 модуля, нужно обратиться на слой `pages`;
5. Однонаправленный поток данных;
6. Используем синтаксис ES6 на максимум;
7. Компоненты и модули можно использовать в Blade-шаблонах.

### Backend

На бекэнде архитектура, которой я вдохновился у [Макса Орлова](https://www.youtube.com/@onecode_blog).
Пример структуры папки `resources/views`:

- `/admin/users/partials/form.blade.php`
- `/admin/users/index.blade.php`
- `/admin/users/create.blade.php`
- `/admin/users/edit.blade.php`
- `/tasks/index.blade.php`
- `index.blade.php`

```
views/
|
|- admin/
|    |- users/
|    |    |- partials/
|    |    |    |- form.blade.php
|    |    |- index.blade.php
|    |    |- create.blade.php
|    |    |- edit.blade.php
|
|- tasks/
|    |- index.blade.php
|    |- create.blade.php
|    |- edit.blade.php
|
|- index.blade.php
```

Routing для страниц:

- `Route::get('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.index')`
- `Route::get('/admin/users/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.users.create')`
- `Route::post('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.users.store')`
- `Route::put('/admin/users/{user}/edit', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.users.edit')`
- `Route::put('/admin/users/{user}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.users.store')`
- `Route::delete('/admin/users/{user}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.users.destroy')`
- `Route::get('/tasks', [\App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index')`
- `Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index')`

Принципы:

1. Используем REST-подход на максимум: `POST`, `PUT`, `PATCH`, `DELETE`;
2. `index.blade.php` — главная страница сущности;
3. `create.blade.php` — страница создания сущности;
4. `edit.blade.php` — страница редактирования сущности.

### Стили

Вдохновлён [статьёй](https://dev.to/dostonnabotov/a-modern-sass-folder-structure-330f).

Структура `resources/scss`:

- `/abstracts`
- `/base`
- `/utilities`
- `/components`
- `/layout`
- `/pages`
- `/themes`
- `/vendors`
- `/app.scss`

На конкретном примере станет понятнее. [Исходный код](https://github.com/Den4ik117/laravel-vue-architectural-methodologies).

## Проект по шагам

### Перед установкой

Мы напишем ToDo-лист с админкой и простой регистрацией. Цель не показать, как писать код, а цель — показать как его
структурировать, чтобы получить на выходе масштабируемое приложение.

В качестве сборки статики мы будем использовать Vite.

Бонусом я показываю пример структурирования sass/scss-кода, поэтому установка `sass` — необязательна.

### Процесс установки проекта

1. `composer create-project laravel/laravel laravel-vue-architectural-methodologies`
2. `cd laravel-vue-architectural-methodologies`
3. Создаём базу данных, данные для входа пишем в `.env`
4. `npm install`
5. `npm install -D sass vue @vitejs/plugin-vue`

### Настройка

1. `php artisan make:controller IndexController`
2. В файле `routes/web.php`:

```php
Route::get('/', [IndexController::class, 'index'])->name('index');
```

3. Файл `app/Http/Controllers/IndexController`:

```php
<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
```

4. Подготовим layout для страниц (папка `resources/views/layouts`), `resources/views/layouts/app.blade.php`:

```html
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    @yield('head')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="wrapper app" v-cloak>
    @include('layouts.header')

    @include('layouts.aside')

    @yield('content')

    @include('layouts.footer')
</div>

@stack('scripts')
</body>
</html>
```

5. Подготовим всё для работы с VueJS, `resources/js/app.js`:

```js
import { createApp } from 'vue/dist/vue.esm-bundler';

const app = createApp({
    components: {},
});

document.querySelector('.app') && app.mount('.app');

```

6. Подготовим всё для стилизации (см. папку `resources/scss`), `resources/scss/app.scss`:

```scss
@use './abstracts';
@use './base';
@use './components';
@use './layout';
@use './vendors';
@use './utilities';
@use './pages';
```

