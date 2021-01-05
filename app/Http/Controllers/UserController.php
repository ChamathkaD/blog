<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePassword;
use App\Http\Requests\UpdateProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function updateProfile(UpdateProfile $request){


        if ($request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $image = $request->file('image');
                $extention = $image->getClientOriginalExtension();
                $filename = date('y_m_d_h_i_s') . "." . $extention;
                Storage::disk('public')->put('img/users/'.$filename, file_get_contents($image));
            }
            if (Storage::disk('public')->exists('img/users/'.Auth::user()->image)){
                try {
                    (Storage::disk('public')->delete('img/users/'.Auth::user()->image));
                } catch (\Exception $exception){
                    return null;
                }
            }
        }



        User::where('id', Auth::id())->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'bio' => $request->input('bio'),
            'image' => isset($filename) ? $filename: Auth::user()->image,

        ]);
        return back()->with('success', 'Update Successfully');




    }

    public function updatePassword(UpdatePassword $request){

        if (Hash::check($request->current_password, Auth::user()->password)){
            $hashed_password = Hash::make($request->password_confirmation);

            User::where('id', Auth::id())->update([
               'password' => $hashed_password,
            ]);

            return back()->with('success', 'Your Password Has been Updated');
        }else{
            return back()->withErrors(['current_password'=>'Your Current Password is not valid']);
        }

    }

    public function destroyAccount(){
        $id = Auth::id();
        Auth::logout();
        User::where('id', $id)->delete();
        return redirect()->route('login')->with('success', 'Your account has been permanently removed from the system');


    }


}
