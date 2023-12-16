<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanPenjualan;

class LaporanPenjualanController extends Controller
{
    public function index() {
        $data = LaporanPenjualan::all();
        return view('laporanpenjualan', [
            'data' => $data
        ]);
    }

    public function search(Request $request) {
        $tanggalMulai = $request->tanggal_mulai;
        $tanggalAkhir = $request->tanggal_akhir;

        $results = LaporanPenjualan::whereBetween('tgl', [$tanggalMulai, $tanggalAkhir])->get();

        return view('results', [
            'results' => $results
        ]);
    }
}
