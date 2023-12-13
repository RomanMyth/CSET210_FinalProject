<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Daily_caregiver_task;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Admin;
use App\Models\Supervisor;
use App\Models\Caregiver;
use App\Models\Patient;
use App\Models\Patient_emergency;
use App\Models\Registration;
use App\Models\Role;
use App\Models\Schedule;
use App\Models\Caregiver_patient_group;
use Illuminate\Support\Facades\DB;
use App\Models\User;

//session_destroy();
session_start();

class FinalProjectController extends Controller {
    function viewRegisters()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 1 && $_SESSION['role'] != 3) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

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
        $fields = $request->validate([
            'Email' => 'unique:registrations,Email|unique:patients,Email|unique:admins,Email|unique:supervisors,Email|unique:doctors,Email|unique:caregivers,Email',
            'First_Name' => 'required|string',
            'Password' => 'required|string'
        ]);
        $role = $request->input("Role_ID");

        $data = $request->all();

        if ($role != "Patient") {
            $data['Family_Code'] = NULL;
        }


        // when auth works, grab everything seperately and bycrypt the password
        Registration::create($data);

        return "success";
    }

    //adds users from registers to their respective table when approved
    function approveRegistration(Request $request)

    {
        $role = $request->input("Role_ID");
        $formData = $request->all();

        $data = DB::table("registrations")->where("Email", $formData["Email"])->get();
        $data = json_decode(json_encode($data), true);

        if ($role == 'Admin') {
            $data[0]["Role_ID"] = 1;

            User::create($data[0]);

            $newUser = DB::table('users')->where('Email', $formData["Email"])->first()->id;
            $data[0]["User_ID"] = $newUser;

            Admin::create($data[0]);
        }

        if ($role == 'Doctor') {
            $data[0]["Role_ID"] = 2;

            User::create($data[0]);

            $newUser = DB::table('users')->where('Email', $formData["Email"])->first()->id;
            $data[0]["User_ID"] = $newUser;

            Doctor::create($data[0]);
        }

        if ($role == 'Supervisor') {
            $data[0]["Role_ID"] = 3;

            User::create($data[0]);

            $newUser = DB::table('users')->where('Email', $formData["Email"])->first()->id;
            $data[0]["User_ID"] = $newUser;

            Supervisor::create($data[0]);
        }

        if ($role == 'Caregiver') {
            $data[0]['Role_ID'] = 4;

            User::create($data[0]);

            $newUser = DB::table('users')->where('Email', $formData["Email"])->first()->id;
            $data[0]["User_ID"] = $newUser;

            Caregiver::create($data[0]);
        }

        if ($role == 'Patient') {
            $data[0]["Role_ID"] = 5;

            User::create($data[0]);

            $newUser = DB::table('users')->where('Email', $formData["Email"])->first()->id;
            $data[0]["User_ID"] = $newUser;

            $patient_group = rand(1, 4);
            $data[0]['Patient_Group'] = $patient_group;

            Patient::create($data[0]);

            $patientID = DB::table('patients')->where('Email', $formData['Email'])->value('Patient_ID');
            $data[0]["Patient_ID"] = $patientID;

            Patient_emergency::create($data[0]);
        }

        // $user = User::create($data[0]);


        DB::table("registrations")->where("Email", $formData["Email"])->delete();

        //return $response;

        return redirect("/viewRegisters");
    }
    //Users denied from registration
    function denyRegistration(Request $request)
    {
        $role = $request->input("Role_ID");
        $formData = $request->all();

        $data = DB::table("registrations")->where("Email", $formData["Email"])->get();
        $data = json_decode(json_encode($data), true);

        // $denied = true;

        DB::table("registrations")->where("Email", $formData["Email"])->delete();
        // return view("viewRegisters")->with('denied', $denied);
        return redirect()->back();
    }

    function userLogin(Request $request)
    {
        $fields = $request->validate([
            'Email' => 'required|string',
        ]);

        if (!User::where('Email', $request->Email)->exists()) {
            return redirect('/LoginPage');
        }

        $user = User::where("Email", $fields['Email'])->first();

        if ($request->Password != $user->Password) {
            return 'Error';
        }

        $role = $user->Role_ID;

        $_SESSION['role'] = $role;

        if ($user['Role_ID'] == 1) {
            return redirect("/adminDashboard");
        }
        if ($user['Role_ID'] == 2) {
            //$doctor = DB::table('users')->where('Email', $fields["Email"])->first()->Doctor_ID;
            //$_SESSION["User"] = $doctor;

            return redirect('/doctorDashboard');
        }
        if ($user['Role_ID'] == 3) {
            return redirect('/supervisorDashboard');
        }
        if ($user['Role_ID'] == 4) {
            return redirect('/caregiverDashboard');
        }
        if ($user['Role_ID'] == 5) {
            return redirect('/patientDashboard');
        }
    }

    //end home page functions

    //return to home
    function showHomePage()
    {
        return view("/welcome");
    }

    // Home page functions
    function showLoginPage()
    {
        return view("LoginPage");
    }

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

    function showRegisterPage()
    {
        //Calls the function to generate a family code and passes it to the view
        $FamilyCode = $this->generateFamilyCode();

        return view("RegisterPage", ['FamilyCode' => $FamilyCode]);
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
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 5) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        $patients = DB::table("patients")->get();
        return view("patientsHome", ["patients" => $patients]);
    }
    //End functions to patients home page

    //Start functions to caregivers home page
    function showCaregiversHome()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 4) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
        $caregiver = $_SESSION['User'];

        $patients = DB::select("SELECT t.Caregiver_ID, t.Patient_ID, t.Morning_Med, t.Afternoon_Med, t.Night_Med, t.Breakfast, t.Lunch, t.Dinner, p.First_Name FROM `daily_caregiver_tasks` t JOIN patients p ON p.Patient_ID = t.Patient_ID WHERE Caregiver_ID = $caregiver AND Date = CURRENT_DATE;");

        return view("caregiversHome", ["patients" => $patients]);
    }

    //Start Functions for Admin Dashboard Page

    function showAdminDashboard()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 1) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
        return view("adminDashboard");
    }

    function showAdditionalPatientInfo()
    {

        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 1 && $_SESSION['role'] != 3) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

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
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 1 && $_SESSION['role'] != 3) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        $users = DB::select("SELECT u.id as id, u.First_Name,
        CASE
            WHEN u.Role_ID = 1 THEN 'Admin'
            WHEN u.Role_ID = 2 THEN 'Doctor'
            WHEN u.Role_ID = 3 THEN 'Supervisor'
            WHEN u.role_ID = 4 THEN 'Caregiver'
        END as Role_ID,
        CASE
            WHEN u.Role_ID = 1 THEN 'None'
            WHEN u.Role_ID = 2 THEN d.Salary
            WHEN u.Role_ID = 3 THEN s.Salary
            WHEN u.Role_ID = 4 THEN c.Salary
        END as Salary
        FROM users u LEFT JOIN admins a ON u.id = a.User_ID LEFT JOIN doctors d ON u.id = d.User_ID LEFT JOIN supervisors s ON u.id = s.User_ID  LEFT JOIN caregivers c ON u.id = c.User_ID WHERE u.Role_ID != 5;");

        return view("Employees", ["users" => $users]);
    }

    //End functions for Admin Dashboard Page

    //Start functions for Supervisor Dashboard
    function showSupervisorDashboard()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 3) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
        return view("supervisorDashboard");
    }
    //End function for Supervisor Dashboard

    function showCaregiverDashboard()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 4) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        return view("caregiverDashboard");
    }

    //Start functions for Doctors Home
    function showDoctorsHome()
    {
        return view("doctorsHome");
    }
    //End function for Doctors Home

    //Start functions for payment page
    function showPayment(Request $request)
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 1) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        if($request->patientID !== null){

            
            $patient_id = $request->patientID;
            $patient = DB::select('select * from payments where Patient_ID = ?', [$patient_id]);
            
            if($patient === []){
                $patient[0] = [];
            }
           
            return view('paymentPage', ['data'=>$patient[0]]);
        }
        return view('paymentPage');
    }

    public function updatePayment(Request $request){
        $payment = DB::select('select * from payments where Patient_ID = ?', [$request->patientID]);
        DB::table('payments')
        ->where('Patient_ID', $request->patientID)
        ->update(['Payment_Amount' => $request->amountDue]);
        return view('PaymentPage');

     
    }

        

    //End functions for payment page

    //Start functions for admins report page
    function showAdminsReport()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 1 && $_SESSION['role'] != 3) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
        // Retrieve patient data along with associated doctor and caregiver data
        $patients = Patient::with(['doctor', 'caregiver'])->get();

        return view("AdminsReport", compact('patients'));
    }
    //End functions for admins report page




    //Start functions for doctors appointment page
    function showDoctorsAppointment()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 1 && $_SESSION['role'] != 3) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        $patients = DB::table("patients")->get();
        return view("DoctorsAppointment", ["patients" => $patients]);
    }
    //End fuctions for doctors appointment page

    //Start functions for patients page
    function showPatients()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 5) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        $patients = DB::table("patients")->get();
        $patient_emergency_table = DB::table("patient_emergencies")->get();

        return view("patients", ["patients" => $patients, "patient_emergency" => $patient_emergency_table]);
    }
    //End functions for patients page

    //Start functions for roles page
    function showRoles()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 1) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
        $roles = DB::table("roles")->get();

        return view("roles", ["roles" => $roles]);
    }

    function newRole(Request $request)
    {
        $rname = $request->input("Role_Name");
        $data = $request->all();
        Role::create($data);

        $roles = DB::table("roles")->get();
        return view("roles", ["roles" => $roles]);
    }
    //End functions for roles page

    //Start functions for doctor dashboard page
    function showDoctorDashboard()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 2) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        return view("doctorDashboard");
    }
    //End functions for doctor dashboard page

    //Start functions for patient dashboard page
    function showPatientDashboard()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 5) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        return view("patientDashboard");
    }
    //End functions for patient dashboard page

    function logout()
    {
        unset($_SESSION["role"]);
        unset($_SESSION["User"]);
        return redirect('welcome');
    }
    //Start functions for roster page
    function showRoster()
    {
        if (!isset($_SESSION['role'])) {
            return redirect()->back();
        }
        // if(isset($request)){
        //     $Users = DB::select("SELECT r.Date, s.First_Name as Supervisor, d.First_Name as Doctor, c1.First_Name as Caregiver1, c2.First_Name as Caregiver2, c3.First_Name as Caregiver3, c4.First_Name as Caregiver4 FROM schedules r JOIN supervisors s JOIN doctors d Join caregivers c1 JOIN caregivers c2 JOIN caregivers c3 JOIN caregivers c4 ON r.Supervisor_ID = s.Supervisor_ID AND r.Doctor_ID = d.Doctor_ID AND r.Caregiver1 = c1.Caregiver_ID AND r.Caregiver2 = c2.Caregiver_ID AND r.Caregiver3 = c3.Caregiver_ID AND r.Caregiver4 = c4.Caregiver_ID WHERE r.Date = $request->Date;");
        // }
        $Users = DB::select("SELECT r.Date, s.First_Name as Supervisor, d.First_Name as Doctor, c1.First_Name as Caregiver1, c2.First_Name as Caregiver2, c3.First_Name as Caregiver3, c4.First_Name as Caregiver4 FROM schedules r JOIN supervisors s JOIN doctors d Join caregivers c1 JOIN caregivers c2 JOIN caregivers c3 JOIN caregivers c4 ON r.Supervisor_ID = s.Supervisor_ID AND r.Doctor_ID = d.Doctor_ID AND r.Caregiver1 = c1.Caregiver_ID AND r.Caregiver2 = c2.Caregiver_ID AND r.Caregiver3 = c3.Caregiver_ID AND r.Caregiver4 = c4.Caregiver_ID WHERE r.Date = CURRENT_DATE;");
        
        return view("roster", ["users"=> $Users]);
    }

    function Roster(Request $request){
        if(!isset($_SESSION['role'])){
            return redirect()->back();
        }

        $Users = DB::select("SELECT r.Date, s.First_Name as Supervisor, d.First_Name as Doctor, c1.First_Name as Caregiver1, c2.First_Name as Caregiver2, c3.First_Name as Caregiver3, c4.First_Name as Caregiver4 FROM schedules r JOIN supervisors s JOIN doctors d Join caregivers c1 JOIN caregivers c2 JOIN caregivers c3 JOIN caregivers c4 ON r.Supervisor_ID = s.Supervisor_ID AND r.Doctor_ID = d.Doctor_ID AND r.Caregiver1 = c1.Caregiver_ID AND r.Caregiver2 = c2.Caregiver_ID AND r.Caregiver3 = c3.Caregiver_ID AND r.Caregiver4 = c4.Caregiver_ID WHERE r.Date = '$request->Date';");
        
        return view("roster", ["users"=> $Users]);
    }

    //End functions for roster page

    //Start functions for new roster page
    function showNewRoster()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 1 && $_SESSION['role'] != 3) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

        $doctors = Doctor::all();
        $supervisors = Supervisor::all();
        $caregivers = Caregiver::all();

        return view("newRoster", ['doctors' => $doctors, 'supervisors' => $supervisors, 'caregivers' => $caregivers]);
    }
    //End functions for new roster page

    //Start functions for family memebrs home page
    function showFamilyMembersHome()
    {
        return view("familyMembersHome");
    }
    //End functions for family memebrs home page

    function UpdateSalary(Request $request)
    {
        $user = $request->User_ID;
        //return $user;
        $role = DB::table('users')->where('id', $user)->first()->Role_ID;
        if ($role == 1) {
            return redirect()->back();
        } else {
            $salary = $request->Salary;
            if ($role == 2) {
                // $Doctor = DB::select("SELECT Doctor_ID FROM doctors JOIN users ON doctors.User_ID = users.id WHERE users.id = $user");
                // return $Doctor[0]['Doctor_ID'];
                DB::select("UPDATE doctors SET Salary = $salary WHERE Doctor_ID = (SELECT Doctor_ID FROM doctors JOIN users ON doctors.User_ID = users.id WHERE users.id = $user)");
            } elseif ($role == 3) {
                DB::select("UPDATE supervisors SET Salary = $salary WHERE Supervisor_ID = (SELECT Supervisor_ID FROM supervisors JOIN users ON supervisors.User_ID = users.id WHERE users.id = $user)");
            } elseif ($role == 4) {
                DB::select("UPDATE caregivers SET Salary = $salary WHERE Caregiver_ID = (SELECT Caregiver_ID FROM caregivers JOIN users ON caregivers.User_ID = users.id WHERE users.id = $user)");
            }
        }
        return redirect()->back();
    }

    function NewSchedule(Request $request)
    {
        $data = $request->all();
        Schedule::create($data);

        $schedule = DB::table('schedules')->latest('Schedule_ID')->first()->Schedule_ID;
        $date = DB::table('schedules')->latest('Schedule_ID')->first()->Date;
        $schedule = json_decode(json_encode($schedule), true);
        $date = json_decode(json_encode($date), true);

        $caregiver1 = $request->Caregiver1;
        $caregiver2 = $request->Caregiver2;
        $caregiver3 = $request->Caregiver3;
        $caregiver4 = $request->Caregiver4;

        Caregiver_patient_group::create(['Schedule_ID' => $schedule, 'Caregiver_ID' => $caregiver1, 'Group_ID' => 1]);
        Caregiver_patient_group::create(['Schedule_ID' => $schedule, 'Caregiver_ID' => $caregiver2, 'Group_ID' => 2]);
        Caregiver_patient_group::create(['Schedule_ID' => $schedule, 'Caregiver_ID' => $caregiver3, 'Group_ID' => 3]);
        Caregiver_patient_group::create(['Schedule_ID' => $schedule, 'Caregiver_ID' => $caregiver4, 'Group_ID' => 4]);

        for ($i = 1; $i < 5; $i++) {
            $patients = DB::select("SELECT Patient_ID FROM patients WHERE Patient_Group = $i;");
            $patients = json_decode(json_encode($patients), true);

            if ($i == 1) {
                $caregiver = $caregiver1;
            } elseif ($i == 2) {
                $caregiver = $caregiver2;
            } elseif ($i == 3) {
                $caregiver = $caregiver3;
            } else {
                $caregiver = $caregiver4;
            }

            foreach ($patients as $patient) {
                Daily_caregiver_task::create(['Caregiver_ID' => $caregiver, 'Patient_ID' => $patient['Patient_ID'], 'Date' => $date, 'Morning_Med' => NULL, 'Afternoon_Med' => NULL, 'Night_Med' => NULL, 'Breakfast' => NULL, 'Lunch' => NULL, 'Dinner' => NULL]);
            }
        }

        return 'success';
    }

    //Start functions for patient of doctor page
    function showPatientOfDoctor()
    {
        return view("patientOfDoctor");
    }
    // function showNewRoster()
    // {
    //     if(isset($_SESSION['role'])){
    //         if($_SESSION['role'] != 1 && $_SESSION['role'] != 3){
    //             return redirect()->back();
    //         }
    //     }
    //     else{
    //         return redirect()->back();
    //     }

    //     return view("newRoster");
    // }
    //End functions for patient of doctor page




}
