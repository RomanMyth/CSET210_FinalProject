<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testtable;

class FinalProjectController extends Controller
{
    function addData(Request $request){
        $test=$request->all();
        Testtable::create($test);
        return $test;
    }
}
