<?php

namespace App\Repository;

use Illuminate\Http\Request;
use App\Models\User;

class UserRepository
{
    public function show($id) {
        $user = User::where('id', $id)->with('contacts')->first();
        if(!$user) return response()->json(['error' => 'User not found!'], 404);
        return response()->json(['User' => $user], 200);
    }

    public function index($request) {
        return User::all();
    }
}
