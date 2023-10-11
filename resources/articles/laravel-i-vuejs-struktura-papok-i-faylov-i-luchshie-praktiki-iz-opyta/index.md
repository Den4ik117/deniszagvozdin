![Главное изображение статьи о подходах к написанию кода на Laravel + VueJS](00_preview.webp)

Я считаю, что лучшая структура папок для Laravel + VueJS такая:

```
resources/
|
|- views/
|    |- admin/
|    |    |- layouts/
|    |    |    |- app.blade.php
|    |    |    |- aside.blade.php
|    |    |    |- header.blade.php
|    |    |
|    |    |- users/
|    |    |    |- partials/
|    |    |    |    |- form.blade.php
|    |    |    |- index.blade.php
|    |    |    |- create.blade.php
|    |    |    |- edit.blade.php
|    |
|    |- articles/
|    |    |- index.blade.php
|    |    |- show.blade.php
|    |
|    |- index.blade.php
|
|- js/
|    |- pages/
|    |    |- login/
|    |    |    |- Login.vue
|    |    |    ...
|    |    |    |- index.js
|    |
|    |- modules/
|    |    |- login-form-module/
|    |    |    |- LoginFormModule.vue
|    |    |    ...
|    |    |    |- index.js
|    |
|    |- components/
|    |    ...
|    |
|    |- ui/
|    |    ...
|    |- app.js
```

## Вступление

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
- `/articles/index.blade.php`
- `index.blade.php`

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

Когда дело доходит до стилей, то к папке `scss` тоже применяется определённая структура файлов.

Вдохновился [этой статьей](https://dev.to/dostonnabotov/a-modern-sass-folder-structure-330f).

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
