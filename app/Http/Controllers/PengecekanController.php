<?php

namespace App\Http\Controllers;

use App\Models\Units;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\TandaTerimaUnit;

class PengecekanController extends Controller
{
    /**
     * Menampilkanda form pengecekan unit
     */
    public function pengecekan_unit(Request $request)
    {
        $user = $request->user();

        $tanda_terima = TandaTerimaUnit::with(['detail_pelanggan','detail_cabang'])->where('lokasi_unit', $user->unit)->orderBy('created_at', 'desc')->get();
        $cabang    = Units::where('status', 1)->orderBy('name', 'asc')->get();
        $lastTtu   = TandaTerimaUnit::where('lokasi_unit', $user->unit)->orderBy('created_at', 'desc')->first();
        $userUnit  = Units::where('id', $user->unit)->first();

        $counter = '';
        if ($lastTtu) {
            $year = date('Y-m', strtotime($lastTtu->created_at));
            $counter = $year === date('Y-m') ? str_pad((int)$lastTtu->no_ttu + 1, 3, '0', STR_PAD_LEFT) : '001';
            
        } else {
            $counter = '001';
        }

        $next_id = date('dmY').$counter;

        return view('transaction.pengecekan_unit', [
            'tanda_terima' => $tanda_terima,
            'units'        => $cabang,
            'user_unit'    => $userUnit,
            'counter'      => $counter,
            'next_id'      => $next_id,
        ]);
    }
}
