<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StokJual;

class StokJualController extends Controller
{
    public function index() {
        $all = StokJual::all();
        return view('stokjual', [
            'all' => $all
        ]);
    }
}
