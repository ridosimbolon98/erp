<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    /**
     * Menampilkan data dashboard.
     */
    public function show(): View
    {
        return view('dashboard.index', []);
    }

    /**
     * Menampilkan halaman profile
     */
    public function profile(): View
    {
        $user = auth()->user();
        return view('auth.profile',['user' => $user]);
    }

    /**
     * Update profile user
     */
    public function updateProfile(Request $request)
    {
        $data = [
            'role'     => $request->role,
            'unit'     => $request->unit,
            'password' => Hash::make($request->password),
        ];

        if ($request->password === $request->konfirmasi_password) {
            $update_profile = User::where('id', $request->id)->update($data);
            if ($update_profile) {
                return redirect('profile');
            }
        } else {
            return redirect()->route('login')->with('failed', 'Gagal update profile');
        }
    }
}
