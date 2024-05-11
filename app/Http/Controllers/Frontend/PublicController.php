<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('frontend-guest.index');
        } else {
            return redirect()->route('login'); // Arahkan ke halaman login jika belum login
        }
    }

    public function investasi()
    {
        return view('frontend-guest.investasi');
    }

    public function jadwal()
    {
        return view('frontend-guest.jadwal');
    }

    public function pengukuran()
    {
        return view('frontend-guest.pengukuran');
    }

    public function pengumuman()
    {
        return view('frontend-guest.pengumuman');
    }
}

