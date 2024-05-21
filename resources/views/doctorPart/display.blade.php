


@extends('layouts.app')

@section('content')



<div class="container">
<div class="col-md-9">

    <div class="content d-flex justify-content-center align-items-center" style="height: 600px;">
        <div>


        <h2>Appointment details</h2>

        <form action="search" method="GET">
            <select name="doctor_name">
                <option value="" disabled selected>Select Doctor</option>
                <option value="Dr. fathima amra">Dr. fathima amra</option>
                <option value="Dr. Sudarshana Herath">Dr. Sudarshana Herath</option>
                <option value="Dr. Kalpana Munasinghe">Dr. Kalpana Munasinghe</option>
            </select>
            <input type="date" name="appointment_date">
            <button type="submit" style="background-color: green; color: white;" >Search</button>

        </form> <br/>
        <div>
            <h4>Go Back
            <a href="{{ url('doctordash') }}" >
                <button style="background-color: rgb(154, 196, 199); color: rgb(109, 99, 99);" >Click</button></a></h4>
            </div>







        @if($appodisplay->isEmpty())
        <p>No appointments found.</p>
            @else



            <table class="table" style="width: 138%;" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Patient Name</th>
                    <th>Contact Number</th>
                    <th>Doctor</th>
                    <th>Symptoms</th>
                    <th>blood group</th>
                    <th>Appointment Date</th>
                    <th>Contact Preference</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appodisplay as $key=>$items )
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $items->patient_name }}</td>
                    <td>{{ $items->contact_number }}</td>
                    <td>{{ $items->choose_doctor }}</td> <!-- Assuming 'doctor' is the relationship method -->
                    <td>{{ $items->symptoms }}</td>
                    <td>{{ $items->blood_group }}</td>
                    <td>{{ $items->appointment_date }}</td>
                    <td>{{ $items->contact_preference }}</td>


                    <td>
                        <div class="btn-group" role="group" aria-label="appointment Actions">
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="{{ url('show/'.$items->id.'/delete') }}" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this appointment?')">Delete</a>
                        </div>
                    </td>



                </tr>
                @endforeach
            </tbody>

            </table>
            @endif


    </div>
</div>

</div>
</div>


@endsection
