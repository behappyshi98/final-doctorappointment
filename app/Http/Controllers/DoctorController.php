<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

use Illuminate\Http\Request;
use DB;



class DoctorController extends Controller
{
    public function index()
    {
        $doctors=Doctor::get();
        return view('doctorPart.docIndex' ,compact('doctors'));
    }

    public function indexdoc()
    {
        $tors=Doctor::get();
        return view('appointment.home' ,compact('tors'));
    }



   




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctorPart.docCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {





        $request->validate([
            'name' => 'required',
            'specialist' => 'required',
            'gender' => 'required|in:male,female',
            'email' => 'required|email|unique:doctors,email',
            'contact_number' => 'required|max:10', // Add validation rules for other fields as needed
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
            'hospital' => 'required',
            'room_number' => 'required',
            'appointment_date' => 'required|date',
            'maximum_appointment' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);


        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/photo', $imageName);

        $requestData = $request->except('image');
        $requestData['image'] = '/storage/photo/' . $imageName;

        Doctor::create($requestData);

        //$doctorId = $doctor->id;


        return redirect('doctor/c')->with('status','doctor created');



    }

    /**
     * Display the specified resource.
     */
    public function show()
{
    $docs = Doctor::all();
    return view('doctorPart.profile', compact('docs'));
}



public function heroshow()
{
    $heros = Doctor::all();
    return view('hero', compact('heros'));
}













    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $doctor=Doctor::findOrFail($id);
       // return $category;
       return view('doctorPart.docEdit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {



        // Find the doctor record
    $doctor = Doctor::findOrFail($id);

    // Update the doctor's data
    $doctor->update([
        'name' => $request->name,
        'specialist' => $request->specialist,
        'gender' => $request->gender,
        'email' => $request->email,
        'contact_number' => $request->contact_number,
        'hospital' => $request->hospital,
        'room_number' => $request->room_number,
        'appointment_date' => $request->appointment_date,
        'maximum_appointment' => $request->maximum_appointment,
        'start_time' => $request->start_time,
        'end_time' => $request->end_time,
    ]);

    // Check if image is present in the request
    if ($request->hasFile('image')) {
        // Get the file from the request
        $image = $request->file('image');

        // Generate a unique name for the image
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the specified directory
        $image->storeAs('public/photo', $imageName);

        // Update the doctor's image path in the database
        $doctor->update(['image' => '/storage/photo/' . $imageName]);
    }

    // Redirect back with success message
    return redirect()->back()->with('status', 'Doctor details updated');



    }





    public function search_doctor(Request $request)
    {

         $data=$request->input('search');

         $docs = DB::table('doctors')->where('name' , 'like' , '%'. $data. '%')->get();
         return view('doctorPart.profile',compact('docs'));


    }














    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doctor=Doctor::findOrFail($id);
        $doctor->delete();
        return redirect()->back()->with('status','doctor was deleted');
    }

}





