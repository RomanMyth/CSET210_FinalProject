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

    function doctorForm(){
       return view("registerDoctor");
    }

    function addDoctor(Request $request){
        $data = $request->all();
        Doctor::create($data);
        return $data;
    }
    function showAdminReport(){
        return view("AdminsReport");
    }
    function showdoctorsappointment(){
        return view("DoctorsAppointment");
    }
}
