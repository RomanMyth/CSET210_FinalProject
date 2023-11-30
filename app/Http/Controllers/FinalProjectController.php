<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Admin;
use app\Models\Supervisor;

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

<<<<<<< HEAD
    function addSupervisor(Request $request)
    {
        $data = $request->all();
        Supervisor::create($data);
        return $data;
    }

    //End Functions to add form data to database
=======
    function showRegistrationApproval(){
        echo "Reg";
    }
    function showAddInfoOfPatient(){
        echo "addinfo";
    }
    function showEmployee(){
        echo "emp";
    }
    function showRosterNewRoster(){
        echo "rosterns";
    }
>>>>>>> a77ad26352e6e2e68e47e64ea55b036a1cd42654

    function showAdminReport()
    {
        return view("AdminsReport");
    }
<<<<<<< HEAD
    function showdoctorsappointment()
    {
        return view("DoctorsAppointment");
    }

    function showcaregiverpage()
    {
        return view("CareGiverHomePage");
    }

    //show Doctor Page
    function showDoctorpage()
    {
        return view("DoctorHomePage");
    }

    // Handle the login process
    function login_process(Request $request)
    {
        session_start();
        // Retrieve user input
        $email = $request->input('email');
        $password = $request->input('password');

        // Assuming you have a User model and a database table named 'users'
        $user = User::where('email', $email)->first();
        $doctor = Doctor::where('email', $email)->first();

        // Verify user credentials
        if ($user && $password === $user->password) {
            // Start the session and store necessary data
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;

            // Redirect to the caregiver home page upon successful login
            return redirect('/caregiver');
        }
        // Verify user credentials for doctor
        elseif ($doctor && $password === $doctor->password) {
            // Start the session and store necessary data
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;

            // Redirect to the doctor page upon successful login
            return redirect('/DoctorPage');
        } else {
            // Redirect back to login page with an error message for invalid credentials
            return redirect('/')->with('error', 'Invalid email or password.');
        }
    }





    //WRAPPER**
=======
    //End functions for admins report page

    //Start functions for doctors appointment page
    function showDoctorsAppointment(){
        return view("DoctorsAppointment");
    }
    //End fuctions for doctors appointment page

    //Start functions for patients page
    function showPatients(){
        return view("patients");
    }
    //End functions for patients page

    //Start functions for roles page
    function showRoles(){
        return view("roles");
    }
    //End functions for roles page
  
    function showAdminReport(){
        return view("AdminsReport");
    }
>>>>>>> a77ad26352e6e2e68e47e64ea55b036a1cd42654
}
//end of WRAPPER**
