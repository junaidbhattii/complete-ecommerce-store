<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Userrecord;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function Index()
    {
        $user = Auth::user();
        return view('admin.account' , compact('user'));
    }
    public function edit($id)
    {
        $user = Userrecord::findOrFail($id);
        return view('admin.edit-account' , compact('user'));
    }

    public function editProfile(Request $request , $id)
    {
        $user = Userrecord::findOrFail($id);
        $user->name = $request->input('name') ?? $user->name;
        $user->email = $request->input('email') ?? $user->email;

        if(!$user->update())
        {
            throw new \Exception("Failed to edit user profile.");
        }
        else{
            return redirect()->route('account')->with('success' , 'User Profile edit successfully');
        }
    }
}
