<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan data dashboard.
     */
    public function show(): View
    {
        return view('dashboard.index', []);
    }
}
