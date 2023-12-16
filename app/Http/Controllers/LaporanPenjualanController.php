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
}
