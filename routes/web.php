<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\DATA_1461900010Controller@DATA_1461900010')->name('DATA_1461900010');
Route::get('export-excel', '\App\Http\Controllers\DATA_1461900010Controller@export_excel')->name('tugas.export_excel');