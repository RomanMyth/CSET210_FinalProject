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

Route::get('/LoginPage',[FinalProjectController::class,'showLoginPage']);
Route::get('/RegisterPage',[FinalProjectController::class,'showRegisterPage']);

//end home page functions

Route::POST('/Login',[FinalProjectController::class,'userLogin']);

Route::post('/addToRegister', [FinalProjectController::class,'addToRegistration']);
Route::get('/viewRegisters',[FinalProjectController::class,'viewRegisters']);
Route::post('/Register',[FinalProjectController::class,'approveRegistration']);

//Return to home function
Route::get('/welcome',[FinalProjectController::class,'showHomePage']);
//end return to home function

//Show doctors appointment page
Route::get('/DoctorsAppointment', [FinalProjectController::class,'showdoctorsappointment']);

//View Admin Report
Route::get('/AdminsReport',[FinalProjectController::class,'showAdminReport']);

//Admin Dashboard Page Routes
Route::get('/adminDashboard',[FinalProjectController::class,'showAdminDashboard']);

Route::get('/registrationApproval',[FinalProjectController::class,'showRegistrationApproval']);
Route::get('/addInfoOfPatient',[FinalProjectController::class,'showAddInfoOfPatient']);
Route::get('/employee',[FinalProjectController::class,'showEmployee']);
Route::get('/doctAppt',[FinalProjectController::class,'showDoctAppt']);
Route::get('/adminsReport',[FinalProjectController::class,'showAdminsReport']);
Route::get('/patients',[FinalProjectController::class,'showPatients']);
Route::get('/roles',[FinalProjectController::class,'showRoles']);
Route::get('/rosterNewRoster',[FinalProjectController::class,'showRosterNewRoster']);
Route::get('/payment',[FinalProjectController::class,'showPayment']);

//Supervsior Dashboard Page Routes
Route::get('/supervisorDashboard',[FinalProjectController::class,'showSupervisorDashboard']);

//Doctors Home Page Routes
Route::get('/doctorsHome',[FinalProjectController::class,'showDoctorsHome']);
Route::get('/patientOfDoc',[FinalProjectController::class,'showPatientOfDoc']);

//Patients Home Page Routes
Route::get('/patientsHome',[FinalProjectController::class,'showPatientsHome']);

//Caregivers Home Page Routes
Route::get('/caregiversHome',[FinalProjectController::class,'showCaregiversHome']);