<?php
use App\Http\Controllers\NamaSekolahController;
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

Route::get('/', [NamaSekolahController::class, 'index' ] );
Route::get('/tambah', [NamaSekolahController::class, 'tambah' ] );
Route::post('/tambah', [NamaSekolahController::class, 'store' ] );
Route::get('/hapus/{id}', [NamaSekolahController::class, 'hapus' ] );
Route::get('/edit/{id}', [NamaSekolahController::class, 'edit' ] );
Route::post('/edit/{id}', [NamaSekolahController::class, 'update' ] );
Route::get('/lihat/{id}', [NamaSekolahController::class, 'lihat' ] );
