<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Admin;

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
  
    //Start function to return register views
  
    function doctorForm(){
       return view("registerDoctor");
    }

    function adminForm(){
        return view("registerAdmin");
    }

    //End functions to return register views


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

    //End Functions to add form data to database
  
    function showAdminReport(){
        return view("AdminsReport");
    }
    function showdoctorsappointment(){
        return view("DoctorsAppointment");
    }
}
