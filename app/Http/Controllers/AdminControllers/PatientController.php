<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function add_patient_show(Request $req)
    {
        if ($req->session()->has('admin')) {
            $getDoctors = User::where('role_id', config('global.roles.Doctor'))->get();

            return view('Admin.add_patient', compact('getDoctors'));
        } else {
            return redirect()->route('login');
        }
    }

    public function add_patient_store(Request $req)
    {
        if ($req->input('submit')) {
            $addPatient = new Patient();

            $req->validate([
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required',
            ]);

            if ($req->hasfile('profile')) {

                $file = $req->file('profile');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move('UserImage', $fileName);
                $addPatient->profile = $fileName;
            }

            $addPatient->first_name = $req->input('fname');
            $addPatient->last_name = $req->input('lname');
            $addPatient->doctor_id = $req->input('doctor_id');
            $addPatient->country = $req->input('country');
            $addPatient->city = $req->input('city');
            $addPatient->email = $req->input('email');
            $addPatient->gender = $req->input('gender');
            $addPatient->phone = $req->input('phone');
            $addPatient->address = $req->input('address');
            $addPatient->save();

            session()->flash('message', 'Patient Add Successfully.');
            session()->flash('alert-class', 'alert-success');

            return back()->withInput();
        }
    }

    public function patient_all_show(Request $req)
    {
        if ($req->session()->has('admin')) {

            $patientData = Patient::select(
                'patients.id',
                'patients.first_name',
                'patients.last_name',
                'patients.email',
                'patients.address',
                'patients.phone',
                'users.first_name as doctor_first_name',
                'users.last_name as doctor_last_name'
            )
                ->join('users', 'users.id', 'patients.doctor_id')
                ->paginate(5);

            return view('Admin.view_patient', compact('patientData'));
        } else {
            return redirect()->route('login');
        }
    }

    public function edit_patient_show(Request $req, $id)
    {
        if ($req->session()->has('admin')) {

            $getDoctors = User::where('role_id', config('global.roles.Doctor'))->get();
            $getPatient = Patient::select(
                'patients.id',
                'patients.first_name',
                'patients.last_name',
                'patients.country',
                'patients.gender',
                'patients.city',
                'patients.email',
                'patients.address',
                'patients.phone',
                'users.id as doctor_id',
                'users.first_name as doctor_first_name',
                'users.last_name as doctor_last_name'
            )
                ->join('users', 'users.id', 'patients.doctor_id')
                ->where('patients.id', $id)
                ->first();

            return view('Admin.edit_patient', compact('getPatient', 'getDoctors'));


        } else {
            return redirect()->route('login');
        }
    }

    public function edit_patient_store(Request $req, $id)
    {
        if ($req->input('update')) {

            $editpatients = Patient::where('id', $id)->first();

            $req->validate([
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required',
            ]);

            if ($req->hasfile('profile')) {

                $file = $req->file('profile');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move('UserImage', $fileName);
                $editpatients->profile = $fileName;
            }

            $editpatients->first_name = $req->input('fname');
            $editpatients->last_name = $req->input('lname');
            $editpatients->doctor_id = $req->input('doctor_id');
            $editpatients->country = $req->input('country');
            $editpatients->city = $req->input('city');
            $editpatients->email = $req->input('email');
            $editpatients->gender = $req->input('gender');
            $editpatients->phone = $req->input('phone');
            $editpatients->address = $req->input('address');
            $editpatients->save();

            return redirect()->route('patient.all_show');

        }
    }

    public function delete_patient_store(Request $req, $id)
    {
        if ($req->session()->has('admin')) {

            $deletePatients = Patient::find($id);
            $deletePatients->delete();

            return back()->withInput();

        } else {
            return redirect()->route('login');
        }
    }
}