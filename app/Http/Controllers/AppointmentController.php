<?php

namespace App\Http\Controllers;




use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class AppointmentController extends Controller
{


    public function listview()
    {

       $appointments = Appointment::get();

     return view('appointment.appoIndex', compact('appointments'));
   }



   public function index()
   {

      return view('appointment.home');

   }



   public function search_data(Request $request)
{
    $doctorName = $request->input('doctor_name');
    $appointmentDate = $request->input('appointment_date');

    $query = DB::table('appointments');

    if ($doctorName) {
        $query->where('choose_doctor', $doctorName);
    }

    if ($appointmentDate) {
        $query->whereDate('appointment_date', $appointmentDate);
    }

    $appointments = $query->get();

    return view('appointment.appoIndex', compact('appointments'));

}




public function search(Request $request)
{
    $doctorName = $request->input('doctor_name');
    $appointmentDate = $request->input('appointment_date');

    $query = DB::table('appointments');

    if ($doctorName) {
        $query->where('choose_doctor', $doctorName);
    }

    if ($appointmentDate) {
        $query->whereDate('appointment_date', $appointmentDate);
    }

    $appodisplay = $query->get();

    return view('doctorPart.display', compact('appodisplay'));

}










    /* public function search_data(Request $request)
{
    $doctorName = $request->input('doctor_name');
    $appointmentDate = $request->input('appointment_date');

    $appointments = DB::table('appointments')
        ->where('choose_doctor', 'like', '%' . $doctorName . '%')
        ->when($appointmentDate, function ($query) use ($appointmentDate) {
            return $query->whereDate('appointment_date', $appointmentDate);
        })
        ->get();

    return view('appointment.appoIndex', compact('appointments'));
}




 public function search_data(Request $request)
   {

     $data=$request->input('search');
     $appointments = DB::table('appointments')->where('choose_doctor' , 'like' , '%' .$data . '%' )
    ->orwhere('appointment_date' , 'like' , '%' .$data . '%' )
     ->get();
     return view('appointment.appoIndex', compact('appointments'));

   }*/











    public function create()
    {

        //

    }

    /**
     * Store a newly created appointment in storage.
     *

     */



     public function store(Request $request)
     {


        $validatedData= $request->validate([
            'patient_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:10',
            'email' => 'required|email',
            'choose_doctor' => 'required',
            'department' => 'required',
           // 'blood_group' => 'required|string|max:3',
           'appointment_date' => 'required|date',
            'contact_preference' => 'required|string|in:email,phone',




        ]);


        $appointmentDate = Carbon::parse($validatedData['appointment_date']);
        if($appointmentDate->isPast()){

            return back()->with('error','Cannot be scheduled appointments for past dates');

        }


        $existingAppointmentsCount = Appointment::whereDate('appointment_date',$appointmentDate)->count();

        $appointmentLimit=10;
        if($existingAppointmentsCount >= $appointmentLimit){


            return back()->with('error','Maximum Appointments are 10 for this date ');
        }




        Appointment::create([

            'appointment_date' => $appointmentDate,

            'patient_name' => $validatedData['patient_name'],
            'contact_number' => $validatedData['contact_number'],
            'email' => $validatedData['email'],

            'choose_doctor' => $validatedData['choose_doctor'],
            'department' => $validatedData['department'],
            //'blood_group' => $validatedData['blood_group'],
           'appointment_date' => $validatedData['appointment_date'],
            'contact_preference' => $validatedData['contact_preference'],




        ]);








        return redirect()->route('index')->with('success','appointment created succsessfully');






//corect code

            /*$request->validate([
              'patient_name' => 'required|string|max:255',
              'contact_number' => 'required|string|max:10',

              'choose_doctor' => 'required',
              'symptoms' => 'required|string',
              'blood_group' => 'required|string|max:3',
             'appointment_date' => 'required|date',
              'contact_preference' => 'required|string|in:email,phone',




          ]);

          Appointment::create($request->all());

          return redirect()->route('index')->with('success','appointment created succsessfully');*/








        }


















        // Validate the form data
       /* $validatedData = $request->validate([
            'patient_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:10',
            'first_time_visit' => 'nullable|boolean',
            'choose_doctor' => 'required|exists:doctors,id', // Assuming doctors table exists with 'id' column
            'symptoms' => 'required|string',
            'blood_group' => 'required|string|max:3',
            'appointment_date' => 'required|date',
            'contact_preference' => 'required|string|in:email,phone',
        ]);

        // Create a new appointment instance
        $appointment = new Appointment();
        $appointment->fill($validatedData);

        // Save the appointment
        $appointment->save();

        // Redirect to a success page or any other desired action
        return redirect()->route('appointments.create')->with('success', 'Appointment booked successfully!');*/



        public function show()
        {
            try {
                $appodisplay = Appointment::all();
                return view('doctorPart.display', compact('appodisplay'));
            } catch (\Exception $e) {
                // Log the error or handle it as needed
                return back()->withError($e->getMessage());
            }
        }






        public function edit(int $id)
        {
            $appointment=Appointment::findOrFail($id);
           // return $category;
           return view('appointment.appoEdit',compact('appointment'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, int $id)
        {



            // Find the doctor record
            $appointment = Appointment::findOrFail($id);

        // Update the doctor's data
        $appointment->update([

            'patient_name' => $request->patient_name,
            'doctor_id' => $request->doctor_id,
            'contact_number' => $request->contact_number,
            'choose_doctor' => $request->choose_doctor,
            'symptoms' => $request->symptoms,
            'blood_group' => $request->blood_group,
            'appointment_date' => $request->appointment_date,
            'contact_preference' => $request->contact_preference,


        ]);

        // Check if image is present in the request


        // Redirect back with success message
        return redirect()->back()->with('status', 'appointment details updated');



        }




        public function destroy($id)
        {
            $appointment=Appointment::findOrFail($id);
            $appointment->delete();
            return redirect()->back()->with('status','Appointment was deleted');
        }

        public function deletedisplay($id)
        {
            $items=Appointment::findOrFail($id);
            $items->delete();
            return redirect()->back()->with('status','Appointment was deleted');
        }









}
