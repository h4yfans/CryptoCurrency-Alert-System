<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function checkAuth()
    {
        return response()->json(auth()->check());
    }
}