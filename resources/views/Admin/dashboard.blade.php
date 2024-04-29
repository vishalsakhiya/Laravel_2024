<?php
  use Illuminate\Support\Facades\Session;

  $sessionAdmin = Session::get('admin');
//   dd($sessionAdmin);
?>
@extends('Admin.master')
@section('content')
  <div class="pd-ltr-20">
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{url('images')}}/dashboard.png" alt="" />
            </div>
            <div class="col-md-8">
                <h4 class="font-20 weight-500 mb-10 text-capitalize">
                    Welcome back
                    <div class="weight-600 font-30 text-blue">{{$sessionAdmin->first_name}} {{$sessionAdmin->last_name}}</div>
                </h4>
            </div>
        </div>
    </div>
    <div class="row pb-10">
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3 polaroid">
                <a href="{{route('doctor.all_show')}}" id="instructor_card">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{$countDoctor->count()}}</div>
                            <div class="font-14 text-secondary weight-500">
                                Doctors
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#ffff">
                                <i class="icon-copy dw dw-user"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3 polaroid">
                <a href="{{route('patient.all_show')}}">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{$countPatient->count()}}</div>
                            <div class="font-14 text-secondary weight-500">
                                Patient
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#ddc622">
                                <span class="icon-copy ti-user"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row pb-10" style="margin-top: 10rem;">
        <div class="row align-items-center">
        </div>
    </div>
  </div>
@endsection