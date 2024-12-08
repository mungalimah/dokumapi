<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PendapatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Menentukan rentang waktu yang digunakan
        $interval = $request->get('interval', '7d');  // default 1 minggu

        // Mengambil data berdasarkan interval waktu
        $pesananQuery = Pesanan::where('status', 'success');

        if ($interval == '1d') {
            // Untuk 1 hari, mengambil data berdasarkan waktu hari ini
            $pesananQuery->whereDate('updated_at', now()->format('Y-m-d'));
        } elseif ($interval == '7d') {
            // Untuk 1 minggu, mengambil data dalam 7 hari terakhir
            $pesananQuery->where('updated_at', '>=', now()->subWeek());
        } elseif ($interval == '1m') {
            // Untuk 1 bulan, mengambil data dalam 1 bulan terakhir
            $pesananQuery->where('updated_at', '>=', now()->subMonth());
        }

        // Mengambil data total pendapatan
        $pendapatan = $pesananQuery->get();

        // Mengirim data pendapatan dan interval ke view
        return view('pendapatan.pendapatan', [
            'pendapatan' => $pendapatan,
            'interval' => $interval,
        ]);
    }
}


?>