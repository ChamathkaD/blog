<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateProfile(UpdateProfile $request){
        return back()->with('success', 'Update Successfully');
    }
}
