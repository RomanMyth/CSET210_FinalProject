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
