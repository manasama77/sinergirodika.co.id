<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about_us()
    {
        return view('pages.home');
    }

    public function solutions_electrical_service()
    {
        return view('pages.home');
    }
}
