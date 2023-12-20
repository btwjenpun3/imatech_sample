<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPenjualan extends Model
{
    use HasFactory;

    protected $table = 'tbl_jual';
    
    protected $primaryKey = 'nota';
    public $incrementing = false;
    protected $keyType = 'string';

    public function stokJual() {
        return $this->belongsToMany(DeskBarang::class, 'stok_jual', 'n_nota', 'id_baran')->withPivot('hrg_jual', 'total_jual');
    }    
}
