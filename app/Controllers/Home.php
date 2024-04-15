<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function register(): string
    {
        return view('auth/register');
    }
    public function user(): string
    {
        return view('user/index');
    }
}
