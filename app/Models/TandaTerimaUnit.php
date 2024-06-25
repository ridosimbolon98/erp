<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TandaTerimaUnit extends Model
{
    use HasFactory;
    protected $table = 'tanda_terima';
    protected $guarded = [
        'created_at',
    ];
}
