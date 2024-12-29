<?php

use App\Filament\Pages\Laporan;
use Illuminate\Support\Facades\Route;

Route::get('/admin/laporan/view', function () {
    return view('welcome');
});

Route::post('/admin/laporan/kirim',[Laporan::class,'save']);
