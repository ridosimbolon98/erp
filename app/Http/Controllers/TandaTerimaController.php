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

        $customers = Customer::with(['cabang'])->where('status', 1)->orderBy('nama', 'asc')->get();
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

        return view('transaction.ttu', [
            'units'     => $cabang,
            'customers' => $customers,
            'user_unit' => $userUnit,
            'counter'   => $counter,
            'next_id'   => $next_id,
        ]);
    }

    /**
     * Simpan data tanda terima baru
     */
    public function store(Request $request)
    {
        $user            = $request->user();
        $no_ttu          = $request->no_ttu;
        $id_pelanggan    = $request->id_pelanggan;
        $lokasi_unit     = $request->lokasi_unit;
        $merk            = $request->merk;
        $model           = $request->model;
        $nomor_seri      = $request->nomor_seri;
        $kelengkapan     = json_encode($request->kelengkapan);
        $keluhan         = $request->keluhan;

        $isExist = TandaTerimaUnit::where('no_ttu', $no_ttu)->exists();
        if ($isExist) {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->warning("No. tanda terima: $no_ttu, sudah tersedia, silakan gunakan nomor lain!");
            return redirect()->route('admin.ttu')->with('warning', "No. tanda terima: $no_ttu, sudah tersedia, silakan gunakan nomor lain!");
        }

        $insert = TandaTerimaUnit::create([
            'no_ttu'          => $no_ttu,
            'id_pelanggan'    => $id_pelanggan,
            'lokasi_unit'     => $lokasi_unit,
            'merk'            => $merk,
            'model'           => $model,
            'jenis_perbaikan' => 'baru',
            'nomor_seri'      => $nomor_seri,
            'kelengkapan'     => $kelengkapan,
            'keluhan'         => $keluhan,
            'created_by'      => $user->email,
            'created_at'      => date('Y-m-d H:i:s'),
        ]);

        if ($insert) {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->success('Berhasil input tanda terima baru');
            return redirect()->route('admin.ttu')->with('success', 'Berhasil input tanda terima baru');
        } else {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->warning('Gagal input tanda terima baru');
            return redirect()->route('admin.ttu')->with('failed', 'Gagal input tanda terima baru.');
        }
    }
}
