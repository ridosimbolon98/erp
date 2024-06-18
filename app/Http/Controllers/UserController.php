<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Menampilkan halaman user
     */
    public function index(): View
    {
        return view('pengaturan.user', []);
    }
}
