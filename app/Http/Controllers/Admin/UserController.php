<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Formulir;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

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
    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);
        if ($user) {
            $user->username = $request->username;
            $user->email = $request->email;
            $user->role_as = $request->role_as;
            $user->update();
            return redirect('admin/users')->with('message', 'Update Succsess');
        }
        return redirect('admin/users')->with('message', 'No User Found');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // Ambil hasil formulir yang terkait dengan pengguna
        $formulirs = $user->formulirs; // Ganti 'formulirs' dengan nama relasi yang sesuai

        // Hapus hasil formulir terkait jika ada
        if ($formulirs) {
            foreach ($formulirs as $formulir) {
                $formulir->delete();
            }
        }

        // Hapus pengguna
        $user->delete();

        return redirect()->back()->with('message', 'User and related form results deleted successfully.');
    }
}
