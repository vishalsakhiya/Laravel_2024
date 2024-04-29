<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class DoctorController extends Controller
{
    public function add_doctor_show(Request $req)
    {
        if ($req->session()->has('admin')) {
            return view('Admin.add_doctor');
        } else {
            return redirect()->route('login');
        }
    }

    public function add_doctor_store(Request $req)
    {
        if ($req->input('submit')) {
            $addDoctore = new User();

            $req->validate([
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'password' => 'required|min:8'
            ]);

            if ($req->hasfile('profile')) {
                $file = $req->file('profile');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move('UserImage', $fileName);
                $addDoctore->profile = $fileName;
            }

            $addDoctore->first_name = $req->input('fname');
            $addDoctore->last_name = $req->input('lname');
            $addDoctore->role_id = $req->input('role');
            $addDoctore->country = $req->input('country');
            $addDoctore->city = $req->input('city');
            $addDoctore->email = $req->input('email');
            $addDoctore->gender = $req->input('gender');
            $addDoctore->phone = $req->input('phone');
            $addDoctore->address = $req->input('address');
            $addDoctore->password = Hash::make($req->input('password'));
            $addDoctore->save();

            session()->flash('message', 'Doctor Add Successfully.');
            session()->flash('alert-class', 'alert-success');

            return back()->withInput();
        }
    }

    public function doctor_all_show(Request $req)
    {
        if ($req->session()->has('admin')) {

            $doctorData = User::where('role_id',config('global.roles.Doctor'))->paginate(5);

            return view('Admin.view_doctor',compact('doctorData'));
        } else {
            return redirect()->route('login');
        }
    }
    
    public function edit_doctor_show(Request $req,$id)
    {
        if ($req->session()->has('admin')) {
            
            $getDoctors = User::where('id',$id)->first();

            return view('Admin.edit_doctor',compact('getDoctors'));

        } else {
            return redirect()->route('login');
        }
    }
    
    public function edit_doctor_store(Request $req,$id)
    {
        if ($req->input('update')) {

            $editDoctors = User::where('id',$id)->first();

            $req->validate([
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required',
                'gender' => 'required',
            ]);

            if ($req->hasfile('profile')) {

                $file = $req->file('profile');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move('UserImage', $fileName);
                $editDoctors->profile = $fileName;
            }

            $editDoctors->first_name = $req->input('fname');
            $editDoctors->last_name = $req->input('lname');
            $editDoctors->role_id = $req->input('role');
            $editDoctors->country = $req->input('country');
            $editDoctors->city = $req->input('city');
            $editDoctors->email = $req->input('email');
            $editDoctors->gender = $req->input('gender');
            $editDoctors->phone = $req->input('phone');
            $editDoctors->address = $req->input('address');
            $editDoctors->save();

            return redirect()->route('doctor.all_show');

        }
    }
    
    public function delete_doctor_store(Request $req,$id)
    {
        if ($req->session()->has('admin')) {
            
            $deleteDoctors = User::find($id);
            $deleteDoctors->delete();

            return back()->withInput();

        } else {
            return redirect()->route('login');
        }
    }




}