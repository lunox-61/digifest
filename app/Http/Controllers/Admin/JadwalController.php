<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jadwal;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\JadwalFormRequest;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('admin.jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JadwalFormRequest $request)
    {
        $data = $request->validated();
        $jadwal = new Jadwal;
        $jadwal->title = $data['title'];
        $jadwal->slug = Str::slug($data['slug']);
        $jadwal->description = $data['description'];
        $jadwal->status = $request->status == true ? '1' : '0';
        $jadwal->created_by = Auth::user()->id;
        $jadwal->save();

        return redirect('admin/jadwal')->with('message', 'Jadwal Ditambah!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($jadwal_id)
    {
        $jadwal = Jadwal::find($jadwal_id);
        return view('admin.jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JadwalFormRequest $request, $jadwal_id)
    {
        $data = $request->validated();
        $jadwal = Jadwal::find($jadwal_id);
        $jadwal->title = $data['title'];
        $jadwal->slug = Str::slug($data['slug']);
        $jadwal->description = $data['description'];
        $jadwal->status = $request->status == true ? '1' : '0';
        $jadwal->created_by = Auth::user()->id;
        $jadwal->update();

        return redirect('admin/jadwal')->with('message', 'Jadwal Diperbaharui!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($jadwal_id)
    {
        $jadwal = Jadwal::find($jadwal_id);
        if ($jadwal) {
            $jadwal->delete();
            return redirect('admin/jadwal')->with('message', 'Delete Success!!');
        } else {
            return redirect('admin/jadwal')->with('message', 'No jadwal Found');
        }
    }
}
