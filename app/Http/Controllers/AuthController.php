<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); 
    }

    public function login(Request $request)
{
    $inputUsername = $request->input('username');
    $inputPassword = $request->input('password');

    $user = User::where('username', $inputUsername)->first();

    if ($user && password_verify($inputPassword, $user->password)) {
        // Menyimpan data nomor hp dalam session
        Session::put('username', $inputUsername);
        Session::put('nomor_hp', $user->nomor_hp);

        return redirect('/website');
    } else {
        return redirect('/login');
    }
}


    public function website()
    {
        return view('index'); // Buat view website.blade.php
    }
}
?>
