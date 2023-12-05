<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users1;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Login'); 
    }

    public function login(Request $request)
    {
        $inputUsername = $request->input('username');
        $inputPassword = $request->input('password');

        $user = users1::where('username', $inputUsername)->first();

        if ($user && password_verify($inputPassword, $user->password)) {
            Session::put('username', $inputUsername);
            return redirect('/website');
        } else {
            return redirect('/Login');
        }
    }

    public function website()
    {
        return view('website'); // Buat view website.blade.php
    }
}
?>
