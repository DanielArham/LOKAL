<?php
// app/Http/Controllers/PasswordController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\users1; 

class PasswordController extends Controller
{
    public function showGantipwForm()
    {
        return view('Gantipw');
    }

    public function changePassword(Request $request)
    {
        // Mendapatkan username dari sesi
        $username = session('username');

        // Mencari pengguna berdasarkan username
        $user = users1::where('username', $username)->first();

        if (!$user) {
            return "Username tidak ditemukan.";
        }

        $oldPassword = $request->input('old_password');
        $newPassword = $request->input('new_password');

        if (password_verify($oldPassword, $user->password)) {
            $user->password = bcrypt($newPassword);
            $user->save();

            return "Password berhasil diubah.";
        } else {
            return "Password lama salah. Password tidak diubah.";
        }
    }
}
