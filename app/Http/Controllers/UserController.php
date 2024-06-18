<?php

namespace App\Http\Controllers;

use App\Models\Units;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Menampilkan halaman user
     */
    public function index(): View
    {
        $units = Units::where('status', 1)->orderBy('name', 'asc')->get();
        $roles = Role::get();
        
        return view('pengaturan.user', [
            'units' => $units,
            'roles' => $roles,
        ]);
    }
    
    /**
     * Menampilkan halaman roles
     */
    public function roles(): View
    {
        $units = Units::where('status', 1)->orderBy('name', 'asc')->get();
        $roles = Role::get();
        
        return view('pengaturan.role', [
            'units' => $units,
            'roles' => $roles,
        ]);
    }
}
