<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');

Route::get('/solutions/electrical-service', [HomeController::class, 'solutions_electrical_service'])->name('solutions.electrical-service');
Route::get('/solutions/electrical-vehicle-charger', [HomeController::class, 'solutions_electrical_vehicle_charger'])->name('solutions.electrical-vehicle-charger');
Route::get('/solutions/energy-and-environment-management', [HomeController::class, 'solutions_energy_and_environment_management'])->name('solutions.energy-and-environment-management');

Route::get('/products/electrical', [HomeController::class, 'products_electrical'])->name('products.electrical');
Route::get('/products/electrical-vehicle-charger', [HomeController::class, 'products_electrical_vehicle_charger'])->name('products.electrical-vehicle-charger');
Route::get('/products/energy-and-environment-management', [HomeController::class, 'products_energy_and_environment_management'])->name('products.energy-and-environment-management');
Route::get('/products/water-tank', [HomeController::class, 'products_water_tank'])->name('products.water-tank');
Route::get('/products/test-and-measurement-tools', [HomeController::class, 'products_test_and_measurement_tools'])->name('products.test-and-measurement-tools');

Route::get('/project/relay-protection', [HomeController::class, 'projects_relay_protection'])->name('projects.relay-protection');
Route::get('/project/generator-ats-amf', [HomeController::class, 'projects_generator_ats_amf'])->name('projects.generator-ats-amf');
Route::get('/project/energy-metering', [HomeController::class, 'projects_energy_metering'])->name('projects.energy-metering');
Route::get('/project/scada-system', [HomeController::class, 'projects_scada_system'])->name('projects.scada-system');
Route::get('/project/dc-power-supply', [HomeController::class, 'projects_dc_power_supply'])->name('projects.dc-power-supply');
Route::get('/project/transformer-oil-purifier', [HomeController::class, 'projects_transformer_oil_purifier'])->name('projects.transformer-oil-purifier');
Route::get('/project/street-lamps-and-warehouse', [HomeController::class, 'projects_street_lamps_and_warehouse'])->name('projects.street-lamps-and-warehouse');
Route::get('/project/cctv-and-metal-detectors', [HomeController::class, 'projects_cctv_and_metal_detectors'])->name('projects.cctv-and-metal-detectors');

Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');
Route::post('/send-mail', [HomeController::class, 'send_mail'])->name('send-mail');
