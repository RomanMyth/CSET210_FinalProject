<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Admin;

class FinalProjectController extends Controller
{
    //Start function to return register views

    function doctorForm(){
       return view("registerDoctor");
    }

    function adminForm(){
        return view("registerAdmin");
    }

    //End functions to return register views


    //Start Functions to add form data to database

    function addDoctor(Request $request){
        $data = $request->all();
        Doctor::create($data);
        return $data;
    }

    function addAdmin(Request $request){
        $data = $request->all();
        Admin::create($data);
        return $data;
    }

    //End Functions to add form data to database
}
