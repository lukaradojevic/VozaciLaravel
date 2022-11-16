<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthKontroler extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'Validator error: ' => $validator->errors()
            ]);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'Poruka' => 'Korisnik je uspešno registrovan!'
        ]);
    }




    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'Validator error: ' => $validator->errors()
            ]);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'Poruka' => 'Pokušajte ponovo!'
            ]);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('LNTOKEN')->plainTextToken;

        return response()->json([
            'Poruka' => 'Korisnik je uspešno ulogovan!',
            'Token' => $token
        ]);
    }





    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'Poruka' => 'Korisnik je uspešno odjavljen!',
        ]);
    }
}
