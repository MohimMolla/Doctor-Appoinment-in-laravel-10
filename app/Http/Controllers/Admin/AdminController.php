<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }
    public function adddoctor(Request $request)
    {
        $doctor = new Doctor; // Assuming 'Doctor' is the model class for the 'doctors' table
    
        // Handle image upload
        $image = $request->file('file');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('doctorimage'), $imagename);
    
        // Assign properties
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room_number = $request->room_number;
        $doctor->achievement = $request->achievement;
        $doctor->institute = $request->institute;
        $doctor->doctor_details = $request->doctor_details;
    
        $doctor->save();
    
        return redirect()->back()->with('message','Doctor Information Added Successfully'); 
    }
    public function showappoinment(){
        return view('admin.showappoinment');
    }
    
    
}
