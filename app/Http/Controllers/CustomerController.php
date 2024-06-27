<?php

namespace App\Http\Controllers;

use App\Models\Units;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Menampilkan data pelanggan
     */
    public function index()
    {
        $customers = Customer::with(['cabang'])->get();
        $units = Units::where('status', 1)->orderBy('name', 'asc')->get();

        return view('master.customer', [
            'units' => $units,
            'customers' => $customers
        ]);
    }

    /**
     * Store data pelanggan baru
     */
    public function store(Request $request)
    {
        $user = $request->user();
        $data_customer = [
            'nama'               => $request->nama,
            'alamat'             => $request->alamat,
            'no_telp'            => $request->no_telp,
            'email'              => $request->email,
            'url_gmaps'          => $request->url_gmaps,
            'id_unit'            => $request->cabang,
            'tanggal_registrasi' => date('Y-m-d'),
            'status'             => 1,
            'updated_by'         => $user->email,
        ];

        $insert = Customer::create($data_customer);

        if ($insert) {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->success('Berhasil tambah data pelanggan baru');
            return redirect()->route('admin.master.pelanggan')->with('failed', 'Berhasil tambah data pelanggan baru.');
        } else {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->warning('Gagal tambah data pelanggan baru.');
            return redirect()->route('admin.master.pelanggan')->with('failed', 'Gagal tambah data pelanggan.');
        }
    }


    /**
     * Update data customer tertentu
     */
    public function update(Request $request)
    {
        $data_customer = [
            'nama'               => $request->nama,
            'alamat'             => $request->alamat,
            'no_telp'            => $request->no_telp,
            'email'              => $request->email,
            'url_gmaps'          => $request->url_gmaps,
            'id_unit'            => $request->cabang,
            'status'             => 1,
        ];

        $update = Customer::where('id', $request->id)->update($data_customer);

        if ($update) {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->success('Berhasil ubah data pelanggan.');
            return redirect()->route('admin.master.pelanggan')->with('success', 'Berhasil ubah data pelanggan.');
        } else {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->warning('Gagal ubah data pelanggan.');
            return redirect()->route('admin.master.pelanggan')->with('failed', 'Gagal ubah data pelanggan.');
        }
    }

    /**
     * Disabled data customer by id
     */
    public function disabled(Request $request, $id)
    {
        $user = $request->user();
        $data_customer = [
            'status'      => 0,
            // 'updated_by'  => $user->email,
            'updated_at'  => date('Y-m-d H:i:s'),
        ];

        $update = Customer::where('id', $id)->update($data_customer);

        if ($update) {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->success('Berhasil disabled data pelanggan.');
            return redirect()->route('admin.master.pelanggan')->with('success', 'Berhasil disabled data pelanggan.');
        } else {
            flash()
            ->options([
                'timeout' => 3000, // 3 seconds
                'position' => 'top-center',
            ])
            ->warning('Gagal disabled data pelanggan.');
            return redirect()->route('admin.master.pelanggan')->with('failed', 'Gagal disabled data pelanggan.');
        }
    }

}
