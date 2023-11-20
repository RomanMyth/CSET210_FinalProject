<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Testtable;

class FinalProjectController extends Controller
{
    // function addData(Request $request){
    //     $test=$request->all();
    //     Testtable::create($test);
    //     return $test;
    // }
    // Home page functions
    function showLoginPage(){
        return view("LoginPage");
    }
    function showRegisterPage(){
        return view("RegisterPage");
    }
    //end home page functions

    //return to home
    function showHomePage(){
        return view("/welcome");
    }
    function doctorForm(){
       return view("registerDoctor");
    }

    function addDoctor(Request $request){
        $data = $request->all();
        Doctor::create($data);
        return $data;
    }
}
