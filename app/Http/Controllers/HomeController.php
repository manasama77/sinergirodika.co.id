<?php

namespace App\Http\Controllers;

use App\Mail\GuestBookMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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


    public function products_electrical()
    {
        return view('pages.products.electrical.list');
    }

    public function products_electrical_micom_p123_127_feeder_management_relay()
    {
        return view('pages.products.electrical.micom-p123-127-feeder-management-relay');
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


    public function products_electrical_vehicle_charger()
    {
        return view('pages.products.electrical_vehicle_charger.list');
    }

    public function products_electrical_vehicle_charger_ac_and_small_dc_charger()
    {
        return view('pages.products.electrical_vehicle_charger.ac_and_small_dc_charger');
    }

    public function products_electrical_vehicle_charger_ultra_fast_dc_charger()
    {
        return view('pages.products.electrical_vehicle_charger.ultra_fast_dc_charger');
    }


    public function products_energy_and_environment_management()
    {
        return view('pages.products.energy_and_environment_management.list');
    }

    public function products_energy_and_environment_management_energy_meters()
    {
        return view('pages.products.energy_and_environment_management.energy_meters');
    }

    public function products_energy_and_environment_management_gas_meters()
    {
        return view('pages.products.energy_and_environment_management.gas_meters');
    }

    public function products_energy_and_environment_management_water_meters()
    {
        return view('pages.products.energy_and_environment_management.water_meters');
    }

    public function products_energy_and_environment_management_cyble_nonmag_sensor()
    {
        return view('pages.products.energy_and_environment_management.cyble_nonmag_sensor');
    }

    public function products_energy_and_environment_management_lora_rtu()
    {
        return view('pages.products.energy_and_environment_management.lora_rtu');
    }

    public function products_energy_and_environment_management_cctv_and_electronic_security()
    {
        return view('pages.products.energy_and_environment_management.cctv_and_electronic_security');
    }

    public function products_water_tank()
    {
        return view('pages.products.water_tank.list');
        // return view('pages.products.water_tank');
    }

    public function products_test_and_measurement_tools()
    {
        return view('pages.products.test_and_measurement.list');
        // return view('pages.products.test_and_measurement_tools');
    }


    public function projects_relay_protection()
    {
        return view('pages.projects.relay_protection');
    }

    public function projects_generator_ats_amf()
    {
        return view('pages.projects.generator_ats_amf');
    }

    public function projects_energy_metering()
    {
        return view('pages.projects.energy_metering');
    }

    public function projects_scada_system()
    {
        return view('pages.projects.scada_system');
    }

    public function projects_dc_power_supply()
    {
        return view('pages.projects.dc_power_supply');
    }

    public function projects_transformer_oil_purifier()
    {
        return view('pages.projects.transformer_oil_purifier');
    }

    public function projects_street_lamps_and_warehouse()
    {
        return view('pages.projects.street_lamps_and_warehouse');
    }

    public function projects_cctv_and_metal_detectors()
    {
        return view('pages.projects.cctv_and_metal_detectors');
    }

    public function contact_us()
    {
        return view('pages.contact_us');
    }

    public function send_mail(Request $request)
    {
        $request->validate([
            'full_name' => ['required'],
            'email'     => ['required', 'email:rfc,dns'],
            'whatsapp'  => ['required'],
            'subject'   => ['required'],
            'message'   => ['required'],
        ]);

        $mail = Mail::to($request->email)->send(new GuestBookMail($request->full_name, $request->email, $request->whatsapp, $request->subject, $request->message));


        if (!$mail) {
            return redirect()->back()->with('error', 'Something went wrong, please try again.');
        }


        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
