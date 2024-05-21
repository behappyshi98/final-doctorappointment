@extends('layouts.masterAdmin')

@section('content1')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Patient Details

                    </h4>
                </div>
                <div class="card-body">


                    <table class="table table-bordered table-striped" style="width: 110%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->dateofbirth }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>


                                <td>
                                    <div class="btn-group" role="group" aria-label="Doctor Actions">
                                        <a href="{{ url('user/'.$user->id.'/e') }}" class="btn btn-success">Edit</a>
                                        <a href="{{ url('user/'.$user->id.'/delete') }}" class="btn btn-danger"
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
