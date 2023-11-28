<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Admin;
use app\Models\Supervisor;

class FinalProjectController extends Controller
{
    // Home page functions
    function showLoginPage(){
        return view("LoginPage");
    }
    function showRegisterPage(){
        return view("RegisterPage");
    }
    //end home page functions
  
    //return to home
    function showHomePage(){
        return view("/welcome");
    }
  

    //Users apply for register function
    function addToRegister(Request $request){
        $role = $request->input("role");
        return $role;
    }

    //Start function to return register views
  
    function doctorForm(){
       return view("registerDoctor");
    }

    function adminForm(){
        return view("registerAdmin");
    }

    function supervisorForm(){
        return view("registerSupervisor");
    }

    //End functions to return register views

    //Start functions to patients home page
    function showPatientsHomePage(){
        return view("patientsHome");
    }
    //End functions to patients home page


    //Start Functions to add form data to database

    function addDoctor(Request $request){
        $data = $request->all();
        Doctor::create($data);
        return $data;
    }


    function addAdmin(Request $request){
        $data = $request->all();
        Admin::create($data);
        return $data;
    }

    function addSupervisor(Request $request){
        $data = $request->all();
        Supervisor::create($data);
        return $data;
    }

    //End Functions to add form data to database
  
    function showAdminReport(){
        return view("AdminsReport");
    }
    function showdoctorsappointment(){
        return view("DoctorsAppointment");
    }
}
