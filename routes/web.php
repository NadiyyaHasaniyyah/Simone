<?php

use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\DosenwaliController;
use App\Http\Middleware\isOperator;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Artisan;
use App\Models\dosenwali;

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

Route::get('/',[LoginController::class,'index']);
Route::post('/',[LoginController::class,'authenticate']);

Route::get('/logout',[LoginController::class,'getLogout'])->middleware('guest');

//opt
Route::middleware(['isOperator'])->group(function(){
    Route::get('operator/dashboard_opt',[OperatorController::class, 'index'])-> name('dashboard_opt');
    Route::get('operator/generate',[OperatorController::class, 'generate'])-> name('generate');

    // upload dan import
    Route::post('operator/generate', [OperatorController::class, 'store'])->name('upload');
    Route::post('operator/generate/import', function(){
        Artisan::call('db:seed', ['--class' => 'ImportMhsSeeder']);
        return redirect()->route('generate');
    })->name('import_mhs');
    Route::post('operator/generate', [OperatorController::class, 'import_manual'])->name('import_manual');
});

//mhs
Route::middleware(['isMahasiswa'])->group(function(){
    Route::get('mahasiswa/dashboard_mhs',[MahasiswaController::class, 'index'])-> name('dashboard_mhs');
    Route::get('mahasiswa/update_mhs',[MahasiswaController::class, 'edit'])-> name('update_mhs');
    Route::put('mahasiswa/update_mhs',[MahasiswaController::class, 'update'])-> name('update_mhs');

    // getKabupaten
    Route::post('mahasiswa/kabupaten',[MahasiswaController::class, 'getKabupaten'])-> name('getKabupaten');

    // view progress
    Route::get('mahasiswa/irs',[MahasiswaController::class, 'irs'])-> name('irs_mhs');
    Route::get('mahasiswa/khs',[MahasiswaController::class, 'khs'])-> name('khs');
    Route::get('mahasiswa/pkl',[MahasiswaController::class, 'pkl'])-> name('pkl');
    Route::get('mahasiswa/skripsi',[MahasiswaController::class, 'skripsi'])-> name('skripsi');

    // IRS progress
    Route::post('mahasiswa/irs',[MahasiswaController::class, 'irs_import'])-> name('irs_import');
    Route::get('mahasiswa/irs/view-pdf/{semester}', [MahasiswaController::class, 'viewPDF'])->name('view_pdf_irs');
    Route::delete('mahasiswa/irs/{semester}',[MahasiswaController::class, 'destroyIRS'])-> name('irs_destroy');
    Route::get('mahasiswa/irs/{semester}/edit',[MahasiswaController::class, 'irs_edit'])-> name('irs_edit');
    Route::put('mahasiswa/irs/{semester}/edit',[MahasiswaController::class, 'irs_edit_import'])-> name('irs_edit_import');


    // KHS progress
    Route::post('mahasiswa/khs',[MahasiswaController::class, 'khs_import'])-> name('khs_import');
    Route::delete('mahasiswa/khs/{semester}',[MahasiswaController::class, 'destroyKHS'])-> name('khs_destroy');
    Route::get('mahasiswa/khs/view-pdf/{semester}', [MahasiswaController::class, 'viewPDF'])->name('view_pdf_khs');
    Route::get('mahasiswa/khs/{semester}/edit',[MahasiswaController::class, 'khs_edit'])-> name('khs_edit');
    Route::put('mahasiswa/khs/{semester}/edit',[MahasiswaController::class, 'khs_edit_import'])-> name('khs_edit_import');

    // PKL progress
    Route::post('mahasiswa/pkl',[MahasiswaController::class, 'pkl_import'])-> name('pkl_import');

    // Skripsi progress
    Route::post('mahasiswa/skripsi',[MahasiswaController::class, 'skripsi_import'])-> name('skripsi_import');

});


Route::middleware(['isDosenWali'])->group(function(){
    Route::get('dosenwali/dashboard_dsn',[DosenwaliController::class, 'index'])-> name('dashboard_dsn');
    Route::get('dosenwali/pencarian_dsn',[DosenwaliController::class, 'pencarian_dsn'])-> name('pencarian_dsn');
    Route::get('dosenwali/hasi_pencarian_dsn',[DosenwaliController::class, 'hasil_pencarian_dsn'])-> name('hasil_pencarian_dsn');
    Route::get('dosenwali/verifikasi_dsn',[DosenwaliController::class, 'verifikasi'])-> name('verifikasi_dsn');
});


Route::middleware(['isDepartemen'])->group(function(){
    Route::get('departemen/dashboard_dpt',[DepartemenController::class, 'index'])-> name('dashboard_dpt');
});




