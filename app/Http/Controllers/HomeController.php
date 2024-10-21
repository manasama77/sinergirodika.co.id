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

    public function products_electrical_relay_protection()
    {
        return view('pages.products.electrical.relay_protection');
    }

    public function products_electrical_generator_ats_amf()
    {
        return view('pages.products.electrical.generator_ats_amf');
    }

    public function products_electrical_energy_metering()
    {
        return view('pages.products.electrical.energy_metering');
    }

    public function products_electrical_scada_system()
    {
        return view('pages.products.electrical.scada_system');
    }

    public function products_electrical_dc_power_supply()
    {
        return view('pages.products.electrical.dc_power_supply');
    }

    public function products_electrical_transformer_oil_purifier()
    {
        return view('pages.products.electrical.transformer_oil_purifier');
    }

    public function products_electrical_distribution_transformer_monitoring()
    {
        return view('pages.products.electrical.distribution_transformer_monitoring');
    }

    public function products_electrical_temperature_monitoring_ews()
    {
        return view('pages.products.electrical.temperature_monitoring_ews');
    }
}
