<?php

namespace App\Console\Commands;

use App\Services\ExportArticlesService;
use App\Services\UpdateSitemapService;
use Illuminate\Console\Command;

class ExportArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:articles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command export articles from `resources/articles` catalog';

    /**
     * Execute the console command.
     */
    public function handle(
        ExportArticlesService $exportArticlesService,
        UpdateSitemapService $updateSitemapService
    ): void
    {
        $exportArticlesService->export();
        $updateSitemapService->update();
    }
}
