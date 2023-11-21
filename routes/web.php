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

//Return to home function
Route::get('/welcome',[FinalProjectController::class,'showHomePage']);
//end return to home function

//Register Doctor Routes
Route::get('/doctorForm',[FinalProjectController::class,'doctorForm']);
Route::post('/addDoctor',[FinalProjectController::class,'addDoctor']);

//Register Admin Routes
Route::get('/adminForm',[FinalProjectController::class,'adminForm']);
Route::post('/addAdmin',[FinalProjectController::class,'addAdmin']);

//View Admin Report
Route::get('/AdminsReport',[FinalProjectController::class,'showAdminReport']);

//Patients Home Routes
Route::get('/patientsHome',[FinalProjectController::class,'showPatientsHomePage']);



