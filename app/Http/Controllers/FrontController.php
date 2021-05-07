<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function docs()
    {
        return view('docs');
    }

    public function management()
    {
        return view('management');
    }
}
