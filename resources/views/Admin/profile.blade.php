@extends('Admin.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Profile</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Profile
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                <div class="pd-20 card-box height-100-p">
                    <div class="profile-photo">
                        <a
                            href="modal"
                            data-toggle="modal"
                            data-target="#modal"
                            class="edit-avatar"
                            ><i class="fa fa-pencil"></i
                        ></a>
                        <img
                            src="{{url('UserImage',$getAdmin->profile)}}"
                            alt=""
                            class="avatar-photo"
                        />
                        <div
                            class="modal fade"
                            id="modal"
                            tabindex="-1"
                            role="dialog"
                            aria-labelledby="modalLabel"
                            aria-hidden="true"
                        >
                            <div
                                class="modal-dialog modal-dialog-centered"
                                role="document"
                            >
                                <div class="modal-content">
                                    <div class="modal-body pd-5">
                                        <div class="img-container">
                                            <img
                                                id="image"
                                                src="{{url('UserImage')}}"
                                                alt="Picture"
                                            />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        {{-- <input
                                            type="submit"
                                            value="Update"
                                            class="btn btn-primary"
                                        /> --}}
                                        <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-dismiss="modal"
                                        >
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-center h5 mb-0">{{$getAdmin->first_name}} {{$getAdmin->last_name}}</h5>
                    <p class="text-center text-muted font-14">
                        {{-- Lorem ipsum dolor sit amet --}}
                    </p>
                    <div class="profile-info">
                        <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                        <ul>
                            <li>
                                <span>Email Address:</span>
                                {{$getAdmin->email}}
                            </li>
                            <li>
                                <span>Phone Number:</span>
                                {{$getAdmin->phone}}
                            </li>
                            <li>
                                <span>Country:</span>
                                {{$getAdmin->country}}
                            </li>
                            <li>
                                <span>Address:</span>
                                {{$getAdmin->address}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                        <div class="tab height-100-p">
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        data-toggle="tab"
                                        href="#setting"
                                        role="tab"
                                        >Settings</a
                                    >
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!-- Timeline Tab start -->
                                
                                <!-- Timeline Tab End -->
                                <!-- Tasks Tab start -->
                                
                                <!-- Tasks Tab End -->
                                <!-- Setting Tab start -->
                                <div
                                    class="tab-pane fade show active height-100-p"
                                    id="setting"
                                    role="tabpanel"
                                >
                                    <div class="profile-setting">
                                        <form action="{{route('profile.store',$getAdmin->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <ul class="profile-edit-list row">
                                                <li class="weight-500 col-md-12">
                                                    <h4 class="text-blue h5 mb-20">
                                                        Edit Your Personal Setting
                                                    </h4>
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input
                                                            class="form-control form-control-lg"
                                                            type="text"
                                                            placeholder="Enter Your First Name"
                                                            name="fname"
                                                            value="{{$getAdmin->first_name}}"
                                                            required
                                                        />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input
                                                            class="form-control form-control-lg"
                                                            type="text"
                                                            name="lname"
                                                            placeholder="Enter Your Last Name"
                                                            value="{{$getAdmin->last_name}}"
                                                            required
                                                        />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mobile Number</label>
                                                        <input
                                                            class="form-control form-control-lg"
                                                            type="number"
                                                            name="phone"
                                                            placeholder="Enter Your Mobile Number"
                                                            value="{{$getAdmin->phone}}"
                                                            required
                                                        />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input
                                                            class="form-control form-control-lg"
                                                            type="email"
                                                            name="email"
                                                            value="{{$getAdmin->email}}"
                                                            placeholder="Enter Your Email ID"
                                                            required
                                                        />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <input
                                                            class="form-control form-control-lg"
                                                            type="text"
                                                            name="country"
                                                            placeholder="Enter Your Country Name"
                                                            value="{{$getAdmin->country}}"
                                                            required
                                                        />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input
                                                            class="form-control form-control-lg"
                                                            type="text"
                                                            name="city"
                                                            placeholder="Enter Your City Name"
                                                            value="{{$getAdmin->city}}"
                                                            required
                                                        />
                                                    </div>
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
                                                                    {{$getAdmin->gender == 'Male' ? 'checked' : ''}}
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
                                                                    {{$getAdmin->gender == 'Female' ? 'checked' : ''}}
                                                                />
                                                                <label
                                                                    class="custom-control-label weight-400"
                                                                    for="customRadio5"
                                                                    >Female</label
                                                                >
                                                            </div>
                                                        </div>
                                                        <label>Mobile Number</label>
                                                        <input
                                                            class="form-control form-control-lg"
                                                            type="number"
                                                            name="mobile_number"
                                                            placeholder="Enter Your Mobile Number"
                                                            value="{{$getAdmin->phone}}"
                                                        />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea class="form-control" name="address" id="address" placeholder="Enter Your Address" cols="30" rows="4">{{$getAdmin->address}}
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Profile</label>
                                                        <input type="file" name="profile" value="{{$getAdmin->profile}}" class="form-control">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <input
                                                            type="submit"
                                                            class="btn btn-primary"
                                                            value="Update Information"
                                                            name="update"
                                                        />
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <!-- Setting Tab End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection