@extends('layouts.masterAdmin')

@section('content1')

<div class="container">
    <br/><br/>
  <h2>Appointments</h2>




  <form action="search_data" method="GET">
    <select name="doctor_name">
        <option value="" disabled selected>Select Doctor</option>
        <option value="Dr. fathima amra">Dr. fathima amra</option>
        <option value="Dr. Sudarshana Herath">Dr. Sudarshana Herath</option>
        <option value="Dr. Kalpana Munasinghe">Dr. Kalpana Munasinghe</option>
    </select>
    <input type="date" name="appointment_date">
    <button type="submit" style="background-color: green; color: white;" >Search</button>
</form><br/>









   <!--<form action="search_data" method="GET">
    <input  type="text" name="doctor_name" placeholder="Doctor's Name">
    <input type="date" name="appointment_date">
    <button type="submit">Search</button>
</form>




 <form action="search_data" method="GET">
    <input type ="text" name="search">
    <button type="submit">search</button>

</form>-->


    @if($appointments->isEmpty())
        <p>No appointments found.</p>
    @else
        <table class="table" style="width: 138%; border: 1px solid black;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Patient Name</th>
                    <th>Contact Number</th>
                    <th> Email</th>
                    <th>Doctor</th>
                    <th>Department</th>

                    <th>Appointment Date</th>
                    <th>Contact Preference</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->patient_name }}</td>
                    <td>{{ $appointment->contact_number }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->choose_doctor }}</td> <!-- Assuming 'doctor' is the relationship method -->
                    <td>{{ $appointment->department }}</td>

                    <td>{{ $appointment->appointment_date }}</td>
                    <td>{{ $appointment->contact_preference }}</td>


                    <td>
                        <div class="btn-group" role="group" aria-label="appointment Actions">
                            <a href="{{ url('list/'.$appointment->id.'/e') }}" class="btn btn-success">Edit</a>
                            <a href="{{ url('list/'.$appointment->id.'/delete') }}" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this appointment?')">Delete</a>
                        </div>
                    </td>



                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection
