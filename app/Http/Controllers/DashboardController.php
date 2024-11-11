<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Jumlah total barang (jumlah record di tabel produk)
        $jumlahBarang = Produk::count();

        // Total stok barang (menjumlahkan nilai kolom 'stock')
        $totalStok = Produk::sum('stock');

        return view('dashboard.dashboard', [
            'jumlahBarang' => $jumlahBarang,
            'totalStok' => $totalStok,
        ]);
    }

}
