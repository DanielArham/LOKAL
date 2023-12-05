<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
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

        $user = user::where('username', $inputUsername)->first();

        if ($user && password_verify($inputPassword, $user->password)) {
            Session::put('username', $inputUsername);
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
