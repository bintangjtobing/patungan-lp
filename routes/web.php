<?php

use App\Models\Product;
use App\Models\User;
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
    $products = Product::orderBy('created_at', 'DESC')->get();

    $count = User::get();

    $totalUsers = User::count();

    // Buat kalimat dinamis
    // Tambahkan tanda + setelah $totalUsers
$callToActionDescriptionId = "Mulailah berbagi dan menghemat pada layanan streaming favorit Anda bersama " . $totalUsers . "+ teman PatunganYuk. Dengan platform kami yang mudah digunakan dan dukungan yang siap membantu, Anda akan menikmati akses premium tanpa harus membayar lebih.";
$callToActionId = "Bergabunglah dengan " . $totalUsers . "+ teman PatunganYuk! Hari Ini!";


    $callToActionDescriptionEn = "Start sharing and saving on your favorite streaming services with $totalUsers PatunganYuk friends. With our easy-to-use platform and dedicated support, you’ll enjoy premium access without the premium cost.";

    // Return the view with the API data and dynamic sentences
    return view('home.index', [
        'products' => $products,
        'totalUsers' => $totalUsers,
        'callToActionDescriptionId' => $callToActionDescriptionId,
        'callToActionId'=>$callToActionId,
        'callToActionDescriptionEn' => $callToActionDescriptionEn
    ]);
});

Route::view('/privacy-policy', 'home.privacy');
Route::view('/cookies', 'home.cookies');