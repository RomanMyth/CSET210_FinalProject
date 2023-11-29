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
    //Generates a family for the register page
    function generateFamilyCode(){
        $FamilyCode = rand(10000, 999999);
        $codes = DB::table("patients")->get();
        foreach($codes as $code){
            //if the code matches one in the database it calls the function again
            if($FamilyCode == $code->Family_Code){
                return $this->generateFamilyCode();
            }
        }
        return $FamilyCode;
    }

    // Home page functions
    function showLoginPage(){
        return view("LoginPage");
    }
    function showRegisterPage(){
        //Calls the function to generate a family code and passes it to the view
        $FamilyCode = $this->generateFamilyCode();

        return view("RegisterPage", ['FamilyCode' => $FamilyCode]);
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


    //
    function userLogin(Request $request){
        $patients = DB::table("patients")->get();
        foreach($patients as $patient){
            if( $patient->Email == $request->Email && $patient->Password == $request->Password ){
                return $patient;
            }
        }

        $doctors = DB::table("doctors")->get();
        foreach($doctors as $doctor){
            if( $doctor->Email == $request->Email && $doctor->Password == $request->Password ){
                return $doctor;
            }
        }

        $supervisors = DB::table("supervisors")->get();
        foreach($supervisors as $supervisor){
            if( $supervisor->Email == $request->Email && $supervisor->Password == $request->Password ){
                return $supervisor;
            }
        }

        $caregivers = DB::table("caregivers")->get();
        foreach($caregivers as $caregiver){
            if( $caregiver->Email == $request->Email && $caregiver->Password == $request->Password ){
                return $caregiver;
            }
        }

        $admins = DB::table("admins")->get();
        foreach($admins as $admin){
            if( $admin->Email == $request->Email && $admin->Password == $request->Password ){
                return $admin;
            }
        }

        return view("LoginPage");
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
    function showPatientsHome(){
        return view("patientsHome");
    }
    //End functions to patients home page

    //Start functions to caregivers home page
    function showCaregiversHome(){
        return view("caregiversHome");
    }
    //End functions to caregivers home page


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

    //Start Functions for Admin Dashboard Page
    function showAdminDashboard(){
        return view("adminDashboard");
    }

    function showRegistrationApproval(){
        echo "Reg";
    }
    function showAddInfoOfPatient(){
        echo "addinfo";
    }
    function showEmployee(){
        echo "emp";
    }
    function showDoctAppt(){
        echo "docappt";
    }
    function showAdminsReport(){
        echo "admins";
    }
    function showPatients(){
        echo "pat";
    }
    function showRoles(){
        echo "roles";
    }
    function showRosterNewRoster(){
        echo "rosterns";
    }
    function showPayment(){
        echo "paymewnt";
    }
    //End functions for Admin Dashboard Page

    //Start functions for Supervisor Dashboard
    function showSupervisorDashboard(){
        return view("supervisorDashboard");
    }
    //End function for Supervisor Dashboard

    //Start functions for Doctors Home
    function showDoctorsHome(){
        return view("doctorsHome");
    }
    function showPatientOfDoc(){
        echo "Patientofdoc";
    }
    //End function for Doctors Home

  
    function showAdminReport(){
        return view("AdminsReport");
    }
    function showdoctorsappointment(){
        return view("DoctorsAppointment");
    }
}
