<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user; // Pastikan ini sesuai dengan struktur dan penamaan model Anda
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function showResetForm()
    {
        return view('reset_password');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:user,username',
            'phone' => 'required|exists:user,phone',
            'new-password' => 'required|min:8',
        ]);

        $username = $request->input('username');
        $phone = $request->input('phone');
        $newPassword = $request->input('new-password');

        // Memeriksa apakah username dan nomor hp cocok
        $user = user::where('username', $username)
                    ->where('phone', $phone)
                    ->first();

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'Username dan Nomor Handphone tidak cocok.'])->withInput();
        }

        // Ganti password user
        $user->password = Hash::make($newPassword);
        $user->save();

        return redirect('/login')->with('success', 'Password berhasil direset. Silakan masuk dengan password baru Anda.');
    }
}