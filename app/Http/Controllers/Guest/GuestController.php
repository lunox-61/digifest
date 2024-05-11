<?php

namespace App\Http\Controllers\Guest;

use App\Models\Post;
use App\Models\Embeds;
use App\Models\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class GuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $slider = slider::where('status', '0')->get();
        $posts = Post::orderBy('created_at', 'asc')->where('status', '0')->paginate(4);
        $jadwal = Jadwal::orderBy('created_at', 'asc')->where('status', '0')->paginate(4);
        return view('tamu.index', compact('slider'))->with('posts', $posts)->with('jadwal', $jadwal);
    }

    public function pengumuman()
    {
        $posts = Post::orderBy('created_at', 'asc')->where('status', '0')->paginate(10);
        return view('tamu.pengumuman')->with('posts', $posts);
    }

    public function jadwal()
    {
        $jadwal = Jadwal::orderBy('created_at', 'asc')->where('status', '0')->paginate(10);
        return view('tamu.jadwal')->with('jadwal', $jadwal);
    }

    public function investasi()
    {
        $embed = Embeds::orderBy('created_at', 'desc')->get();
        return view('tamu.investasi')->with('embed', $embed);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function showPost(string $post_slug)
    {
        $posts = Post::where('slug', $post_slug)->where('status', '0')->first();
        if (!$posts) {
            abort(404); // Handle jika post tidak ditemukan
        }
        $jadwal = Jadwal::find($posts->jadwal_id); // Ganti jadwal_id dengan kolom yang sesuai di tabel posts
        return view('tamu.view.viewPengumuman', compact('posts', 'jadwal'));
    }

    public function showJadwal(string $jadwal_slug)
    {
        $jadwal = Jadwal::where('slug', $jadwal_slug)->where('status', '0')->first();
        return view('tamu.view.viewJadwal', compact('jadwal'));
    }
}
