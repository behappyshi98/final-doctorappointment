@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit appointment
                        <a href="{{ url('list') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('list/'.$appointment->id.'/e') }}" method="POST" enctype="multipart/form-data" >
                        @csrf

                        @method('PUT')




                        <div class="mb-3 row">
                            <label for="patient_name" class="col-md-4 col-form-label text-md-end">patient name</label>
                            <div class="col-md-8">
                                <input type="text" name="patient_name" id="patient_name" placeholder="Patient Name" class="form-control" value="{{ $appointment->patient_name }}">
                                @error('patient_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="contact_number" class="col-md-4 col-form-label text-md-end">contact_number</label>
                            <div class="col-md-8">
                                <input type="text" name="contact_number" id="contact_number" placeholder="Contact Number" class="form-control" value="{{ $appointment->contact_number }}">
                                @error('patient_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>




                       <div class="mb-3 row">
                            <label for="choose_doctor" class="col-md-4 col-form-label text-md-end">Choose Doctor</label>
                            <div class="col-md-8">
                                <select class="form-control" name="choose_doctor" >

                                    <option value="Dr. fathima amra">Dr. fathima amra</option>
                                    <option value="Dr. Sudarshana Herath">Dr. Sudarshana Herath</option>
                                    <option value="Dr. Kalpana Munasinghe">Dr. Kalpana Munasinghe</option>

                                </select>
                                    @error('choose_doctor') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>



                        <div class="mb-3 row">
                            <label for="Symptoms" class="col-md-4 col-form-label text-md-end">Symptoms</label>
                            <div class="col-md-8">
                                <textarea placeholder="Symptoms" name='symptoms' id="symptoms" class="form-control" >{{ $appointment->symptoms }}</textarea>
                                    @error('Symptoms') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="blood_group" class="col-md-4 col-form-label text-md-end">blood group</label>
                            <div class="col-md-8">
                                <select class="form-control" name='blood_group' >


                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>



                                <!-- Add more options as needed -->
                                </select>
                                @error('choose_doctor') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="appointment date" class="col-md-4 col-form-label text-md-end">appointment date</label>
                            <div class="col-md-8">
                            <input type="date" name='appointment_date' id="appointment_date" placeholder="Appointment Date" class="form-control" value="{{ $appointment->appointment_date }}">
                            @error('appointment_date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="contact_preference" class="col-md-4 col-form-label text-md-end">contact_preference</label>
                            <div class="col-md-8">
                            <select id="contact_preference" name='contact_preference' class="form-control">

                                <option value="email">Via Email</option>
                                <option value="phone">Via Phone</option>
                            </select>
                            @error('contact_preference') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>
                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
