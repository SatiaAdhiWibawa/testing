<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
    // FUNCTION LOGIN
    public function index()
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    // FUNCTION REGISTER
    public function register()
    {
        return Inertia::render('Auth/Register');
    }
}
