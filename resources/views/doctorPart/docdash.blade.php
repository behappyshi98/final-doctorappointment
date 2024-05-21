@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="sidebar" style="background-color: #89ebc2; color: #fff; padding-top: 20px; height: 100vh;">
                <h3 style="text-align: center;font-family:'Times New Roman', Times, serif;color: black;">Safe Life Medical Center</h3>
                <hr style="border-top: 1px solid #fff;">
             <div class="sidebar-wrapper">
                <ul class="nav flex-column" >
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('doc') }}"><i class="fas fa-home"></i> Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show') }}"><i class="fas fa-user"></i> Appointments</a>
                    </li>

                </ul>
             </div>
            </div>
        </div>

        <!-- Main Content-->

        <div class="col-md-9">
            <br/>
            <h1 style="font-family:'Times New Roman', Times, serif;">Welcome Doctor Dashboard</h1>
            <div class="row gx-4">

                <div class="col-6 col-lg-3 col-md-6 mb-3"> <!-- Margin-bottom to add space between cards -->
                    <div class="card" style="background-color: #94e6a7; width: 200px; height: 100px;"> <!-- Light green background with increased size -->
                        <div class="card-body px-3 py-4-5" style="padding: 15px;">
                            <div class="row">

                                <div class="col-md-12 text-center" >
                                    <h6 class="text-muted font-semibold" >Appointments</h6>
                                    <h6 class="font-extrabold mb-0"  >{{ $recoappo }}</h6>
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
                                    <h6 class="font-extrabold mb-0">{{ $recopatient }}</h6>
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
                                    <h6 class="font-extrabold mb-0">{{ $recoDoctor }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>










            </div>
        </div>








    </div>

</div>

@endsection
