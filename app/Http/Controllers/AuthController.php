<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)) return response()->json(['Error' => 'Credentials invalids'], 401);
        $user->tokens()->delete();
        $token = $user->createToken($request->device_name)->plainTextToken;
        return response()->json(['token' => $token], 200);
    }
}
