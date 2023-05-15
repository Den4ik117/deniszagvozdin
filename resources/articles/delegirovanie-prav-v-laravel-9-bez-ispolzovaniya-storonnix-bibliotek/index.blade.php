<p>
    <img src="{{ Vite::asset('resources/articles/delegirovanie-prav-v-laravel-9-bez-ispolzovaniya-storonnix-bibliotek/01_preview.jpg') }}" alt="preview.jpg">
</p>

<h2>Вступление</h2>

<p>
    На практике часто стоит задача реализовать делегирование прав в проекте на Laravel, когда есть личный кабинет или панель администратора. Также есть несколько ролей; каждая роль имеет свои права и разрешения. Типичная задача ― реализовать личный кабинет с четырьмя ролями:
</p>

<ol>
    <li>администратор,</li>
    <li>менеджер,</li>
    <li>сотрудник,</li>
    <li>пользователь.</li>
</ol>

<p>
    Здесь подразумевается, что администратор наделен всеми правами; менеджер может уже чуть меньше ― в его компетенцию входит следить за сотрудниками и данными, которые они вносят; сотрудники могут видеть и изменять только свои посты, данные, которые ввели другие сотрудники они не видят; пользователь ― только что зарегистрировавшийся человек, не наделенный никакими правами доступа к личному кабинету.
</p>

<p>
    Laravel идеально подходит для создания гибких веб-приложений: панелей администратора, систем управления сайтом, личных кабинетов. Фреймворк нас никак не ограничивает ― здесь мы можем творить что угодно, а большинство необходимых инструментов идут уже “из коробки”.
</p>

<h2>Описание задачи</h2>

<p>
    Долгое время я пользовался библиотекой laravel-permissions от Spatie, не зная о том, что задачу можно решить, используя чистый Laravel. Я говорю о гейтах и политиках, которые позволяют лаконично и просто решить задачу, описанную выше.
    Чтобы объяснить принцип работы гейтов и политик, давайте рассмотрим другой пример. Есть блог, в блоге ― личный кабинет, где
</p>

<ol>
    <li>любой пользователь может создавать и изменять свои посты, но не удалять их;</li>
    <li>модератор видит все посты, может изменять или удалять их;</li>
    <li>администратор имеет все привилегии, кроме того назначает модераторов.</li>
</ol>

<h2>Требования к установке</h2>

<p>
    Это простой проект на Laravel 9 **с изначально установленной Breeze**, для того чтобы у нас сразу был функционал авторизации и личный кабинет. Данная статья предполагает, что у вас уже имеются начальные знания Laravel.
</p>

<h2>Создаем простой блог с делегированием прав</h2>

<p>Далее я выполняю команду `php artisan make:model Post -mf --policy`. Мы создадим одновременно модель, миграцию, фабрику и политику. Далее выполним команду `php artisan make:controller PostController --model=Post`, чтобы создать ресурсный контроллер. Первое, что мы делаем ― редактируем миграции:</p>

<pre><code>{{ `// <timestamp>_create_posts_table.php
public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id');
        $table->string('title');
        $table->string('slug');
        $table->text('content');
        $table->timestamps();
    });
}

 // <timestamp>_create_users_table.php
public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->string('role');
        $table->rememberToken();
        $table->timestamps();
    });
}` }}</code></pre>

<p>
    Создаем таблицу постов, которая будет содержать название поста, slug, содержание, и будет ссылаться на пользователя, который создал пост. Второе, что мы делаем, ― изменяем модель пользователя:
</p>

<pre><code>{{ `class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public const ADMIN = 'admin';
    public const MODERATOR = 'moderator';
    public const USER = 'user';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function isAdmin(): bool
    {
        return $this->role === User::ADMIN;
    }

    public function isModerator(): bool
    {
        return $this->role === User::MODERATOR;
    }

    public function isUser(): bool
    {
        return $this->role === User::USER;
    }
}` }}</code></pre>

<p>
    В модели пользователя мы определяем в константу роли, которые будут в проекте, и для каждой роли создаём метод, проверяющий, есть ли данная роль у пользователя.  И в методе `posts` определяем отношение один ко многим, чтобы в дальнейшем мы могли этим методом воспользоваться. Следующее ― редактируем фабрики для создания пользователей с одной из трёх ролей и создания постов:
</p>

<pre><code>{{ `// UserFactory.php
public function definition()
{
    return [
        'name' => $this->faker->name(),
        'email' => $this->faker->unique()->safeEmail(),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'role' => $this->faker->randomElement([User::ADMIN, User::MODERATOR, User::USER]),
    ];
}

// PostFactory.php
public function definition()
{
    $title = $this->faker->text(200);

    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'content' => $this->faker->sentences(10)
    ];
}` }}</code></pre>

<p>И отредактируем `DatabaseSeeder`:</p>

<pre><code>{{ `// DatabaseSeeder.php

public function run()
{
     User::factory(10)->create()->each(function ($user) {
         $user->posts()->saveMany(Post::factory(4)->make());
     });
}` }}</code></pre>

