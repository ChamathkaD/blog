<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


}
