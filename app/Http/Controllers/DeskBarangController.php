<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeskBarang;

class DeskBarangController extends Controller
{
    public function index() {
        $data = DeskBarang::with('stokJual')->get();
        return view('deskbarang', [
            'data' => $data
        ]);
    }
}
