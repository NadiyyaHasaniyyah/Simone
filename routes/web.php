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


Route::get('/',[LoginController::class,'index']);
Route::post('/',[LoginController::class,'authenticate']);

Route::get('/logout',[LoginController::class,'getLogout'])->middleware('guest');

//opt
Route::middleware(['isOperator'])->group(function(){
    Route::get('operator/dashboard_opt',[OperatorController::class, 'index'])-> name('dashboard_opt');
    Route::get('operator/generate',[OperatorController::class, 'generate'])-> name('generate');

    // upload dan import
    Route::post('operator/generate/upload', [OperatorController::class, 'store'])->name('upload');
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
    Route::get('mahasiswa/pkl/view-pdf/{semester}', [MahasiswaController::class, 'viewPDF'])->name('view_pdf_pkl');
    Route::get('mahasiswa/pkl/{semester}/edit',[MahasiswaController::class, 'pkl_edit'])-> name('pkl_edit');
    Route::put('mahasiswa/pkl/{semester}/edit',[MahasiswaController::class, 'pkl_edit_import'])-> name('pkl_edit_import');
    Route::delete('mahasiswa/pkl/{semester}',[MahasiswaController::class, 'destroyPKL'])-> name('pkl_destroy');

    // Skripsi progress
    Route::post('mahasiswa/skripsi',[MahasiswaController::class, 'skripsi_import'])-> name('skripsi_import');
    Route::get('mahasiswa/skripsi/view-pdf/{semester}', [MahasiswaController::class, 'viewPDF'])->name('view_pdf_skripsi');
    Route::get('mahasiswa/skripsi/{semester}/edit',[MahasiswaController::class, 'skripsi_edit'])-> name('skripsi_edit');
    Route::put('mahasiswa/skripsi/{semester}/edit',[MahasiswaController::class, 'skripsi_edit_import'])-> name('skripsi_edit_import');
    Route::delete('mahasiswa/skripsi/{semester}',[MahasiswaController::class, 'destroySKRIPSI'])-> name('skripsi_destroy');

});

// dsn
Route::middleware(['isDosenWali'])->group(function(){
    Route::get('dosenwali/dashboard_dsn',[DosenwaliController::class, 'index'])-> name('dashboard_dsn');
    Route::get('dosenwali/pencarian_dsn',[DosenwaliController::class, 'pencarian_dsn'])-> name('pencarian_dsn');
    Route::get('dosenwali/hasil_pencarian_dsn/{id}',[DosenwaliController::class, 'hasil_pencarian_dsn'])-> name('hasil_pencarian_dsn');

    // verifikasi
    Route::get('dosenwali/verifikasi_dsn',[DosenwaliController::class, 'verifikasi'])-> name('verifikasi_dsn');
    Route::put('dosenwali/verifikasi_dsn/{id}/irs',[DosenwaliController::class, 'verifikasiIRS'])-> name('verifikasiIRS');
    Route::put('dosenwali/verifikasi_dsn/{id}/khs',[DosenwaliController::class, 'verifikasiKHS'])-> name('verifikasiKHS');
    Route::put('dosenwali/verifikasi_dsn/{id}/pkl',[DosenwaliController::class, 'verifikasiPKL'])-> name('verifikasiPKL');
    Route::put('dosenwali/verifikasi_dsn/{id}/skripsi',[DosenwaliController::class, 'verifikasiSKRIPSI'])-> name('verifikasiSKRIPSI');

    //  view file
    Route::get('mahasiswa/verifikasi_dsn/{id}/view_irs', [DosenwaliController::class, 'viewPDF'])->name('viewPDF_irs');
    Route::get('mahasiswa/verifikasi_dsn/{id}/view_khs', [DosenwaliController::class, 'viewPDF'])->name('viewPDF_khs');
    Route::get('mahasiswa/verifikasi_dsn/{id}/view_pkl', [DosenwaliController::class, 'viewPDF'])->name('viewPDF_pkl');
    Route::get('mahasiswa/verifikasi_dsn/{id}/view_skripsi', [DosenwaliController::class, 'viewPDF'])->name('viewPDF_skripsi');

    // rekap list
    Route::get('dosenwali/rekap_pkl_dsn',[DosenwaliController::class, 'rekap_pkl_dsn'])-> name('rekap_pkl_dsn');
    Route::get('dosenwali/rekap_skripsi_dsn',[DosenwaliController::class, 'rekap_skripsi_dsn'])-> name('rekap_skripsi_dsn');
    Route::get('dosenwali/list_pkl/sudah/{angkatan}',[DosenwaliController::class, 'list_pkl_sudah'])-> name('list_pkl_sudah_dsn');
    Route::get('dosenwali/list_pkl/belum/{angkatan}',[DosenwaliController::class, 'list_pkl_belum'])-> name('list_pkl_belum_dsn');
    Route::get('dosenwali/list_skripsi/sudah/{angkatan}',[DosenwaliController::class, 'list_skripsi_sudah'])-> name('list_skripsi_sudah_dsn');
    Route::get('dosenwali/list_skripsi/belum/{angkatan}',[DosenwaliController::class, 'list_skripsi_belum'])-> name('list_skripsi_belum_dsn');

});

// dpt
Route::middleware(['isDepartemen'])->group(function(){
    Route::get('departemen/dashboard_dpt',[DepartemenController::class, 'index'])-> name('dashboard_dpt');

    // rekap
    Route::get('departemen/rekap_pkl',[DepartemenController::class, 'rekap_pkl'])-> name('rekap_pkl');
    Route::get('departemen/rekap_skripsi',[DepartemenController::class, 'rekap_skripsi'])-> name('rekap_skripsi');
    Route::get('departemen/rekap_mahasiswa',[DepartemenController::class, 'rekap_mahasiswa'])-> name('rekap_mahasiswa');

    // count
    Route::get('departemen/count_sudah_pkl/{angkatan}',[DepartemenController::class, 'count_sudah_pkl'])-> name('count_sudah_pkl');

    // list
    // sudah
    Route::get('departemen/list_pkl/sudah/{angkatan}',[DepartemenController::class, 'list_pkl_sudah'])-> name('list_pkl_sudah');
    Route::get('departemen/list_pkl/belum/{angkatan}',[DepartemenController::class, 'list_pkl_belum'])-> name('list_pkl_belum');
    Route::get('departemen/list_skripsi/sudah/{angkatan}',[DepartemenController::class, 'list_skripsi_sudah'])-> name('list_skripsi_sudah');
    Route::get('departemen/list_skripsi/belum/{angkatan}',[DepartemenController::class, 'list_skripsi_belum'])-> name('list_skripsi_belum');
});




