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

Route::get('/LoginPage', [FinalProjectController::class, 'showLoginPage'])->name('login');
Route::get('/RegisterPage', [FinalProjectController::class, 'showRegisterPage']);

Route::POST('/Login', [FinalProjectController::class, 'userLogin']);
//end home page functions


Route::post('/addToRegister', [FinalProjectController::class, 'addToRegistration']);

//Deny register function
Route::post('/deniedRegister', [FinalProjectController::class, 'denyRegistration']);

//Return to home function
Route::get('/welcome', [FinalProjectController::class, 'showHomePage']);
//end return to home function

//Doctors appointment page routes
Route::get('/DoctorsAppointment', [FinalProjectController::class,'showDoctorsAppointment']);
Route::post('/createAppointment', [FinalProjectController::class, 'createAppointment']);

//View Admin Report
Route::get('/AdminsReport', [FinalProjectController::class, 'showAdminReport']);


Route::post('/Register', [FinalProjectController::class, 'approveRegistration']);

Route::get('/viewRegisters', [FinalProjectController::class, 'viewRegisters']);

Route::get('/adminDashboard', [FinalProjectController::class, 'showAdminDashboard']);
// Route::get('/viewRegisters',[FinalProjectController::class,'viewRegisters']);

Route::get('viewEmployees', [FinalProjectController::class, 'viewEmployees']);

Route::get('/registrationApproval', [FinalProjectController::class, 'showRegistrationApproval']);
Route::get('/additionalPatientInfo', [FinalProjectController::class, 'showAdditionalPatientInfo']);





Route::post('changePatientGroup', [FinalProjectController::class, 'changePatientGroup']);

//Supervsior Dashboard Page Routes
Route::get('/supervisorDashboard', [FinalProjectController::class, 'showSupervisorDashboard']);

//Caregiver Dashboard Page Routes
Route::get('/caregiverDashboard', [FinalProjectController::class, 'showCaregiverDashboard']);

//Doctors Home Page Routes
Route::get('/doctorsHome', [FinalProjectController::class, 'showDoctorsHome']);

//Patients Home Page Routes
Route::get('/patientsHome', [FinalProjectController::class, 'showPatientsHome']);

//Caregivers Home Page Routes
Route::get('/caregiversHome', [FinalProjectController::class, 'showCaregiversHome']);

//Payment Page Routes
Route::get('/payment', [FinalProjectController::class,'showPayment']);
Route::post('/updatePayment', [FinalProjectController::class,'updatePayment']);

//Admins Report Page Routes
Route::get('/adminsReport', [FinalProjectController::class, 'showAdminsReport']);

//Patients page routes
Route::get('/patients', [FinalProjectController::class, 'showPatients']);

//Roles page routes
Route::get('/roles', [FinalProjectController::class, 'showRoles']);
Route::post('/newRole', [FinalProjectController::class, 'newRole']);

//Doctor dashboard routes
Route::get('/doctorDashboard', [FinalProjectController::class, 'showDoctorDashboard']);

//Patient dashboard routes
Route::get('/patientDashboard', [FinalProjectController::class, 'showPatientDashboard']);

//Patient of doctor page routes
Route::get('/patientOfDoctor', [FinalProjectController::class, 'showPatientOfDoctor']);

//Roster page routes
Route::get('/roster', [FinalProjectController::class, 'showRoster']);

Route::get('/Roster',[FinalProjectController::class,'Roster']);

//New roster page routes
Route::get('/newRoster', [FinalProjectController::class, 'showNewRoster']);

Route::post('/NewSchedule', [FinalProjectController::class, 'NewSchedule']);

//Family members home routes
Route::get('/familyMembersHome', [FinalProjectController::class, 'showFamilyMembersHome']);

Route::post('/logout', [FinalProjectController::class, 'logout']);

Route::post('/UpdateSalary', [FinalProjectController::class, 'UpdateSalary']);


Route::post('/Back', [FinalProjectController::class, 'LastPage']);
