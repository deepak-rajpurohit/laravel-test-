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
    public function hello(){

    }
    function delete(){
        return "Delete students";
    }
    public function profile($name){
        return $name;
    }
}
