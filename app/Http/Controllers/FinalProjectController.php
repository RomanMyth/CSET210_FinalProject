<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Admin;
use App\Models\Supervisor;
use App\Models\Caregiver;
use App\Models\Patient;
use App\Models\Patient_emergency;
use Illuminate\Support\Facades\DB;

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
        $data = $request->all();

        if($role == 'Admin'){
            $data['role'] = 1;
            $data = array_slice($data,0,8);
            Admin::create($data);
        }

        if($role == 'Doctor'){
            $data['role'] = 2;
            $data = array_slice($data,0,8);
            Doctor::create($data);
        }

        if($role == 'Supervisor'){
            $data['role'] = 3;
            $data = array_slice($data,0,8);
            Supervisor::create($data);
        }

        if($role == 'Caregiver'){
            $data['role'] = 4;
            $data = array_slice($data,0,10);
            Caregiver::create($data);
        }

        if($role == 'Patient'){
            $data['role'] = 5;

            $patient_contact = array_slice($data,9,10);
            $data = array_slice($data,0,9);

            $patient_group = rand(1, 5);
            $data['Patient_Group'] = $patient_group;

            Patient::create($data);

            $patientID = DB::table('patients')->where('Email', $data['Email'])->value('Patient_ID');
            $patient_contact["Patient_ID"] = $patientID;

            Patient_emergency::create($patient_contact);
           // return $patient_contact;
        }


        return $data;
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


    //Start Functions to add form data to database

    // function addDoctor(Request $request){
    //     $data = $request->all();
    //     Doctor::create($data);
    //     return $data;
    // }


    // function addAdmin(Request $request){
    //     $data = $request->all();
    //     Admin::create($data);
    //     return $data;
    // }

    // function addSupervisor(Request $request){
    //     $data = $request->all();
    //     Supervisor::create($data);
    //     return $data;
    // }

    //End Functions to add form data to database
  
    function showAdminReport(){
        return view("AdminsReport");
    }
    function showdoctorsappointment(){
        return view("DoctorsAppointment");
    }
}
