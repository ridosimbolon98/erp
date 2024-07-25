<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianSparepart extends Model
{
    use HasFactory;

    protected $table = 'pembelian_sparepart';
    protected $guarded = [
        'created_at',
    ];
}
