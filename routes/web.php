<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinalProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Home Page functions
Route::get('/', function () {
    return view('welcome');
});

Route::get('/LoginPage', [FinalProjectController::class, 'showLoginPage']);
Route::get('/RegisterPage', [FinalProjectController::class, 'showRegisterPage']);

Route::post('/addToRegister', [FinalProjectController::class, 'addToRegister']);
//end home page functions

Route::POST('/Login', [FinalProjectController::class, 'userLogin']);

Route::post('/addToRegister', [FinalProjectController::class, 'addToRegistration']);
Route::get('/viewRegisters', [FinalProjectController::class, 'viewRegisters']);
Route::post('/Register', [FinalProjectController::class, 'approveRegistration']);

//Return to home function
Route::get('/welcome', [FinalProjectController::class, 'showHomePage']);
//end return to home function

<<<<<<< HEAD
//Register Doctor Routes
Route::get('/doctorForm', [FinalProjectController::class, 'doctorForm']);
Route::post('/addDoctor', [FinalProjectController::class, 'addDoctor']);

//Show doctors appointment page
Route::get('/DoctorsAppointment', [FinalProjectController::class, 'showdoctorsappointment']);

//Register Admin Routes
Route::get('/adminForm', [FinalProjectController::class, 'adminForm']);
Route::post('/addAdmin', [FinalProjectController::class, 'addAdmin']);

//Register Supervisor Routes
Route::get('/supervisorForm', [FinalProjectController::class, 'supervisorForm']);
Route::post('/addSupervisor', [FinalProjectController::class, 'addSupervisor']);

//View Admin Report
Route::get('/AdminsReport', [FinalProjectController::class, 'showAdminReport']);
=======
//Doctors appointment page routes
Route::get('/DoctorsAppointment', [FinalProjectController::class,'showDoctorsAppointment']);

//View Admin Report
Route::get('/AdminsReport',[FinalProjectController::class,'showAdminReport']);

//Admin Dashboard Page Routes
Route::get('/adminDashboard',[FinalProjectController::class,'showAdminDashboard']);

Route::get('viewEmployees',[FinalProjectController::class,'viewEmployees']);

Route::get('/registrationApproval',[FinalProjectController::class,'showRegistrationApproval']);
Route::get('/additionalPatientInfo',[FinalProjectController::class,'showAdditionalPatientInfo']);
Route::get('/employee',[FinalProjectController::class,'showEmployee']);
Route::get('/doctAppt',[FinalProjectController::class,'showDoctAppt']);



Route::get('/rosterNewRoster',[FinalProjectController::class,'showRosterNewRoster']);

Route::post('changePatientGroup',[FinalProjectController::class,'changePatientGroup']);

//Supervsior Dashboard Page Routes
Route::get('/supervisorDashboard',[FinalProjectController::class,'showSupervisorDashboard']);

//Caregiver Dashboard Page Routes
Route::get('/caregiverDashboard',[FinalProjectController::class,'showCaregiverDashboard']);

//Doctors Home Page Routes
Route::get('/doctorsHome',[FinalProjectController::class,'showDoctorsHome']);
Route::get('/patientOfDoc',[FinalProjectController::class,'showPatientOfDoc']);

//Patients Home Page Routes
Route::get('/patientsHome',[FinalProjectController::class,'showPatientsHome']);

//Caregivers Home Page Routes
Route::get('/caregiversHome',[FinalProjectController::class,'showCaregiversHome']);

//Payment Page Routes
Route::get('/payment',[FinalProjectController::class,'showPayment']);

//Admins Report Page Routes
Route::get('/adminsReport',[FinalProjectController::class,'showAdminsReport']);

//Patients page routes
Route::get('/patients',[FinalProjectController::class,'showPatients']);

//Roles page routes
Route::get('/roles',[FinalProjectController::class,'showRoles']);
>>>>>>> a77ad26352e6e2e68e47e64ea55b036a1cd42654
