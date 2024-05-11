<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserFeController extends Controller
{
    public function loginUser()
    {
        // Logika untuk halaman utama user di frontend
        return view('frontend.user.loginUser'); // Ganti dengan nama view yang sesuai
    }

    public function profileUser()
    {
        // Logika untuk halaman profil user di frontend
        return view('frontend.user.profileUser'); // Ganti dengan nama view yang sesuai
    }

    public function registerUser()
    {
        // Logika untuk halaman registrasi user di frontend
        return view('frontend.user.registerUser'); // Ganti dengan nama view yang sesuai
    }

    public function loginReq(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Berhasil login
            return redirect('/user')->with('status', 'Login successful!');
        } else {
            // Gagal login
            return redirect()->route('user.login')->with('error', 'Invalid credentials');
        }
    }

    public function registerReq(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Change 'gambar' to 'photo'
        ]);

        // Simpan data pengguna baru ke dalam database
        $file = $request->file('photo');

        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        if ($file !== null) {
            $fileName = $file->getClientOriginalName(); // Ambil nama file asli
            $filePath = $file->storeAs('uploads', $fileName, 'public'); // Simpan gambar dengan nama asli
            $user->photo = $filePath; // Change 'gambar' to 'photo'
        }

        $user->role_as = '0'; // Atur peran user

        $user->save();

        return redirect('/user')->with('status', 'Registration successful! Please log in.');
    }

    public function logoutUser()
    {
        Auth::logout();
        return redirect('/main');
    }
}
