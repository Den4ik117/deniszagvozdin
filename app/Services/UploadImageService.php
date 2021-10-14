<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class UploadImageService
{
    public static function upload($image, $id): string
    {
        $extension = $image->extension();
        $fileName = "article-{$id}.{$extension}";
        $image->move(public_path('images/articles'), $fileName);

        return asset("images/articles/{$fileName}");
    }
}
