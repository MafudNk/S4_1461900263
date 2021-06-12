<?php

use App\Http\Controllers\dokterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',  [dokterController::class, 'index']);
Route::get('dokter/export/', [dokterController::class, 'export']);
// Route::get('/guru/create', [dokterController::class, 'create']);
Route::resource('dokter', dokterController::class);