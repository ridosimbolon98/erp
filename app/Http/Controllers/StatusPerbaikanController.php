<?php

namespace App\Http\Controllers;

use App\Models\Units;
use Illuminate\Http\Request;

class StatusPerbaikanController extends Controller
{
    /**
     * Ambil data perbaikan dalam status antrian
     * 
     */
    public function status_perbaikan_antrian()
    {
        $units = Units::where('status', 1)->orderBy('name', 'asc')->get();
        return view('transaction.perbaikan.dalam_antrian', [
            'units' => $units
        ]);  
    }
    
    /**
     * Ambil data perbaikan dalam status menunggu konfirmasi
     */
    public function status_perbaikan_menunggu_konfirmasi()
    {
        $units = Units::where('status', 1)->orderBy('name', 'asc')->get();
        return view('transaction.perbaikan.menunggu_konfirmasi', [
            'units' => $units
        ]);  
    }
    
    /**
     * Ambil data perbaikan dalam status pengecekan
     */
    public function status_perbaikan_pengecekan()
    {
        $units = Units::where('status', 1)->orderBy('name', 'asc')->get();
        return view('transaction.perbaikan.pengecekan', [
            'units' => $units
        ]);  
    }
    
    /**
     * Ambil data perbaikan dalam status proses pengerjaan
     */
    public function status_perbaikan_proses()
    {
        $units = Units::where('status', 1)->orderBy('name', 'asc')->get();
        return view('transaction.perbaikan.proses', [
            'units' => $units
        ]);  
    }
    
    /**
     * Ambil data perbaikan dalam status selesai dikerjakan
     */
    public function status_perbaikan_selesai()
    {
        $units = Units::where('status', 1)->orderBy('name', 'asc')->get();
        return view('transaction.perbaikan.selesai', [
            'units' => $units
        ]);  
    }
    
    /**
     * Ambil data perbaikan dalam status dibatalkan
     */
    public function status_perbaikan_dibatalkan()
    {
        $units = Units::where('status', 1)->orderBy('name', 'asc')->get();
        return view('transaction.perbaikan.dibatalkan', [
            'units' => $units
        ]);  
    }
    
    /**
     * Ambil data perbaikan dalam status riwayat
     */
    public function status_perbaikan_riwayat()
    {
        $units = Units::where('status', 1)->orderBy('name', 'asc')->get();
        return view('transaction.perbaikan.riwayat', [
            'units' => $units
        ]);  
    }
}
