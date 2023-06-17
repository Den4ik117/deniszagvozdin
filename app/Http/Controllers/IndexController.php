<?php

namespace App\Http\Controllers;

use App\Events\ApplicationCreated;
use App\Http\Requests\ApplicationStoreRequest;
use App\Models\Application;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(ApplicationStoreRequest $request): Response
    {
        if (RateLimiter::tooManyAttempts('send-message:'.$request->ip(), 1)) {
            $seconds = RateLimiter::availableIn('send-message:'.$request->ip());

            throw ValidationException::withMessages(['error' => "Отправлять сообщения можно раз в 15 минут. Следующая попытка через $seconds сек."]);
        }

        $application = Application::query()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
            'ip' => $request->ip(),
            'headers' => $request->headers->all(),
        ]);

        event(new ApplicationCreated($application));

        RateLimiter::hit('send-message:'.$request->ip(), 15 * 60);

        return response()->noContent();
    }
}
