<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (!auth()->user()->hasPermissionTo('view.dashboard'))
        {
            return view('guest');
        }

        $subjects = [
            1 => 'Задать вопрос',
            2 => 'Оставить заявку на создание сайта',
            3 => 'Отправить отзыв',
            4 => 'Другое'
        ];

        return view('dashboard', [
            'messages' => Feedback::latest()->take(20)->get(),
            'subjects' => $subjects
        ]);
    }
}
