<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubscriberController extends Controller
{
    public function store(Request $request): Response
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $emailExists = Subscriber::where('email', $request->email)->exists();
        if ($emailExists) {
            return response('Email already exists', 409);
        }

        Subscriber::create($request->all());
        return response('OK', 200);
    }

}