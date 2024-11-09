<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Exception;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');

            $validateData = Validator::make($credentials, [
                'email' => 'required|email:dns',
                'password' => 'required|string|min:6',
            ]);

            // Validate the request
            if ($validateData->fails()) {
                return response()->json(['error' => 'Validation failed', 'messages' => $validateData->errors()], 422);
            }

            $user = User::where('email', $request->email)->first();

            // Check if the user exists and password matches
            if (!$user || !Hash::check($request->password, $user->password)) {
                throw new Exception("Invalid credentials provided.");
            }

            // If credentials are valid, generate token
            $token = Auth::guard('api')->attempt($credentials);

            if (!$token) {
                throw new Exception("Invalid Credentials");
            }

            return response()->json([
                "token" => $token,
                "expired_in" => Auth::guard('api')->factory()->getTTL() * 60,
            ], 200);
        } catch (Exception $exception) {
            // Return the exception message in the response
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function register(Request $request)
    {
        try {
            DB::beginTransaction();

            $credentials = $request->only('email', 'password', 'username');

            // Validate input (optional, but a good practice)
            $validateData = Validator::make($credentials, [
                'email' => 'required|email|unique:users,email', // Ensures the email is unique
                'password' => 'required|string|min:6',
                'username' => 'required|string'
            ]);

            if ($validateData->fails()) {
                return response()->json(['error' => 'Validation failed', 'messages' => $validateData->errors()], 422);
            }

            // Check if the email already exists
            $user = User::where('email', $credentials['email'])->first();
            if ($user) {
                throw new Exception('Email already exists');
            }

            // Create the new user
            $newUser = User::create([
                'email' => $credentials['email'],
                'password' => Hash::make($credentials['password']),
                'username' => $credentials['username'],
            ]);

            // Attempt to create the token
            $token = Auth::guard('api')->attempt([
                'email' => $credentials['email'],
                'password' => $credentials['password'],
            ]);

            if (!$token) {
                throw new Exception("Invalid Credentials");
            }

            // Commit the transaction if everything is successful
            DB::commit();

            // Return token and expiration time
            return response()->json([
                "token" => $token,
                "expired_in" => Auth::guard('api')->factory()->getTTL() * 60,
            ], 200);
        } catch (Exception $exception) {
            DB::rollBack();  // Rollback the transaction on error
            return response()->json(['error' => $exception->getMessage()], 500);  // Return structured error message
        }
    }

    public function logout()
    {
        try {
            // Log the user out
            Auth::logout();

            // Return a success response
            return response()->json(['message' => 'Successfully logged out'], 200);
        } catch (Exception $exception) {
            // Return an error response with the exception message
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
