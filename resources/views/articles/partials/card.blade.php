<article class="shadow hover:shadow-lg dark:shadow-slate-700 relative">
    <img class="w-full" src="{{ $article->image_content }}" alt="Превью статьи с названием «{{ $article->title }}»" loading="lazy">
    <div class="border-x border-b dark:border-slate-800 p-4 flex flex-col gap-2 dark:bg-gray-900">
        <h2 class="sm:text-lg text-base font-bold leading-6">{{ $article->title }}</h2>
        <p class="sm:text-sm text-xs text-gray-500 dark:text-gray-300">{{ $article->lead }}</p>
        <div class="sm:text-xs text-xs flex mt-2 text-gray-400 justify-between">
            <time datetime="{{ $article->published_at->format('Y-m-d') }}">{{ $article->published_at->format('d.m.Y') }}</time>
            <span>{{ $article->author }}</span>
        </div>
    </div>
    <a class="absolute top-0 bottom-0 right-0 left-0" href="{{ route('articles.show', $article->slug) }}" aria-label="Ссылка на статью с названием «{{ $article->title }}»"></a>
</article>
