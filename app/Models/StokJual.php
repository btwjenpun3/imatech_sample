<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokJual extends Model
{
    use HasFactory;

    protected $table = 'stok_jual';
    protected $guarded = [ 'id' ];
}
