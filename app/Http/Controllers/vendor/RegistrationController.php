<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\Userrecord;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registerIndex()
    {
        return view('vendor.vendor-registration');
    }

    public function vendorRegistration(Request $request)
    {
        $user = Userrecord::where('email' , $request->email)->first();
        if($user)
        {
            if($user->email === $request->email)
                {
                    return redirect()->route('vendorRegister')->with("danger" , "Use Different Email , This Email already exist.");
                }

        }
        // if($user->email === $request->email)
        // {
        //     return redirect()->route('vendorRegister')->with("danger" , "Use Different Email , This Email already exist.");
        // }
        else{
            $user = new Userrecord();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->zip_code = $request->zip_code;
            $user->phone_number = $request->phone_number;
            $user->roles = ["ROLE_VENDOR"];
            if(!$user->save())
            {
                return redirect()->route('vendorRegister')->with("danger" , "Try Agian , Something went wrong.");
            }
            else{
                return view('vendor.vendor-dashboard');
            }
        }
    }
}
