<?php

namespace App\Http\Controllers;

use App\Models\Units;
use Illuminate\Http\Request;
use App\Models\PembelianSparepart;

class PembelianController extends Controller
{
    /**
     * Mengambil data pembelian sparepart
     */
    public function pembelian_sparepart(Request $request)
    {
        $user = $request->user();

        if ($user->role === 1) {
            $pembelian_sparepart = PembelianSparepart::orderBy('created_at', 'desc')->get();
            $cabang    = Units::where('status', 1)->orderBy('name', 'asc')->get();
        } else {
            $pembelian_sparepart = PembelianSparepart::where('lokasi_unit', $user->unit)->orderBy('created_at', 'desc')->get();
            $cabang    = Units::where('status', 1)->orderBy('name', 'asc')->get();
        }

        return view('transaction.pembelian_sparepart', [
            'pembelian_sparepart' => $pembelian_sparepart,
            'units'               => $cabang,
        ]);
    }
}
