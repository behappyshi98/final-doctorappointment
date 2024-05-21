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
                    <h4>Edit Doctor
                        <a href="{{ url('doctor') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('doctor/'.$doctor->id.'/e') }}" method="POST" enctype="multipart/form-data" >
                        @csrf

                        @method('PUT')
                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" id="name" class="form-control" value="{{ $doctor->name }}" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="specialist" class="col-md-4 col-form-label text-md-end">Specialist</label>
                            <div class="col-md-8">
                                <input type="text" name="specialist" id="specialist" class="form-control" value="{{ $doctor->specialist }}" />
                                @error('specialist') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">Gender</label>
                            <div class="col-md-8">
                                <select name="gender" id="gender" class="form-select" >
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>

                                </select>
                                @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                            <div class="col-md-8">
                                <input type="email" name="email" id="email" class="form-control" value="{{ $doctor->email }}" />
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" id="image" class="form-control" >
                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="contact_number" class="col-md-4 col-form-label text-md-end">Contact Number</label>
                            <div class="col-md-8">
                                <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{ $doctor->contact_number }}" />
                                @error('contact_number') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="hospital" class="col-md-4 col-form-label text-md-end">Hospital</label>
                            <div class="col-md-8">
                                <input type="text" name="hospital" id="hospital" class="form-control" value="{{ $doctor->hospital }}" />
                                @error('hospital') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="room_number" class="col-md-4 col-form-label text-md-end">Room Number</label>
                            <div class="col-md-8">
                                <input type="text" name="room_number" id="room_number" class="form-control" value="{{ $doctor->room_number }}" />
                                @error('room_number') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="appointment_date" class="col-md-4 col-form-label text-md-end">Appointment Date</label>
                            <div class="col-md-8">
                                <input type="date" name="appointment_date" id="appointment_date" class="form-control" value="{{ $doctor->appointment_date }}" />
                                @error('appointment_date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="start_time" class="col-md-4 col-form-label text-md-end">Start Time</label>
                            <div class="col-md-8">
                                <input type="time" name="start_time" id="start_time" class="form-control" value="{{ $doctor->start_time }}" />
                                @error('start_time') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="end_time" class="col-md-4 col-form-label text-md-end">End Time</label>
                            <div class="col-md-8">
                                <input type="time" name="end_time" id="end_time" class="form-control" value="{{ $doctor->end_time }}" />
                                @error('end_time') <span class="text-danger">{{ $message }}</span> @enderror
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
