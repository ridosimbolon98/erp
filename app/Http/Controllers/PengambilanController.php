<?php

namespace App\Http\Controllers;

use App\Models\Units;
use Illuminate\Http\Request;
use App\Models\TandaTerimaUnit;

class PengambilanController extends Controller
{
    /**
     * Menampilkan data form pengambilan unit
     */
    public function pengambilan_unit(Request $request)
    {
        $user = $request->user();

        if ($user->role === 1) {
            $tanda_terima = TandaTerimaUnit::with(['detail_pelanggan','detail_cabang'])->orderBy('created_at', 'desc')->get();
            $cabang    = Units::where('status', 1)->orderBy('name', 'asc')->get();
        } else {
            $tanda_terima = TandaTerimaUnit::with(['detail_pelanggan','detail_cabang'])->where('lokasi_unit', $user->unit)->orderBy('created_at', 'desc')->get();
            $cabang    = Units::where('status', 1)->orderBy('name', 'asc')->get();
        }

        return view('transaction.pengambilan_unit', [
            'tanda_terima' => $tanda_terima,
            'units'        => $cabang,
        ]);
    }
}
