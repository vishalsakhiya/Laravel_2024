<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_show(Request $req)
    {
        if(session()->has('admin'))
        {
            $countDoctor = User::where('role_id',config('global.roles.Doctor'))->get();
            $countPatient = Patient::all();

            return view('Admin.dashboard',compact('countDoctor','countPatient'));
        }
        else
        {
            return redirect()->route('login');
        }
    }
}
