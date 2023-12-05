<?php
// app/Http/Controllers/AccountController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\users1;

class AccountController extends Controller
{
    public function confirmDelete()
    {
        return view('Hapusakun');
    }

    public function deleteAccount()
    {
        // Hapus akun pengguna dari basis data
        $username = session('username');
        $user = users1::where('username', $username)->first();
        $user->delete();

        // Logout pengguna
        Auth::logout();

        return redirect('Login');
    }
}
