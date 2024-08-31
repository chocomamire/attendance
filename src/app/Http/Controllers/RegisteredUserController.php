<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create(RegisterRequest $request)
    {
        $contact = $request->only(['name', 'email', 'password']);
        return view('create', ['contact' => $contact]);
    }

    public function store(RegisterRequest $request)
    {
        $contact = $request->only(['name', 'email', 'password']);
        return view('create', ['contact' => $contact]);
    }
}
