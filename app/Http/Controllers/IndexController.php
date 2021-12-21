<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|max:2000'
        ], [
            'name.required' => 'Введите своё имя',
            'name.max' => 'Ваше имя слишком длинное',

            'email.required' => 'Введите вашу почту',
            'email.email' => 'Некорректная почта',
            'email.max' => 'Ваша почта слишком длинная',

            'subject.required' => 'Выберите тему сообщения',
            'subject.max' => 'Тема некорректна',

            'message.required' => 'Введите ваше сообщение',
            'message.max' => 'Сообщение слишком длинное. Если вы хотите прислать длинный текст (например, ТЗ), то загружайте текст на Google-диск и пишите в тексте ссылку на документ'
        ])->validated();

        Mail::to(config('mail.to'))->send(new Message($validated));

        return back()->with('success', 'Сообщение успешно отправлено!');
    }

    public function articles()
    {
        $articles = Article::with('files')->latest()->get();

        return view('articles', compact('articles'));
    }
}
