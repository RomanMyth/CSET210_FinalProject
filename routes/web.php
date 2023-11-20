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

Route::get('/', function () {
    return view('welcome');
});

//Register Doctor Routes
Route::get('/doctorForm',[FinalProjectController::class,'doctorForm']);
Route::post('/addDoctor',[FinalProjectController::class,'addDoctor']);

//Register Admin Routes
Route::get('/adminForm',[FinalProjectController::class,'adminForm']);
Route::post('/addAdmin',[FinalProjectController::class,'addAdmin']);



