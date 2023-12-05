<?php

// app/Http/Controllers/RegistrationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users1;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('Registration'); // Buat view registration.blade.php
    }

    public function register(Request $request)
    {
        $request->validate([
            'new-username' => 'required|unique:users1,username',
            'new-password' => 'required|min:8',
        ]);

        $newUsername = $request->input('new-username');
        $newPassword = $request->input('new-password');

        $user = new users1();
        $user->username = $newUsername;
        $user->password = Hash::make($newPassword);
        $user->save();
        return redirect('/Login');
    }
}
?>