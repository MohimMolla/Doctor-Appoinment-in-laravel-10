<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->role == '1') {
                return view('admin.home');
            } else {
                $doctors = Doctor::all();
                return view('user.home', compact('doctors'));
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctors = Doctor::all();
            return view('user.home', compact('doctors'));
        }
    }

    public function doctor()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctors = Doctor::all();
            return view('user.doctor', compact('doctors'));
        }
    }
    public function appointment(Request $request){
        $appoin = new appointment;

        $appoin->name =$request->name;
        $appoin->email =$request->email;
        $appoin->phone =$request->phone;
        $appoin->speciality =$request->speciality;
        $appoin->date =$request->date;
        $appoin->doctor_name =$request->doctor_name;
        $appoin->message =$request->message;
        $appoin->status ='In Progress';

        if(Auth::id()){
            $appoin->user_id =Auth::user()->id;
        }
        if(Auth::check()){
        $appoin->save();
        return redirect()->back()->with('message','Thank you!!, Appoinment sucessfully. We will contact with you soon.');    
    }
    else{
        return redirect()->back()->with('message',"You are not a valide  in user, please login and try again");
    }

        
    }
       public function  myappoinment(){
        if (Auth::id()){

           $userid =Auth::user()->id;
           $appoints=appointment::where("user_id",$userid)->get();
            return view('user.myappoinment',compact('appoints'));
        }
        else{
            return redirect()->back()->with('message'," You are not a valide in user, please login");
        }  
    }

    public function cancel_appoint($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();

    }
}