<p>
    Пользователей и посты для простоты мы генерируем через фабрики. Таким образом у нас есть 10 пользователей с одной из трех ролей и у каждого пользователя есть еще по 4 поста. В каталоге `resources/views/posts` создадим 3 файла:
</p>

<ol>
    <li>`index.blade.php` ― страница со всеми статьями</li>
    <li>`create.blade.php` ― страница для создания поста</li>
    <li>`edit.blade.php` ― страница для редактирования поста</li>
</ol>

<p>
    <strong>
        Примечание. В этом же каталоге можно создать 4-й файл ― `show.blade.php`, чтобы любые пользователи могли читать пост. В этом уроке делается акцент именно на политику, а показы, создание и изменения постов опускается.
    </strong>
</p>

<p>
    Отредактируем маршруты:
</p>

<pre><code>{{ `<?php
// web.php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('posts', PostController::class);
});

require __DIR__.'/auth.php';` }}</code></pre>

<p>Далее идем в <code>AuthServiceProvider</code>:</p>

<pre><code>{{ `class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
         'App\Models\Post' => 'App\Policies\PostPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function (User $user) {
            if ($user->isAdmin())
                return true;
        });
    }
}` }}</code></pre>

<p>Здесь в `protected` поле мы регистрируем нашу политику, которую отредактируем ниже, а в методе `boot` делаем проверку на то, что пользователь является администратором. Если пользователь является администратором, то ему доступны любые возможности, что бы мы не добавили в дальнейшем в политики. В конструкторе контроллера регистрируем политику, чтобы все методы были защищены ею:</p>

<pre><code>{{ `class PostController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Post::class);
    }

    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        //...
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        //...
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index');
    }
}` }}</code></pre>

<p>Самое интересное ― политика:</p>

<pre><code>{{ `class PostPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Post $post)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Post $post)
    {
        return $user->id === $post->user_id || $user->isModerator();
    }

    public function delete(User $user, Post $post)
    {
        return $user->isModerator();
    }

    public function restore(User $user, Post $post)
    {
        return false;
    }

    public function forceDelete(User $user, Post $post)
    {
        return false;
    }
}` }}</code></pre>

<p>В политиках могут быть какие угодно условия, что делает приложение очень гибким к настройке. Здесь мы видим, что изменять содержимое может либо хозяин поста, либо модератор, а удалять пост может только модератор. Каждый метод в политике соответствует определённому методу в ресурсном контроллере:</p>

<table>
    <thead>
    <tr>
        <th>Метод контроллера</th>
        <th>Метод политики</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>index</td>
        <td>viewAny</td>
    </tr>
    <tr>
        <td>show</td>
        <td>view</td>
    </tr>
    <tr>
        <td>create</td>
        <td>create</td>
    </tr>
    <tr>
        <td>store</td>
        <td>create</td>
    </tr>
    <tr>
        <td>edit</td>
        <td>update</td>
    </tr>
    <tr>
        <td>update</td>
        <td>update</td>
    </tr>
    <tr>
        <td>destroy</td>
        <td>delete</td>
    </tr>
    </tbody>
</table>

<p>В Blade шаблонах можно использовать директиву `@can`, что делать проверки:</p>

<pre><code>{{ <<<END
// index.blade.php
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Посты') }}
        </h2>
        </x-slot>

        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4 font-bold">Роль: {{ auth()->user()->role }}</div>
                    @foreach($posts as $post)
                        @can('view', $post)
                            <details class="mb-4">
                                <summary>{{ $post->title }}</summary>

                                @can('update', $post)
                                    <a class="bg-yellow-400" href="{{ route('posts.edit', $post->id) }}">Редактировать</a>
                                @endcan

                                @can('delete', $post)
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-400" type="submit">Удалить</button>
                                    </form>
                                @endcan
                            </details>
                        @endcan
                    @endforeach
                </div>
            </div>
        </div>
    </div>
        </x-app-layout>

        // create.blade.php
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Создать пост') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Создание поста
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

// edit.blade.php
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Редактировать пост') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Редактирование поста
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
END }}</code></pre>


<p>
    Получилось! То, что видит администратор и модератор, в данном случае не отличается:
</p>

<p>
    <img src="{{ Vite::asset('resources/articles/delegirovanie-prav-v-laravel-9-bez-ispolzovaniya-storonnix-bibliotek/02_result_1.png') }}" alt="02_result_1.png">
</p>

<p>
    А пользователь хоть и видит все посты, однако не может их удалять, а редактировать способен только свои посты:
</p>

<p>
    <img src="{{ Vite::asset('resources/articles/delegirovanie-prav-v-laravel-9-bez-ispolzovaniya-storonnix-bibliotek/03_result_02.png') }}" alt="03_result_02.png">
</p>

<h2>Заключение</h2>

<p>
    Это часто встречающая задача на примере блога. Здесь огромный потенциал для расширения и улучшения политики. Например, мы может проверять, опубликована ли статья или находится ещё на редакции; функционал выдачи ролей; проверка, не заблокирован ли пользователь и тд. При том администратору при добавлении любого нового функционала благодаря проверке в провайдере будут доступы любые возможности!
</p>
