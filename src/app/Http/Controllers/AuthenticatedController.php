<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthenticatedController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(LoginRequest $request)
    {
        $contact = $request->only(['email', 'password']);
        return view('store', ['contact' => $contact]);
    }

    public function destroy(LoginRequest $request)
    {
        $contact = $request->only(['email', 'password']);
        return view('destroy', ['contact' => $contact]);
    }
}
