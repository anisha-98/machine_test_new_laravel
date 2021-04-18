<?php

namespace App\Http\Controllers;
use App\Models\Register;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function user_Register(Request $req)
    {
        $req->validate(
            ['name'=>'required|regex:/^[\pL\s\-]+$/u|max:20',
            'dob'=>'required',
            'email'=>'required|email|unique:registers',
            'password'=>'required|alpha_num|min:6',
            ]);
        $member=new Register;
        $member->select=$req->select;
        $member->name=$req->name;
        $member->dob=$req->dob;
        $member->email=$req->email;
        $member->password=Hash::make($req->password);;

        $query=$member->save();
        if($query)
            {
                return back()->with('success','successfully registered');
            }
            else
            {
                return back()->with('fail','something went wrong');
            }
}
}
