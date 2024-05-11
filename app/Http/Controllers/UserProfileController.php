<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserProfileController extends Controller
{
    public function show(User $user)
    {
        return view('user.profile.show', compact('user'));
    }

    public function changePassword(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Check if the old password matches
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'The old password is incorrect.']);
        }

        // Update the password
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.profile.show', ['user' => $user->id])->with('success', 'Password changed successfully.');
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $data = $request->except('password');

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $data['photo'] = $filePath;
        }

        // Include password field if it's provided
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);
        $request->session()->flash('success', 'Profile updated successfully.');

        return redirect()->route('user.profile.show', ['user' => $user->id]);
    }
}