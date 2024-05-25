@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">





                <div class="card-header">
                    <h4>Doctors profile

                    </h4>


                    <div class="btn btn-primary float-end">
                        <form action="search_doctor" method="GET">
                            <input type="text" name="search">
                            <button type="submit">search</button>
                            <a href="{{ url('/') }}" class=" btn btn-primary ">Back</a>
                        </form>



                    </div>


                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    @foreach ($docs as $doc )



                    <div class="card mb-3" style="max-width: 700px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ $doc->image }}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Doctor Name: Dr. <b>{{ $doc->name }}</b></h5>
                               <p class="card-text">Specialist:  <b>{{ $doc->specialist }}</b></p>
                              <p class="card-text">Gender:  <b>{{ $doc->gender }}</b></p>
                              <p class="card-text">Contact Number:  <b>{{ $doc->contact_number }}</b></p>
                              <p class="card-text">Hospital:  <b>{{ $doc->hospital }}</b></p>
                              <p class="card-text"><small class="text-body-secondary">Appointment Date:  <b>{{ $doc->appointment_date }}</b></small></p>
                              <p class="card-text">Start time:  <b>{{ $doc->start_time }}</b>AM  |  End time:  <b>{{ $doc->end_time }}</b>PM</p>




                            </div>
                          </div>
                        </div>
                    </div>

                    @endforeach



                </div>
            </div>
        </div>
    </div>
</div>








@endsection
