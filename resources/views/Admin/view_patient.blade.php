@extends('Admin.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Manage Patients</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Patients
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Responsive tables Start -->
        <div class="pd-20 card-box mb-30">
      
            <div class="table-responsive">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Patient Name</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody id="new_blog">
                        @foreach ($patientData as $patient)
                            <tr>
                                <th scope="row">{{$patient->id}}</th>
                                <td>{{$patient->first_name}} {{$patient->last_name}}</td>
                                <td>{{$patient->doctor_first_name}} {{$patient->doctor_last_name}}</td>
                                <td>{{$patient->email}}</td>
                                <td>{{$patient->address}}</td>
                                <td>{{$patient->phone}}</td>
                                <td class="text-center">
                                    <a href="{{route('patient.edit_show',$patient->id)}}" class="btn btn-outline-primary btn-sm my-1">Edit</a>
                                    <a href="{{route('patient.delete',$patient->id)}}" data-id="" class="btn btn-outline-danger btn-sm my-1 delete_blog">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex flex-row-reverse">
                {!! $patientData->links() !!}
            </div>
        </div>
        <!-- Responsive tables End -->
    </div>
</div>
@endsection