<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\Pelanggan;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Jumlah total barang (jumlah record di tabel produk)
        $jumlahBarang = Produk::count();

        // Total stok barang (menjumlahkan nilai kolom 'stock')
        $totalStok = Produk::sum('stock');

        // Jumlah pelanggan
        $jumlahPelanggan = Pelanggan::count();

        return view('dashboard.dashboard', [
            'jumlahBarang' => $jumlahBarang,
            'totalStok' => $totalStok,
            'jumlahPelanggan' => $jumlahPelanggan,
        ]);
    }


}
