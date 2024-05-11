<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Embeds;
use App\Models\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = slider::where('status', '0')->get();
        $posts = Post::orderBy('created_at', 'asc')->where('status', '0')->paginate(4);
        $jadwal = Jadwal::orderBy('created_at', 'asc')->where('status', '0')->paginate(4);
        return view('frontend.index', compact('slider'))->with('posts', $posts)->with('jadwal', $jadwal);
    }
    public function pengumuman()
    {
        $posts = Post::orderBy('created_at', 'asc')->where('status', '0')->paginate(10);
        return view('frontend.pengumuman')->with('posts', $posts);
    }
    public function jadwal()
    {
        $jadwal = Jadwal::orderBy('created_at', 'asc')->where('status', '0')->paginate(10);
        return view('frontend.jadwal')->with('jadwal', $jadwal);
    }
    public function form()
    {
        return view('formulir.index');
    }
    public function investasi()
    {
        $embed = Embeds::orderBy('created_at', 'desc')->get();
        return view('frontend.investasi')->with('embed', $embed);
    }
    public function test()
    {
        return view('frontend.test');
    }
    /*
    public function slider()
    {
        $slider = slider::where('status', '0')->get();
        return view('frontend.slider', compact('slider'));
    }
*/



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPost(string $post_slug)
    {
        $posts = Post::where('slug', $post_slug)->where('status', '0')->first();
        if (!$posts) {
            abort(404); // Handle jika post tidak ditemukan
        }
        $jadwal = Jadwal::find($posts->jadwal_id); // Ganti jadwal_id dengan kolom yang sesuai di tabel posts
        return view('frontend.view.viewPengumuman', compact('posts', 'jadwal'));
    }

    public function showJadwal(string $jadwal_slug)
    {
        $jadwal = Jadwal::where('slug', $jadwal_slug)->where('status', '0')->first();
        return view('frontend.view.viewJadwal', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
