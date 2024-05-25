




@extends('layouts.app')


@section('content')




<div class="inner-layer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">


                <div>
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>

                    @endif

                </div>

                <div>
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>

                    @endif

                </div>



                <div class="form-data text-center">
                    <div class="form-head">
                        <h2 style="font-family: 'Times New Roman', Times, serif;">Book Appointment</h2>
                    </div>
                    <div class="form-body">


        <form action="{{ route('store') }}" method="POST" >
             @csrf

                        <div class="form-row">
                            <input type="text" name="patient_name" id="patient_name" placeholder="Patient Name" class="form-control" required>
                        </div>
                        <div class="form-row">
                            <input type="text" name="contact_number" id="contact_number" placeholder="Contact Number" class="form-control" required>
                        </div>

                        <div class="form-row">

                                <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control"  required>

                        </div>






                       <div class="form-row">

                            <select class="form-control" name="choose_doctor" required>
                                <option value="" disabled selected>Select Doctor</option>

                                <option value="Dr. fathima amra">Dr. fathima amra</option>
                                <option value="Dr. Sudarshana Herath">Dr. Sudarshana Herath</option>
                                <option value="Dr. Kalpana Munasinghe">Dr. Kalpana Munasinghe</option>

                            </select>
                        </div>



                        <div class="form-row">

                            <select class="form-control" name="department" required>
                                <option value="" disabled selected>Select Department </option>

                                <option value="Neurology">Neurology</option>
                                <option value="Cardiology">Cardiology</option>
                                <option value="Hepatology">Hepatology</option>

                            </select>
                        </div>






                        <div class="form-row">
                            <label for="date">Relevant Appointment Date Of Doctor</label><br>
                            <label for="date" style="color: rgb(216, 147, 43); font-family:'Times New Roman', Times, serif;">Maximum Appointments are 10 for each date</label>
                            <input type="date" name='appointment_date' id="appointment_date" placeholder="Appointment Date" class="form-control" required>
                        </div>
                        <div class="form-row">
                            <label for="contact_preference">Contact Preference</label>
                            <select id="contact_preference" name='contact_preference' class="form-control" required>

                                <option value="email">Via Email</option>
                                <option value="phone">Via Phone</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <button class="btn btn-success" style="width: 80px;">submit</button>
                             <!--<button class="btn btn-appointment" type="submit">Book Now</button>-->
                        </div>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
