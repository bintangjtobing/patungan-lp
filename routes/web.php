<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
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
    $response = Http::withToken('1|mJ7CBLSQTH5vHAIuGi8S94U6c8kLjPFDOmG58JIc54b8d78f')
        ->get('https://app.patunganyuk.com/api/admin/products');

    // Decode the JSON response
    $products = $response->json('data');

    // Return the view with the API data
    // return $products;
    return view('home.index', ['products' => $products]);
});
Route::view('/privacy-policy', 'home.privacy');
Route::view('/cookies', 'home.cookies');