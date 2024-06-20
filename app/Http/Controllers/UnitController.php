<?php

namespace App\Http\Controllers;

use App\Models\Units;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class UnitController extends Controller
{
    /**
     * Menampilkan data unit/cabang dari usaha
     */
    public function index()
    {
        $units = Units::all();

        return view('master.unit', [
            'units' => $units
        ]);
    }

    /**
     * Store data unit / cabang baru
     */
    public function store(Request $request)
    {
        $data_cabang = [
            'name'      => $request->name,
            'alamat'    => $request->alamat,
            'no_telp'   => $request->no_telp,
            'url_gmaps' => $request->url_gmaps,
            'bank'      => $request->bank,
            'no_rek'    => $request->no_rek,
            'atas_nama' => $request->atas_nama,
            'status'    => 1,
        ];

        $insert = Units::create($data_cabang);

        if ($insert) {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->success('Berhasil tambah cabang baru');
            return redirect()->route('admin.master.unit')->with('success', 'Berhasil tambah data cabang baru.');
        } else {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->warning('Gagal tambah cabang baru.');
            return redirect()->route('admin.master.unit')->with('failed', 'Gagal tambah data cabang.');
        }
    }


    /**
     * Update data cabang tertentu
     */
    public function update(Request $request)
    {
        $data_cabang = [
            'name'      => $request->name,
            'alamat'    => $request->alamat,
            'no_telp'   => $request->no_telp,
            'url_gmaps' => $request->url_gmaps,
            'bank'      => $request->bank,
            'no_rek'    => $request->no_rek,
            'atas_nama' => $request->atas_nama,
            'status'    => $request->status,
        ];

        $update = Units::where('id', $request->id)->update($data_cabang);

        if ($update) {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->success('Berhasil ubah data cabang.');
            return redirect()->route('admin.master.unit')->with('success', 'Berhasil ubah data cabang.');
        } else {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->warning('Gagal ubah data cabang.');
            return redirect()->route('admin.master.unit')->with('failed', 'Gagal ubah data cabang.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
