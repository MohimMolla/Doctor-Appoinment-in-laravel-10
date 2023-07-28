<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;



class AdminController extends Controller
{
    public function addview(){

        return view('admin.add_doctor');
    }

    // all doctor show here
    public function alldoctor(){
        $doctor = Doctor::all();

        return view('admin.alldoctor',compact('doctor'));
    }

    // Doctor deleted code here

    public function Editdoctor($id){
        $doctor =Doctor::find($id);

        

        return  view('admin.editdoctor', compact('doctor'));
        

    }
// Doctor update code here

public function Updatedoctor(Request $request, $id){
$doctor = Doctor::find($id);
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


$doctor->save();

return redirect()->back()->with('message','Doctor Information Updated Successfully'); 

}

// Doctor delete code here
    public function Doctordeleted($id){
        $doctor =Doctor::find($id);

        $doctor->delete();

        return  redirect()->back()->with('message','Doctor deleted successfully.');
        

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
        // $user=User::user()->name;
        // $data= Appointment::where('user_id',$user)->get();
        $data= Appointment::all();
     
        // dd($user);
        return view('admin.showappoinment', compact('data',));
    }

    public function Approved($id){
        $approved = Appointment::find($id);
        $approved->status='approved';
        $approved->save();

        return redirect()->back();
    }
    public function Canceled($id){
        $canceled = Appointment::find($id);
        $canceled->status='canceled';
        $canceled->save();

        return redirect()->back();
    }
    
    // email view email 
    public function emailview($id){
        $data=Appointment::find($id);

        return view('admin.email_view',compact('data'));
    }
    public function sendemail(Request $request,$id)
    {
        $data=Appointment::find($id);
        $details=[
           'greeting'=>$request->greeting,
           'body'=>$request->body,
           'actiontext'=>$request->actiontext,
           'actionurl'=>$request->actionurl,
           'endpart'=>$request->endpart,
        ];
        
        Notification::send($data,new SendEmailNotification($details));
        // $emailAddress = $data->email; // Adjust this according to your actual column name for the email address.
        // Notification::route('mail', $emailAddress)->notify(new SendEmailNotification($details));
    
        return redirect()->back();

    }
}
