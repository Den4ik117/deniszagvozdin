<!doctype html>
<html class="h-full dark" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пик IT</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>
<body class="antialiased font-sans-manrope text-gray-600 dark:text-gray-200 font-medium bg-gray-100 dark:bg-[#0B1120] h-full">
    <header class=" top-0 left-0 right-0 z-20 bg-gray-900 px-5 py-4 flex items-center justify-between w-full shadow-xl dark:shadow dark:shadow-slate-800">
        <a class="font-sans-russo text-xl text-gray-200" href="{{ route('index') }}">
            <span class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512" fill="none">
                    <g clip-path="url(#clip0_306_12)">
                        <rect width="512" height="512" rx="180" fill="white"/>
                        <rect x="542.129" y="593.542" width="608.294" height="607.282" transform="rotate(-135 542.129 593.542)" fill="url(#paint0_linear_306_12)"/>
                        <rect x="115.847" y="147" width="560.245" height="493.344" transform="rotate(45 115.847 147)" fill="url(#paint1_linear_306_12)"/>
                        <rect x="-308" y="-24.0941" width="401.504" height="435.446" transform="rotate(-45 -308 -24.0941)" fill="url(#paint2_linear_306_12)"/>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_306_12" x1="846.277" y1="593.542" x2="846.277" y2="1200.82" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#38BDF8"/>
                            <stop offset="1" stop-color="#0284C7"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_306_12" x1="395.969" y1="147" x2="395.969" y2="640.344" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FB923C"/>
                            <stop offset="1" stop-color="#EA580C"/>
                        </linearGradient>
                        <linearGradient id="paint2_linear_306_12" x1="-107.248" y1="-24.0941" x2="-107.248" y2="411.351" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#059669"/>
                            <stop offset="1" stop-color="#34D399"/>
                        </linearGradient>
                        <clipPath id="clip0_306_12">
                            <rect width="512" height="512" rx="180" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <span class="mt-1 sm:block hidden">Denis Zagvozdin</span>
            </span>
        </a>
        <nav class="flex items-center gap-4">
            <ul class="flex items-center gap-2 px-1 rounded bg-gray-800">
                <li>
                    <a class="flex items-center justify-center bg-gray-800 p-2 fill-gray-400 hover:fill-gray-200" href="https://github.com/Den4ik117" target="_blank">
                        <svg enable-background="new 0 0 32 32" height="20" width="20" id="Layer_1" version="1.0"
                             viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        >
                            <path clip-rule="evenodd" d="M16.003,0C7.17,0,0.008,7.162,0.008,15.997  c0,7.067,4.582,13.063,10.94,15.179c0.8,0.146,1.052-0.328,1.052-0.752c0-0.38,0.008-1.442,0-2.777  c-4.449,0.967-5.371-2.107-5.371-2.107c-0.727-1.848-1.775-2.34-1.775-2.34c-1.452-0.992,0.109-0.973,0.109-0.973  c1.605,0.113,2.451,1.649,2.451,1.649c1.427,2.443,3.743,1.737,4.654,1.329c0.146-1.034,0.56-1.739,1.017-2.139  c-3.552-0.404-7.286-1.776-7.286-7.906c0-1.747,0.623-3.174,1.646-4.292C7.28,10.464,6.73,8.837,7.602,6.634  c0,0,1.343-0.43,4.398,1.641c1.276-0.355,2.645-0.532,4.005-0.538c1.359,0.006,2.727,0.183,4.005,0.538  c3.055-2.07,4.396-1.641,4.396-1.641c0.872,2.203,0.323,3.83,0.159,4.234c1.023,1.118,1.644,2.545,1.644,4.292  c0,6.146-3.74,7.498-7.304,7.893C19.479,23.548,20,24.508,20,26c0,2,0,3.902,0,4.428c0,0.428,0.258,0.901,1.07,0.746  C27.422,29.055,32,23.062,32,15.997C32,7.162,24.838,0,16.003,0z" fill-rule="evenodd"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="flex items-center justify-center bg-gray-800 p-2 fill-gray-400 hover:fill-gray-200" href="https://t.me/denchik1170" target="_blank">
                        <svg viewBox="0 0 448 512" height="20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="flex items-center justify-center bg-gray-800 p-2 fill-gray-400 hover:fill-gray-200" href="https://vk.com/public216979635" target="_blank">
                        <svg viewBox="0 0 576 512" height="20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"/>
                        </svg>
                    </a>
                </li>
            </ul>
            <span class="w-px h-6 bg-gray-700"></span>
            <button id="mode-switcher" class="flex items-center justify-center rounded bg-gray-800 hover:bg-gray-700 stroke-gray-400 hover:stroke-gray-200 p-2">
                <svg height="20" width="20" stroke-linecap="round"
                     stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="5" fill="transparent"/>
                    <line x1="12" x2="12" y1="1" y2="3"/>
                    <line x1="12" x2="12" y1="21" y2="23"/>
                    <line x1="4.22" x2="5.64" y1="4.22" y2="5.64"/>
                    <line x1="18.36" x2="19.78" y1="18.36" y2="19.78"/>
                    <line x1="1" x2="3" y1="12" y2="12"/>
                    <line x1="21" x2="23" y1="12" y2="12"/>
                    <line x1="4.22" x2="5.64" y1="19.78" y2="18.36"/>
                    <line x1="18.36" x2="19.78" y1="5.64" y2="4.22"/>
                </svg>
            </button>
        </nav>
    </header>

    <main class="min-h-full">
        <div class="max-w-prose mx-auto rounded py-10 px-4">
            <div class="flex flex-col gap-6">
                <div class="text-sm">
                    <a class="hover:underline" href="{{ route('index') }}">Главная</a>
                    <span class="px-1 select-none">»</span>
                    <a class="hover:underline" href="{{ route('articles.index') }}">Блог</a>
                    <span class="px-1 select-none">»</span>
                    <span class="">{{ $article->title }}</span>
                </div>
                <div class="flex flex-col gap-1">
                    <small>Автор: {{ $article->author }}</small>
                    <small>Дата публикации: {{ $article->published_at->format('d.m.Y') }}</small>
                </div>
                <article class="prose mx-auto dark:prose-invert">
                    @include("articles::$article->slug.index")
                </article>
            </div>
        </div>
    </main>

    @vite('resources/ts/app.ts')
</body>
</html>
