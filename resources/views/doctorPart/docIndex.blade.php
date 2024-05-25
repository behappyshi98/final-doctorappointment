@extends('layouts.masterAdmin')

@section('content1')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Doctor Schedule
                        <a href="{{ url('doctor/c') }}" class="btn btn-secondory float-end">Add Doctor</a>
                    </h4>
                </div>
                <div class="card-body">



                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Specialist</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Contact Number</th>
                                <th>Hospital</th>
                                <th>Room Number</th>

                                <th>Appointment Date</th>
                                <th>Limit</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->id }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->specialist }}</td>
                                <td>{{ $doctor->gender }}</td>
                                <td>{{ $doctor->email }}</td>
                                <td><img src="{{ asset($doctor->image) }}" alt="{{ $doctor->name }}" width="50">
                                        </td>
                                <td>{{ $doctor->contact_number }}</td>
                                <td>{{ $doctor->hospital }}</td>
                                <td>{{ $doctor->room_number }}</td>

                                <td>{{ $doctor->appointment_date }}</td>
                                <td>{{ $doctor->maximum_appointment }}</td>
                                <td>{{ $doctor->start_time }}</td>
                                <td>{{ $doctor->end_time }}</td>


                                <td>
                                    <div class="btn-group" role="group" aria-label="Doctor Actions">
                                        <a href="{{ url('doctor/'.$doctor->id.'/e') }}" class="btn btn-success">Edit</a>
                                        <a href="{{ url('doctor/'.$doctor->id.'/delete') }}" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this doctor?')">Delete</a>
                                    </div>
                                </td>




                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
