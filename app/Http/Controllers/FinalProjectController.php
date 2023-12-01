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
use App\Models\Registration;
use Illuminate\Support\Facades\DB;

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
        //Calls the function to generate a family code and passes it to the view
        $FamilyCode = $this->generateFamilyCode();

        return view("RegisterPage", ['FamilyCode' => $FamilyCode]);
    }
    //end home page functions

    //return to home
    function showHomePage()
    {
        return view("/welcome");
    }

    function viewRegisters()
    {
        $admins = DB::table("registrations")->where("Role_ID", "Admin")->get();
        $supervisors = DB::table("registrations")->where("Role_ID", "Supervisor")->get();
        $doctors = DB::table("registrations")->where("Role_ID", "Doctor")->get();
        $caregivers = DB::table("registrations")->where("Role_ID", "Caregiver")->get();
        $patients = DB::table("registrations")->where("Role_ID", "Patient")->get();
        return view("/registrationApproval", ["admins" => $admins, "supervisors" => $supervisors, "doctors" => $doctors, "caregivers" => $caregivers, "patients" => $patients]);
    }

    //Users added to registration table
    function addToRegistration(Request $request)
    {
        $role = $request->input("Role_ID");
        $data = $request->all();
        if ($role != "Patient") {
            $data['Family_Code'] = NULL;
        }

        Registration::create($data);

        return $data;
    }

    function approveRegistration(Request $request)
    {
        $role = $request->input("Role_ID");
        $formData = $request->all();

        $data = DB::table("registrations")->where("Email", $formData["Email"])->get();
        $data = json_decode(json_encode($data), true);


        if ($role == 'Admin') {
            $data[0]["Role_ID"] = 1;
            Admin::create($data[0]);
        }

        if ($role == 'Doctor') {
            $data[0]["Role_ID"] = 2;
            Doctor::create($data[0]);
        }

        if ($role == 'Supervisor') {
            $data[0]["Role_ID"] = 3;
            Supervisor::create($data[0]);
        }

        if ($role == 'Caregiver') {
            $data[0]['Role_ID'] = 4;
            Caregiver::create($data[0]);
        }

        if ($role == 'Patient') {
            $data[0]["Role_ID"] = 5;

            $patient_group = rand(1, 5);
            $data[0]['Patient_Group'] = $patient_group;

            Patient::create($data[0]);

            $patientID = DB::table('patients')->where('Email', $formData['Email'])->value('Patient_ID');
            $data[0]["Patient_ID"] = $patientID;

            Patient_emergency::create($data[0]);
        }

        DB::table("registrations")->where("Email", $formData["Email"])->delete();

        return $this->viewRegisters();
    }


    function userLogin(Request $request)
    {
        $patients = DB::table("patients")->get();
        foreach ($patients as $patient) {
            if ($patient->Email == $request->Email && $patient->Password == $request->Password) {
                $First_Name = $patient->First_Name;
                $Last_Name = $patient->Last_Name;
                return view("patientDashboard", ["First_Name" => $First_Name, "Last_Name" => $Last_Name]);
            }
        }

        $doctors = DB::table("doctors")->get();
        foreach ($doctors as $doctor) {
            if ($doctor->Email == $request->Email && $doctor->Password == $request->Password) {
                $First_Name = $doctor->First_Name;
                $Last_Name = $doctor->Last_Name;
                return view("docotrDashboard", ["First_Name" => $First_Name, "Last_Name" => $Last_Name]);
            }
        }

        $supervisors = DB::table("supervisors")->get();
        foreach ($supervisors as $supervisor) {
            if ($supervisor->Email == $request->Email && $supervisor->Password == $request->Password) {
                $First_Name = $supervisor->First_Name;
                $Last_Name = $supervisor->Last_Name;
                return view("supervisorDashboard", ["First_Name" => $First_Name, "Last_Name" => $Last_Name]);
            }
        }

        $caregivers = DB::table("caregivers")->get();
        foreach ($caregivers as $caregiver) {
            if ($caregiver->Email == $request->Email && $caregiver->Password == $request->Password) {
                $First_Name = $caregiver->First_Name;
                $Last_Name = $caregiver->Last_Name;
                return view("caregiverDashboard", ["First_Name" => $First_Name, "Last_Name" => $Last_Name]);
            }
        }

        $admins = DB::table("admins")->get();
        foreach ($admins as $admin) {
            if ($admin->Email == $request->Email && $admin->Password == $request->Password) {
                $First_Name = $admin->First_Name;
                $Last_Name = $admin->Last_Name;
                return view("adminDashboard", ["First_Name" => $First_Name, "Last_Name" => $Last_Name]);
            }
        }

        return view("LoginPage");
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

    //Start functions to patients home page
    function showPatientsHome()
    {
        return view("patientsHome");
    }
    //End functions to patients home page

    //Start functions to caregivers home page
    function showCaregiversHome()
    {
        return view("caregiversHome");
    }

    //Start Functions for Admin Dashboard Page

    function showAdminDashboard()
    {
        return view("adminDashboard");
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
        $patient = $request->Patient_ID;
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

    //Start functions for doctor dashboard page
    function showDoctorDashboard(){
        return view("doctorDashboard");
    }
    //End functions for doctor dashboard page
  
    //Start functions for patient dashboard page
    function showPatientDashboard(){
        return view("patientDashboard");
    }
    //End functions for patient dashboard page

    function showAdminReport()
    {

        return view("AdminsReport");
    }
}
