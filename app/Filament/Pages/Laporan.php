<?php

namespace App\Filament\Pages;

use App\Models\PelangganPivotPelayanan;
use App\Models\t_pengeluaran;
use Filament\Pages\Page;
use Illuminate\Support\Facades\DB;

class Laporan extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.laporan';
    protected static ?string $title = 'Laporan Pendapatan';


    public $tanggal_awal;
    public $tanggal_akhir;
    public $data;
    public function save()
    {
        $totalPivot = 0;
        $totalPengeluaran = 0;
        $data = PelangganPivotPelayanan::whereBetween(DB::raw('DATE(updated_at)'), [request()->tanggal_awal, request()->tanggal_akhir])
            ->where('status', 'Selesai')
            ->get();
        $tanggal_awal = request()->tanggal_awal;
        $tanggal_akhir = request()->tanggal_akhir;
        $dataPengeluaran = t_pengeluaran::whereBetween(DB::raw('DATE(updated_at)'), [request()->tanggal_awal, request()->tanggal_akhir])
            ->get();

        foreach ($data as $item) {
            $totalPivot += $item->total;
        }

        foreach ($dataPengeluaran as $pengeluaran) {
            $totalPengeluaran += $pengeluaran->tarif;
        }

        $totalKeseluruhan = $totalPivot - $totalPengeluaran;


        return view('welcome', compact('data', 'tanggal_awal', 'tanggal_akhir', 'dataPengeluaran','totalKeseluruhan'));
    }
}
