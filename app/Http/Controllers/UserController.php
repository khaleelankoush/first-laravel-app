<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    function createRandomUser(Request $request)
    {
        $user = User::create([
            "name" => "Khaleel",
            "email" => "khaleel.ankoush@gmail.com",
            "password" => "123456789"
        ]);
        return $user;
    }

    function register(Request $request)
    {
        $newUser = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => Hash::make($request->input("password"))
        ]);

        return $newUser;
    }

    function login(Request $request)
    {
        $user = User::where("email", $request->input("email"))->first();
        if (!$user) {
            return response()->json(["message" => "User not found"], 401);
        }

        if (!Hash::check($request->input("password"), $user->password)) {
            return response()->json(["message" => "Wrong password"], 401);
        }

        $token = $user->createToken("auth_token");
        return response()->json(["token" => $token->plainTextToken]);
    }
}
