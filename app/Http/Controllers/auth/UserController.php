<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Userrecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function indexRegister()
    {
        return view('register-login');
    }
    public function register(Request $request)
    {
        try {
            $user = new Userrecord();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->roles = ["ROLE_USER"];

            if (!$user->save()) {
                throw new \Exception("Failed to save user record.");
            }

            return view('index');
        } catch (\Exception $e) {
            return view('register-login')->with('error', $e->getMessage());
        }
    }
    public function login(Request $request)
    {
        try {
            // dd(Auth::attempt($request->only('email', 'password')),$request->only('email', 'password'));
            $user = Userrecord::where('email', $request->email)->first();
            // dd(Hash::check($request->password,$user->password));
            if (Auth::attempt($request->only('email', 'password'))) {
                $user = Auth::user();
                $userRecord = UserRecord::find($user->id);
                if(!$userRecord)
                {
                    throw new \Exception("Failed to Login user.");
                }
                return view('index');
            }
        } catch (\Exception $e) {
            // Catch any exceptions thrown during the authentication attempt
            return view('register-login')->with('error', $e->getMessage());
        }
    }
}
