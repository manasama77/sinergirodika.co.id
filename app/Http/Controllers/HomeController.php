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
        return view('pages.about_us');
    }

    public function solutions_electrical_service()
    {
        return view('pages.solutions.electrical_service');
    }

    public function solutions_electrical_vehicle_charger()
    {
        return view('pages.solutions.electrical_vehicle_charger');
    }

    public function solutions_energy_and_environment_management()
    {
        return view('pages.solutions.energy_and_environment_management');
    }
}
