<?php

namespace App\Models;

use App\Models\Units;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TandaTerimaUnit extends Model
{
    use HasFactory;
    protected $table = 'tanda_terima';
    protected $guarded = [
        'created_at',
    ];

    public function detail_pelanggan()
    {
        return $this->belongsTo(Customer::class, 'id_pelanggan', 'id');
    }
    
    public function detail_cabang()
    {
        return $this->belongsTo(Units::class, 'lokasi_unit', 'id');
    }
}
