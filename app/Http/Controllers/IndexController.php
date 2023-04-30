<?php

namespace App\Http\Controllers;

use App\Events\ApplicationCreated;
use App\Http\Requests\ApplicationStoreRequest;
use App\Models\Application;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(ApplicationStoreRequest $request): Response
    {
        $application = Application::query()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
            'ip' => $request->ip(),
            'headers' => $request->headers->all(),
        ]);

        event(new ApplicationCreated($application));

        return response()->noContent();
    }
}
