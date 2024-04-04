<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Userrecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function loginIndex()
    {
        return view('admin.login');
    }

    public function signin(Request $request)
    {
        try {
            // dd(Auth::attempt($request->only('email', 'password')),$request->only('email', 'password'));
            $user = Userrecord::where('email', $request->email)->first();
            if($user->roles == ["ROLE_ADMIN"]){
            // dd(Hash::check($request->password,$user->password));
            if (Auth::attempt($request->only('email', 'password'))) {
                $user = Auth::user();
                $userRecord = UserRecord::find($user->id);
                if(!$userRecord)
                {
                    throw new \Exception("Failed to Login user.");
                }
                return view('admin.admin-home');
            }
        }
        elseif($user->roles== ["ROLE_VENDOR"]){
            if (Auth::attempt($request->only('email', 'password'))) {
                $user = Auth::user();
                $userRecord = UserRecord::find($user->id);
                if(!$userRecord)
                {
                    throw new \Exception("Failed to Login user.");
                }
                // return view('vendor.vendor-dashboard');
                return redirect()->route('vendorDashboard');
            }
        }
        else{
            throw new \Exception("Failed to Login user , you don't have access.");
        }
        } catch (\Exception $e) {
            // Catch any exceptions thrown during the authentication attempt
            return view('admin.login')->with('error', $e->getMessage());
        }
    }

    public function signupIndex()
    {
        return view('admin.signup');
    }

    public function signup(Request $request)
    {
        try {
            $user = new Userrecord();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->roles = ["ROLE_ADMIN"];

            if (!$user->save()) {
                throw new \Exception("Failed to save user record.");
            }

            return view('admin.admin-home');
        } catch (\Exception $e) {
            return view('admin.signup')->with('error', $e->getMessage());
        }
    }

    public function resetPasswordIndex()
    {
        return view('admin.reset-password');
    }
}
