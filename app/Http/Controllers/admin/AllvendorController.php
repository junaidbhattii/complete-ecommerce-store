<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Userrecord;
use Illuminate\Http\Request;

class AllvendorController extends Controller
{
    public function Index()
    {
        $users = Userrecord::whereJsonContains('roles', ["ROLE_VENDOR"] )->get();

        return view('admin.vendors.vendors' , compact('users'));
    }

    public function View($id)
    {
        $user = Userrecord::findOrFail($id);
        return view('admin.user.view',compact('user'));
    }

    public function Edit($id)
    {
        $user = Userrecord::findOrFail($id);
        return view('admin.vendors.edit',compact('user'));
    }

    public function EditUser(Request $request,$id)
    {
        // try{
            $user = Userrecord::findOrFail($id);
            $user->name = $request->input('name') ?? $user->name;
            $user->email = $request->input('email') ?? $user->email;
            // $user->city = $request->input('city') ?? $user->city;
            // $user->zip_code = $request->input('zip_code') ?? $user->zip_code;
            if(!$user->update())
            {
                throw new \Exception("Failed to edit vendor.");
            }
            else{
            return redirect()->route('vendors')->with('success','Vendor Update Successfuly');
            }
        // }
        // catch (\Exception $e) {
        //     // Catch any exceptions thrown during the authentication attempt
        //     return view('admin.login')->with('error', $e->getMessage());
        // }
    }

    public function Delete($id)
    {
        $user = Userrecord::findOrFail($id);
        $user->delete();
        return redirect()->route('vendors')->with('success', 'Vendor deleted successfully.');
    }
}
