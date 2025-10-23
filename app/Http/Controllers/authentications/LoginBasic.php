<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;
use Carbon\Carbon;

class LoginBasic extends Controller
{
    public function index()
    {
        return view('content.authentications.signin');
    }

public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            // Delete any existing tokens for this user (prevent multiple tokens)
            $user->tokens()->delete();
            
            // Create token with 5-minute expiration for testing
            $token = $user->createToken('auth-token', ['*'], now()->addHours(24))->plainTextToken;

            // Store token in session for blade views
            session(['auth_token' => $token]);
            session(['user' => $user]); // Store user in session too
            
            $request->session()->regenerate();

            // Calculate token expiration time (5 minutes from now)
            $expiresAt = now()->addHours(24)->timestamp;

            // Return JSON response with token for AJAX requests
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'token' => $token,
                    'expires_at' => $expiresAt,
                    'expires_in' => 24 * 60 * 60, 
                    'user' => [
                    
                        'name' => $user->name,
                        'email' => $user->email,
                        
                    ],
                    'redirect' => $user->role === 'admin' ? '/dashboard' : '/'
                ]);
            }

            // Regular form submission
            if ($user->role === 'admin') {
                return redirect()->intended('/dashboard')->with('success', 'Welcome back, Admin! ');
            } else {
                return redirect()->intended('/')->with('success', 'Login successful! ');
            }
        }

        if ($request->expectsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

     public function logout(Request $request)
{
    // Get token before logout for additional cleanup
    $token = $request->bearerToken() ?: $request->input('auth_token') ?: session('auth_token');
    
    // Revoke all user tokens if force logout is requested
    if ($request->input('force_logout') && Auth::check()) {
        Auth::user()->tokens()->delete();
    }

    // Revoke current Sanctum token if it exists
    if ($request->user()) {
        $request->user()->currentAccessToken()?->delete();
    }

    // Traditional Laravel logout
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Clear all session data
    session()->flush();
    session()->forget('auth_token');
    session()->forget('user');

    // Additional cleanup: delete the specific token from database
    if ($token) {
        PersonalAccessToken::findToken($token)?->delete();
    }

    // Return JSON response for API calls
    if ($request->expectsJson()) {
        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully from all sessions',
            'redirect' => '/signin'
        ]);
    }

    // Return redirect for traditional form submissions
    return redirect('/signin')->with('success', 'Logged out successfully!');
}


   // Add a method to check token status
    public function checkToken(Request $request)
{
    if (!$request->user()) {
        return response()->json([
            'valid' => false,
            'message' => 'No authenticated user',
            'action' => 'clear_storage' // Tell frontend to clear localStorage
        ], 401);
    }

    $token = $request->user()->currentAccessToken();
    
    if (!$token) {
        return response()->json([
            'valid' => false,
            'message' => 'No active token',
            'action' => 'clear_storage'
        ], 401);
    }

    $isExpired = $token->created_at->lessThan(now()->subHours(24));

    // If expired, delete the token and logout
    if ($isExpired) {
        $token->delete();
        Auth::logout();
                    $request->session()->invalidate();
            $request->session()->regenerateToken();

        // session()->flush();
        
        return response()->json([
            'valid' => false,
            'expired' => true,
            'message' => 'Token expired',
            'action' => 'clear_storage', // Tell frontend to clear localStorage
            'redirect' => '/signin'
        ], 401);
    }

    $timeRemaining = $token->created_at->addHours(24)->diffInSeconds(now());

    return response()->json([
        'valid' => true,
        'expired' => false,
        'time_remaining' => $timeRemaining,
        'created_at' => $token->created_at,
        'expires_at' => $token->created_at->addHours(24),
        'user' => [
            'id' => $request->user()->id,
            'name' => $request->user()->name,
            'email' => $request->user()->email,
            'role' => $request->user()->role,
        ]
    ]);
}
    
}