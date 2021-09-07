<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackStoreRequest;
use Illuminate\Http\Request;
use App\Models\Feedback;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(FeedbackStoreRequest $request)
    {
        Feedback::create($request->only('name', 'email', 'subject', 'message'));

        return redirect()->back()->with('success', __('Ваше сообщение успешно отправлено!'));
    }
}
