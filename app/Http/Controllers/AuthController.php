<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Exception;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            DB::beginTransaction();

            $credentials = $request->only('email', 'password', 'username');

            // Validasi input
            $validateData = Validator::make($credentials, [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6',
                'username' => 'required|string'
            ]);

            if ($validateData->fails()) {
                return response()->json(['error' => 'Validation failed', 'messages' => $validateData->errors()], 422);
            }

            // Buat user baru
            $newUser = User::create([
                'email' => $credentials['email'],
                'password' => Hash::make($credentials['password']),
                'username' => $credentials['username'],
            ]);

            // Generate token setelah user dibuat
            $token = $newUser->createToken('authToken')->plainTextToken;

            DB::commit();

            return response()->json([
                'message' => 'User registered successfully',
                'data' => [
                    'user' => $newUser,
                    'token' => $token,
                ],
            ], 201);
        } catch (Exception $exception) {
            DB::rollBack();
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari pengguna berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Debug: Cek apakah password cocok menggunakan Hash::check()
        if ($user && Hash::check($request->password, $user->password)) {
            // Buat token baru
            $token = $user->createToken('authToken')->plainTextToken;

            session(['username' => $user->username]);

            // Kembalikan token dan data pengguna
            return response()->json([
                'token' => $token,
                'user' => [
                    'id' => $user->id,
                    'email' => $user->email,
                    'username' => $user->username,
                ],
            ], 200);
        }

        // Jika login gagal
        return response()->json(['error' => 'Incorrect email or password'], 401);
    }

    public function logout(Request $request)
    {
        try {
            // Menghapus token dari pengguna saat ini
            $user = Auth::user();
            $user->tokens->each(function ($token) {
                $token->delete();
            });

            // Menghapus sesi username (jika menggunakan sesi)
            session()->flush();

            return response()->json(['message' => 'Successfully logged out'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'Logout failed: ' . $e->getMessage()], 500);
        }
    }
}
