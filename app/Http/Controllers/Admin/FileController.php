<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        $files = File::latest()->get();

        return view('admin.files.index', compact('files'));
    }

    public function create()
    {
        $articles = Article::latest()->take(30)->get();

        return view('admin.files.create', compact('articles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'article_id' => 'required|integer|exists:articles,id',
            'file' => 'required|file'
        ]);

        $path = '/' . Storage::putFile('articles/' . $request->article_id, $request->file('file'));

        File::create([
            'article_id' => $request->article_id,
            'path' => $path
        ]);

        return back()->with('success', 'Файл успешно добавлен!');
    }

    public function destroy(File $file)
    {
        $status = Storage::delete($file->path);

        if ($status && $file->delete())
            return back()->with('success', 'Файл успешно удалён!');

        return back()->withErrors(['error' => 'При удалении файла произошла неизвестная ошибка!']);
    }
}
