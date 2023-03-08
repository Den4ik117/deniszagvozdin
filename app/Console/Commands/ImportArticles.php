<?php

namespace App\Console\Commands;

use App\Models\NewArticle;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\Attributes\AttributesExtension;
use SimpleXMLElement;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\Table\TableExtension;
use League\CommonMark\Extension\CommonMark\Node\Block\FencedCode;
use League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode;
use League\CommonMark\MarkdownConverter;
use League\CommonMark\GithubFlavoredMarkdownConverter;
use Spatie\CommonMarkHighlighter\FencedCodeRenderer;
use Spatie\CommonMarkHighlighter\IndentedCodeRenderer;

class ImportArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:articles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command import articles from markdown';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $directory = resource_path('articles');
        $scanned_directory = array_diff(scandir($directory), array('..', '.'));
//        $images = [];
        $files = \App\Models\File::all();
        if ($files->isNotEmpty()) {
            $files->toQuery()->delete();
            Storage::deleteDirectory('files');
        }
        $articles = NewArticle::all();
        if ($articles->isNotEmpty()) {
            $articles->toQuery()->delete();
        }

        foreach ($scanned_directory as $dir) {
            $content = file_get_contents(resource_path('articles/' . $dir . '/index.md'));

            $object = YamlFrontMatter::parse($content);

            $environment = new Environment();
            $environment->addExtension(new CommonMarkCoreExtension());
            $environment->addExtension(new TableExtension());
            $environment->addRenderer(FencedCode::class, new FencedCodeRenderer());
            $environment->addRenderer(IndentedCode::class, new IndentedCodeRenderer());

            $markdownConverter = new MarkdownConverter($environment);

            $article = NewArticle::query()->create([
                'slug' => $dir,
                'title' => $object->matter('title'),
                'author' => $object->matter('author'),
                'description' => $object->matter('description'),
                'lead' => $object->matter('lead', $object->matter('description')),
//                'og_title' => $object->matter('title'),
//                'og_description' => 'des',
//                'preview' => 'test',
                'content' => $markdownConverter->convert($object->body())->getContent(),
                'visible' => $object->matter('visible', true),
                'priority' => $object->matter('priority', 0),
                'published_at' => Carbon::createFromTimestamp($object->matter('published')),
            ]);

//            $this->info($object->matter('other'));

            $director = resource_path('articles/' . $dir);
            $scanned_images = array_diff(scandir($director), array('..', '.', 'index.md'));

            foreach ($scanned_images as $image_name) {
                $path = '/' . Storage::putFile('/files', new File(resource_path('articles/' . $dir . '/' . $image_name)));

                $article->files()->create([
                    'path' => $path,
                    'origin_name' => $image_name,
                ]);

                $article->content = str_replace("src=\"$image_name\"", "src=\"$path\"", $article->content);

//                $images[] = $path;
            }

            $article->save();
        }

        $this->info('Success!');

        $articleLinks = [];

        $articles = NewArticle::query()->where('visible', true)->get();

        foreach ($articles as $article) {
            $url = route('articles.show', $article->slug);
            $articleLinks[] = <<<EOF
                <url>
                    <loc>{$url}</loc>
                    <lastmod>{$article->published_at->format('Y-m-d')}</lastmod>
                    <changefreq>monthly</changefreq>
                </url>
            EOF;
        }

        $articleLinks = implode(PHP_EOL, $articleLinks);

        $mainUrl = route('index');
        $articlesUrl = route('articles.index');

        $sitemap = <<<EOF
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{$mainUrl}</loc>
        <lastmod>2022-01-31</lastmod>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc>{$articlesUrl}</loc>
        <lastmod>2022-01-15</lastmod>
        <changefreq>weekly</changefreq>
    </url>
{$articleLinks}
</urlset>
EOF;
        file_put_contents(public_path('sitemap.xml'), $sitemap);
//        dd($sitemap);

//        dd($images);
    }
}
