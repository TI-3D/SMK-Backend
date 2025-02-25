<?php

use Illuminate\Support\Facades\Route;
use App\Exports\ThrExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\ThrController;
use App\Exports\KaryawanExport;
use App\Exports\RekapExport;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\RekapController;
use App\Exports\AbsensiExport;
use App\Http\Controllers\AbsensiController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/export-karyawan', function () {
    return Excel::download(new KaryawanExport(), 'karyawan_data.xlsx');
})->name('export-karyawan');

Route::get('/karyawan/export-pdf', [KaryawanController::class, 'exportPDF'])->name('karyawan.exportPDF');

Route::get('/export-absensi', function () {
    return Excel::download(new AbsensiExport(), 'absensi_data.xlsx');
})->name('export-absensi');

Route::get('/absensi/export-pdf', [AbsensiController::class, 'exportPDF'])->name('absensi.exportPDF');

Route::get('/export-thr', [ThrController::class, 'export'])->name('export-thr');
Route::get('/thr/export-pdf', [ThrController::class, 'exportPDF'])->name('thr.exportPDF');

Route::get('/export-rekap', function () {
    return Excel::download(new RekapExport(), 'rekap_absensi_karyawan.xlsx');
})->name('export-rekap');

Route::get('/rekap/export-pdf', [RekapController::class, 'exportPDF'])->name('rekap.exportPDF');

