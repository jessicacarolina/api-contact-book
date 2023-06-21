<?php

namespace App\Service;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use App\Jobs\SendMailJob;

class UserService
{
    public function create($request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:8|max:11',
            'password' => 'required|min:6',
        ]);
        if ($validator->fails()) return response()->json(['error' => 'Invalid data.'], 400);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();
        SendMailJob::dispatch($user);

        return response()->json(['user' => $user, 'message' => 'User created successfully!'], 200);
    }

    public function update($request, $id) {
        $validator = Validator::make($request->all(), [
            'name' => 'min:3',
            'email' => 'email|unique:users',
            'phone' => 'min:8|max:11',
        ]);
        if ($validator->fails()) return response()->json(['error' => 'Invalid data'], 400);
        $user = User::find($id);
        if(!$user) return response()->json(['error' => 'User not found!'], 404);
        $user->fill($request->only(['name', 'email', 'phone']));
        $user->save();
        return response()->json(['User' => $user, 'message' => 'Contact updated successfully!'], 200);
    }

    public function destroy($id) {
        $user = User::find($id);
        if(!$user) return response()->json(['error' => 'User not found!'], 404);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully!'], 200);
    }
}
