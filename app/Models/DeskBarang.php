<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskBarang extends Model
{
    use HasFactory;

    protected $table = 'desk_barang';

    protected $primaryKey = 'id_barang';

    public function stokJual() {
        return $this->belongsToMany(DeskBarang::class, 'stok_jual', 'id_baran', 'n_nota');
    }
}
