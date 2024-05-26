




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
                            <label for="choose_doctor">Choose Doctor:</label>
                            <select class="form-control" name="choose_doctor" id="choose_doctor" required>
                                @foreach($tors as $tor)
                                    <option value="{{ $tor->id }}" data-name="{{ $tor->name }}">{{ $tor->name }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="choose_doctor_id" id="choose_doctor_id">
                            <input type="hidden" name="choose_doctor_name" id="choose_doctor_name">
                        </div>



                    <!--<div class="form-row">
                        <label for="choose_doctor">Choose Doctor:</label>
                            <select class="form-control" name="choose_doctor" required>


                                @foreach($tors as $tor)
                                <option value="{{ $tor->name }}">{{ $tor->name }}</option>

                            @endforeach


                                <option value="" disabled selected>Select Doctor</option>

                                <option value="Dr. fathima amra">Dr. fathima amra</option>
                                <option value="Dr. Sudarshana Herath">Dr. Sudarshana Herath</option>
                                <option value="Dr. Kalpana Munasinghe">Dr. Kalpana Munasinghe</option>

                            </select>

                            @foreach($tors as $tor)
                            <input type="hidden" name="choose_doctor_id" value="{{ $tor->id }}">
                             @endforeach
                    </div>-->










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


                    <script>
                        // Add event listener to the select element
                        document.getElementById('choose_doctor').addEventListener('change', function() {
                            // Get the selected option
                            var selectedOption = this.options[this.selectedIndex];
                            // Get the doctor's ID and name from the selected option's attributes
                            var doctorId = selectedOption.value;
                            var doctorName = selectedOption.getAttribute('data-name');
                            // Set the value of the hidden input fields to the selected doctor's ID and name
                            document.getElementById('choose_doctor_id').value = doctorId;
                            document.getElementById('choose_doctor_name').value = doctorName;
                        });
                    </script>







                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="myfile/vendor/bootstrap/js/bootstrap.js"></script>

@endsection
