@extends('layouts.masterAdmin')

@section('title')
    Dashboard - admin
@endsection








@section('content1')

<div class="container">
    <br/><br/><br/>
    <div class="row gx-4">

        <div class="col-6 col-lg-3 col-md-6 mb-3"> <!-- Margin-bottom to add space between cards -->
            <div class="card" style="background-color: #94e6a7; width: 200px; height: 100px;"> <!-- Light green background with increased size -->
                <div class="card-body px-3 py-4-5" style="padding: 15px;">
                    <div class="row">

                        <div class="col-md-12 text-center" >
                            <h6 class="text-muted font-semibold" >Appointments</h6>
                            <h6 class="font-extrabold mb-0"  >{{ $recordappo }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3 col-md-6 mb-3"> <!-- Margin-bottom to add space between cards -->
            <div class="card" style="background-color: #7fbbfc; width: 200px; height: 100px;"> <!-- Light blue background with increased size -->
                <div class="card-body px-3 py-4-5" style="padding: 20px;">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h6 class="text-muted font-semibold">patients</h6>
                            <h6 class="font-extrabold mb-0">{{ $recordpatient }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-6 col-lg-3 col-md-6 mb-3"> <!-- Margin-bottom to add space between cards -->
            <div class="card" style="background-color: #ffb663; width: 200px; height: 100px;"> <!-- Light blue background with increased size -->
                <div class="card-body px-3 py-4-5" style="padding: 20px;">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h6 class="text-muted font-semibold">Doctors</h6>
                            <h6 class="font-extrabold mb-0">{{ $recordDoctor }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>










    </div>
</div>

@endsection





@section('scripts')

@endsection


