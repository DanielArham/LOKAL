<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'new-username' => 'required|unique:user,username',
            'new-password' => 'required|min:8',
            'new-email' => 'required|email|unique:user,email',
            'new-phone' => 'required|string|max:15|unique:user,phone',
        ]);

        $newUsername = $request->input('new-username');
        $newPassword = $request->input('new-password');
        $newEmail = $request->input('new-email');
        $newPhone = $request->input('new-phone');
        $role = 'user'; 

        $user = new user();
        $user->username = $newUsername;
        $user->password = Hash::make($newPassword);
        $user->email = $newEmail; 
        $user->phone = $newPhone;
        $user->role = $role;
        $user->save();

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan masuk dengan akun Anda.');
    }
    }

