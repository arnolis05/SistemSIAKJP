<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\minyakController;
use App\Http\Controllers\pembelianController;

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

Route::resource('/','loginController');
Route::resource('/login/proses','loginController');
Route::resource('/dashboard','dashboardController');
Route::resource('/minyak','minyakController');
Route::resource('/assettetap','assettetapController');
Route::resource('/jurnalumum','jurnalumumController');
Route::get('/edit/jenis/minyak/{keyEditJenis}', function($keyEditJenis){
    $decrypt = decrypt($keyEditJenis);
    echo $decrypt;
});
Route::get('/delete/jenis/minyak/{keyDelJenis}', function($keyDelJenis){
    $decrypt = decrypt($keyDelJenis);
    echo $decrypt;
});
Route::get('/edit/asset/{keyEditAsset}', function($keyEditAsset){
    $decrypt = decrypt($keyEditAsset);
    echo $decrypt;
});
Route::get('/delete/asset/{keyDelAsset}', function($keyDelJenis){
    $decrypt = decrypt($keyDelJenis);
    echo $decrypt;
});
Route::get('/edit/jurnal/{keyEditJurnal}', function($keyEditJurnal){
    $decrypt = decrypt($keyEditJurnal);
    echo $decrypt;
});
Route::get('/delete/jurnal/{keyDelJurnal}', function($keyDelJurnal){
    $decrypt = decrypt($keyDelJurnal);
    echo $decrypt;
});
Route::resource('/kirim','KirimEmailController');
Route::resource('/forgot/password','ForgotPassController');
Route::resource('/reset/password','ForgotPassController');
Route::get('/minyak/tambah/data',[minyakController::class,'tambah']);
Route::get('/pembelian/tambah/data',[pembelianController::class,'tambah']);
Route::resource('/minyak/create','minyakController');
Route::resource('/pembelian','pembelianController');