<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Doctor;
use app\Models\Supervisor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class FinalProjectController extends Controller
{
    //Generates a family for the register page
    function generateFamilyCode()
    {
        $FamilyCode = rand(10000, 999999);
        $codes = DB::table("patients")->get();
        foreach ($codes as $code) {
            //if the code matches one in the database it calls the function again
            if ($FamilyCode == $code->Family_Code) {
                return $this->generateFamilyCode();
            }
        }
        return $FamilyCode;
    }

    // Home page functions
    function showLoginPage()
    {
        return view("LoginPage");
    }
    function showRegisterPage()
    {
        return view("RegisterPage");
    }
    //end home page functions

    //return to home
    function showHomePage()
    {
        return view("/welcome");
    }


    //Users apply for register function
    function addToRegister(Request $request)
    {
        $role = $request->input("role");
        return $role;
    }

    //Start function to return register views

    function doctorForm()
    {
        return view("registerDoctor");
    }

    function adminForm()
    {
        return view("registerAdmin");
    }

    function supervisorForm()
    {
        return view("registerSupervisor");
    }

    //End functions to return register views


    //Start Functions to add form data to database

    function addDoctor(Request $request)
    {
        $data = $request->all();
        Doctor::create($data);
        return $data;
    }


    function addAdmin(Request $request)
    {
        $data = $request->all();
        Admin::create($data);
        return $data;
    }

    function showRegistrationApproval()
    {
        echo "Reg";
    }
    function showAdditionalPatientInfo()
    {
        $patients = DB::table("patients")->get();

        return view("additionalPatientInfo", ["patients" => $patients]);
    }

    function changePatientGroup(Request $request)
    {
        $patient = $request->input('patientid');
        $group = $request->input("New-Patient-Group");
        DB::table("patients")->where("Patient_ID", $patient)->update(["Patient_Group" => $group]);
        echo "success";
    }

    function viewEmployees()
    {
        $admins = DB::table("admins")->where("Role_ID", 1)->get();
        $supervisors = DB::table("supervisors")->where("Role_ID", 3)->get();
        $doctors = DB::table("doctors")->where("Role_ID", 2)->get();
        $caregivers = DB::table("caregivers")->where("Role_ID", 4)->get();
        $patients = DB::table("patients")->where("Role_ID", 5)->get();
        return view("Employees", ["admins" => $admins, "supervisors" => $supervisors, "doctors" => $doctors, "caregivers" => $caregivers, "patients" => $patients]);
    }
    function showRosterNewRoster()
    {
        echo "rosterns";
    }

    //End functions for Admin Dashboard Page

    //Start functions for Supervisor Dashboard
    function showSupervisorDashboard()
    {
        return view("supervisorDashboard");
    }
    //End function for Supervisor Dashboard

    function showCaregiverDashboard()
    {
        return view("caregiverDashboard");
    }

    //Start functions for Doctors Home
    function showDoctorsHome()
    {
        return view("doctorsHome");
    }
    function showPatientOfDoc()
    {
        echo "Patientofdoc";
    }
    //End function for Doctors Home

    //Start functions for payment page
    function showPayment()
    {
        return view("PaymentPage");
    }
    //End functions for payment page

    //Start functions for admins report page
    function showAdminsReport()
    {
        return view("AdminsReport");
    }
    //End functions for admins report page

    //Start functions for doctors appointment page
    function showDoctorsAppointment()
    {
        return view("DoctorsAppointment");
    }
    //End fuctions for doctors appointment page

    //Start functions for patients page
    function showPatients()
    {
        return view("patients");
    }
    //End functions for patients page

    //Start functions for roles page
    function showRoles()
    {
        return view("roles");
    }
    //End functions for roles page

    function showAdminReport()
    {
        return view("AdminsReport");
    }
}
//end of WRAPPER**
