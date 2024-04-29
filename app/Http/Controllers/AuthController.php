<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login_show(Request $req)
    {
        return view('/login');
    }

    public function login_store(Request $req)
    {
        if ($req->input('submit')) {

            $req->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            $getEmail = $req->input('email');
            $getPassword = $req->input('password');

            $userCheck = User::where('email', $getEmail)->first();
            if ($userCheck) {
                if (Hash::check($getPassword, $userCheck->password)) {
                    if ($userCheck->role_id == config('global.roles.Admin')) {
                        $req->Session()->put('admin',$userCheck);
                        return redirect()->route('dashboard'); 
                    }
                } else {
                    session()->flash('message', 'Password is worng.');
                    session()->flash('alert-class', 'alert-danger');

                    return back()->withInput();
                }
            } else {
                session()->flash('message', 'Email is worng.');
                session()->flash('alert-class', 'alert-danger');

                return back()->withInput();
            }

        }
    }
    public function register_show(Request $req)
    {
        return view('/register');
    }
    public function register_store(Request $req)
    {
        if ($req->input('submit')) {
            $userData = new User();

            $req->validate([
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'password' => 'required|min:8'
            ]);

            $userData->first_name = $req->input('fname');
            $userData->role_id = $req->input('role');
            $userData->last_name = $req->input('lname');
            $userData->country = $req->input('country');
            $userData->city = $req->input('city');
            $userData->email = $req->input('email');
            $userData->gender = $req->input('gender');
            $userData->phone = $req->input('phone');
            $userData->password = Hash::make($req->input('password'));
            $userData->save();

            return redirect()->route('login');
        }
    }

    public function logout_store (Request $req)
    {
        if($req->session()->get('admin'))
        {
            session()->forget('admin');
            return redirect()->route('login');
        }
    }

}