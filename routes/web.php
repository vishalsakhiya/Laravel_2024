<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminControllers\DashboardController;
use App\Http\Controllers\AdminControllers\ProfileController;
use App\Http\Controllers\AdminControllers\DoctorController;
use App\Http\Controllers\AdminControllers\PatientController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AuthController::class,'login_show'])->name('login');
Route::post('/login-store',[AuthController::class,'login_store']);
Route::get('/register-show',[AuthController::class,'register_show'])->name('register');
Route::post('/register-store',[AuthController::class,'register_store']);
Route::get('/logout-store',[AuthController::class,'logout_store']);

// Start Admin
Route::prefix('admin')->group(function () { 

    Route::get('/dashboard-show',[DashboardController::class,'dashboard_show'])->name('dashboard');
    
    // Start Profile
    Route::get('/admin-profile-show',[ProfileController::class,'admin_profile_show'])->name('profile.show');
    Route::post('/admin-profile-store/{id}',[ProfileController::class,'admin_profile_store'])->name('profile.store');

    // Start Doctor
    Route::get('/add-doctor-show',[DoctorController::class,'add_doctor_show'])->name('doctor.add_show');
    Route::post('/add-doctor-store',[DoctorController::class,'add_doctor_store'])->name('doctor.store');
    Route::get('/doctor-all-show',[DoctorController::class,'doctor_all_show'])->name('doctor.all_show');
    Route::get('/edit-doctor-show/{id}',[DoctorController::class,'edit_doctor_show'])->name('doctor.edit_show');
    Route::post('/edit-doctor-store/{id}',[DoctorController::class,'edit_doctor_store'])->name('doctor.edit');
    Route::get('/delete-doctor-store/{id}',[DoctorController::class,'delete_doctor_store'])->name('doctor.delete');

    // Start Patient
    Route::get('/add-patient-show',[PatientController::class,'add_patient_show'])->name('patient.add_show');
    Route::post('/add-patient-store',[PatientController::class,'add_patient_store'])->name('patient.store');
    Route::get('/patient-all-show',[PatientController::class,'patient_all_show'])->name('patient.all_show');
    Route::get('/edit-patient-show/{id}',[PatientController::class,'edit_patient_show'])->name('patient.edit_show');
    Route::post('/edit-patient-store/{id}',[PatientController::class,'edit_patient_store'])->name('patient.edit');
    Route::get('/delete-patient-store/{id}',[PatientController::class,'delete_patient_store'])->name('patient.delete');

 });
// End Admin

