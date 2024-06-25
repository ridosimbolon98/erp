<?php

namespace App\Http\Controllers;

use App\Models\Units;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\TandaTerimaUnit;

class TandaTerimaController extends Controller
{
    /**
     * Menampilkanda form tanda terima unit
     */
    public function ttu(Request $request)
    {
        $user = $request->user();

        $customers = Customer::where('status', 1)->orderBy('nama', 'asc')->get();
        $cabang    = Units::where('status', 1)->orderBy('name', 'asc')->get();
        $lastTtu   = TandaTerimaUnit::where('id_unit', $user->unit)->orderBy('created_at', 'desc')->first();

        $counter = '';
        if ($lastTtu) {
            $year = date('Y-m', strtotime($lastTtu->created_at));
            $counter = $year === date('Y-m') ? str_pad((int)$lastTtu->no_ttu + 1, 3, '0', STR_PAD_LEFT) : '001';
            
        } else {
            $counter = '001';
        }

        $next_id = date('dmY').$counter;

        return view('transaction.ttu', [
            'units'     => $cabang,
            'customers' => $customers,
            'counter'   => $counter,
            'next_id'   => $next_id
        ]);
    }
}
