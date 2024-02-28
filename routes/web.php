<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/ar', function () {
    return view('index-ar');
});


//Sectors ENG Link
Route::get('/Early-recovery-sector', function () {
    return view('pages.sectors.EN.Early-recovery-sector');
});
Route::get('/Education-sector', function () {
    return view('pages.sectors.EN.education-sector');
});
Route::get('/Environment-sector', function () {
    return view('pages.sectors.EN.Environment-sector');
});
Route::get('/Health-sector', function () {
    return view('pages.sectors.EN.Health-sector');
});
Route::get('/Human-rights-sector', function () {
    return view('pages.sectors.EN.Human-rights-sector');
});
Route::get('/Non-food-products-sector', function () {
    return view('pages.sectors.EN.non-food-products-sector');
});
Route::get('/Peacebuilding-sector', function () {
    return view('pages.sectors.EN.peacebuilding-sector');
});
Route::get('/Protection-sector', function () {
    return view('pages.sectors.EN.protection-sector');
});
Route::get('/Securing-food-sector', function () {
    return view('pages.sectors.EN.Securing-food-sector');
});




//Sectors AR Link
Route::get('/Early-recovery-sector-ar', function () {
    return view('pages.sectors.AR.Early-recovery-sector-AR');
});
Route::get('/Education-sector-ar', function () {
    return view('pages.sectors.AR.education-sector-AR');
});
Route::get('/Environment-sector-ar', function () {
    return view('pages.sectors.AR.Environment-sector-AR');
});
Route::get('/Health-sector-ar', function () {
    return view('pages.sectors.AR.Health-sector-AR');
});
Route::get('/Human-rights-sector-ar', function () {
    return view('pages.sectors.AR.Human-rights-sector-AR');
});
Route::get('/Non-food-products-sector-ar', function () {
    return view('pages.sectors.AR.non-food-products-sector-AR');
});
Route::get('/Peacebuilding-sector-ar', function () {
    return view('pages.sectors.AR.peacebuilding-sector-AR');
});
Route::get('/Protection-sector-ar', function () {
    return view('pages.sectors.AR.protection-sector-AR');
});
Route::get('/Securing-food-sector-ar', function () {
    return view('pages.sectors.AR.Securing-food-sector-AR');
});





