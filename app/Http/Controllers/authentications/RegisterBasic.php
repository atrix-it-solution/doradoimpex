<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RegisterBasic extends Controller
{
    public function index()
    {
        return view('content.authentications.auth-register-basic');
    }

      public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors()
                ], 422);
            }
            
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'customer',
        ]);

        // Auto login after registration
        Auth::login($user);
        
        // Create token with 5-minute expiration for testing
        $token = $user->createToken('auth-token', ['*'], now()->addMinutes(5))->plainTextToken;
        
        // Store token in session
        session(['auth_token' => $token]);

        // Calculate token expiration time
        $expiresAt = now()->addMinutes(5)->timestamp;

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'token' => $token,
                'expires_at' => $expiresAt,
                'expires_in' => 5 * 60, // 5 minutes in seconds
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ],
                'message' => 'Registration successful! Token expires in 5 minutes.',
                'redirect' => '/'
            ]);
        }

        return redirect('/')->with('success', 'Registration successful! Token expires in 5 minutes.');
    }
}