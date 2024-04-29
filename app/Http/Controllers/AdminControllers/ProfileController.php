<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function admin_profile_show(Request $req)
    {
        if (session()->has('admin')) {
            $getAdmin = $req->session()->get('admin')->first();
            return view('Admin.profile', compact('getAdmin'));
        } else {
            return redirect()->route('login');
        }
    }

    public function admin_profile_store(Request $req, $id)
    {
        if ($req->input('update')) {
            $adminData = User::where('id', $id)->first();
            if ($req->hasfile('profile')) {
                $file = $req->file('profile');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move('UserImage', $fileName);
                $adminData->profile = $fileName;
            }

            $adminData->first_name = $req->input('fname');
            $adminData->last_name = $req->input('lname');
            $adminData->country = $req->input('country');
            $adminData->city = $req->input('city');
            $adminData->email = $req->input('email');
            $adminData->gender = $req->input('gender');
            $adminData->phone = $req->input('phone');
            $adminData->address = $req->input('address');
            $adminData->save();

            return back()->withInput();
        }
    }
}