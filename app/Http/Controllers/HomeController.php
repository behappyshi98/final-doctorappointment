<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */











    public function adminHome()
    {

        $recordappo=DB::table('appointments')->count();
        $recordpatient=DB::table('users')->count();
        $recordDoctor=DB::table('doctors')->count();

        return view('admin.dashboard',compact('recordappo','recordpatient','recordDoctor'));
    }

    public function doctorHome()
    {


        $recoappo=DB::table('appointments')->count();
        $recopatient=DB::table('users')->count();
        $recoDoctor=DB::table('doctors')->count();

        return view('doctorPart.docdash',compact('recoappo','recopatient','recoDoctor'));
    }











}
