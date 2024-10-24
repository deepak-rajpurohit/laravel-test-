<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        return "This is students list for new session";
    }
    function add(){
        return "Add new students";
    }
    function delete(){
        return "Delete students";
    }
}
