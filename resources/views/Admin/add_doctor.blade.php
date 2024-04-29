@extends('Admin.master')
@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>ADD Doctor</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    ADD Doctor
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="pd-20 card-box mb-30">
                <div class="wizard-content">
                    <form action="{{route('doctor.store')}}" method="POST" enctype="multipart/form-data" class="tab-wizard wizard-circle wizard vertical">
                        @csrf
                        @if(Session::has('message'))
                            <p class="alert {{Session::get('alert-class','alert-info')}}" id="myElem">{{Session::get('message')}}</p>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name :</label>
                                    <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                                </div>
                                @error('fname')
                                    <div class="alert alert-danger">
                                        <strong>{{$message}}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name :</label>
                                    <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                                </div>
                                @error('lname')
                                    <div class="alert alert-danger">
                                        <strong>{{$message}}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email :</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email ID">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">
                                        <strong>{{$message}}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile Number :</label>
                                    <input type="number" name="phone" class="form-control" placeholder="Enter MObile Number">
                                </div>
                                @error('phone')
                                    <div class="alert alert-danger">
                                        <strong>{{$message}}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country :</label>
                                    <input type="text" name="country" class="form-control" placeholder="Enter Country Name">
                                </div>
                                @error('country')
                                    <div class="alert alert-danger">
                                        <strong>{{$message}}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City :</label>
                                    <input type="text" name="city" class="form-control" placeholder="Enter City Name">
                                </div>
                                @error('city')
                                    <div class="alert alert-danger">
                                        <strong>{{$message}}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address :</label>
                                    <textarea class="form-control" name="address" cols="30" rows="5" placeholder="Enter Address"></textarea> 
                                </div>
                                @error('address')
                                    <div class="alert alert-danger">
                                        <strong>{{$message}}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image :</label>
                                    <input type="file" class="form-control" name="profile" placeholder="Enter Profile">
                                </div>
                                @error('profile')
                                    <div class="alert alert-danger">
                                        <strong>{{$message}}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <div class="d-flex">
                                        <div
                                            class="custom-control custom-radio mb-5 mr-20"
                                        >
                                            <input
                                                type="radio"
                                                id="customRadio4"
                                                name="gender"
                                                class="custom-control-input"
                                                value="Male"
                                                
                                            />
                                            <label
                                                class="custom-control-label weight-400"
                                                for="customRadio4"
                                                >Male</label
                                            >
                                        </div>
                                        <div
                                            class="custom-control custom-radio mb-5"
                                        >
                                            <input
                                                type="radio"
                                                id="customRadio5"
                                                name="gender"
                                                value="Female"
                                                class="custom-control-input"
                                                
                                            />
                                            <label
                                                class="custom-control-label weight-400"
                                                for="customRadio5"
                                                >Female</label
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Password :</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                </div>
                                @error('password')
                                    <div class="alert alert-danger">
                                        <strong>{{$message}}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Role</label>
                                    <div class="d-flex">
                                        <div
                                            class="custom-control custom-radio mb-5 mr-20"
                                        >
                                            <input
                                                type="radio"
                                                id="customRadio4"
                                                name="role"
                                                class="custom-control-input"
                                                value="2"
                                                checked
                                                
                                            />
                                            <label
                                                class="custom-control-label weight-400"
                                                for="customRadio4"
                                                >Doctor</label
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-right mt-3 mb-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline-primary" name="submit" value="ADD Doctor">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('add_Doctor')
    <script>
        $(document).ready(function() {
            $("#myElem").show();
            setTimeout(function() 
            { 
                $("#myElem").hide(); 
            }, 5000);
        })
    </script>
@endpush