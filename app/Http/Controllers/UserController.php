<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function updateProfile(Request $request) {
        // Validasi data yang diterima
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'profile_image' => 'nullable|image|max:2048',
        ]);
    
        // Cari user berdasarkan token (misalnya)
        /**
         * @var User $user
         */
        $user = Auth::user();

    
        // Update data user
        if ($user) {
            $user->username = $validated['username'];
            $user->email = $validated['email'];
            
            // Cek jika ada file gambar
            if ($request->hasFile('profile_image')) {
                // Simpan file gambar ke direktori 'profile_images' di storage
                $path = $request->file('profile_image')->store('profile_images', 'public');
                $user->profile_image = $path;
            }
        }
        
        $user->save();
    
        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user,
        ], 200);

        return response()->json(['error' => 'User not found'], 404);
    }    
}