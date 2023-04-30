<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Config
{
    /**
     * @var array<ArticleConfig> $data
     */
    public readonly array $data;

    public function __construct()
    {
        $json = file_get_contents(resource_path('articles/config.json'));
        $articleConfigs = Arr::get(json_decode($json, true), 'data', []);

        $this->data = array_map(fn ($config) => new ArticleConfig($config), $articleConfigs);
    }
}
