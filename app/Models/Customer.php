<?php

namespace App\Models;

use App\Models\Units;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<timestamp>
     */
    protected $guarded = [
        'created_at',
    ];

    public function cabang()
    {
        return $this->belongsTo(Units::class, 'id_unit', 'id');
    }
}
