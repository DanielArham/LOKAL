<?php

namespace App\Http\Controllers;
use App\Models\user; // Pastikan untuk mengimpor model User
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showCheckoutForm(Request $request)
    {
        // Logika untuk menampilkan halaman checkout
        return view('checkout', [
            'serviceName' => $request->serviceName,
            'price' => $request->price,
        ]);
    }

    public function getUserInfo()
    {
        $user = auth()->user();

        return response()->json([
            'name' => $user->name,
            'phone_number' => $user->phone_number,
            // Tambahkan informasi lain yang dibutuhkan
        ]);
    }

    public function getNomorHpByUsername(Request $request)
    {
        // Mendapatkan username dari query parameter
        $username = $request->input('username');

        // Mendapatkan data user berdasarkan username
        $user = user::where('username', $username)->first();

        if ($user) {
            // Jika user ditemukan, kembalikan nomor hp
            return response()->json(['nomor_hp' => $user->phone]);
        } else {
            // Jika user tidak ditemukan, kembalikan respons error
            return response()->json(['error' => 'User not found'], 404);
        }
    }
}
