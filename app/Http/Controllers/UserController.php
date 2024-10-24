<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Symfony\Component\String\b;

class UserController extends Controller
{
    //
    function getName(){
       // return "Deepak Rajpurohit";
       return view('user');
    }

    function details(){
        return "This is a practice page";
    }

    function getUserName($name){
        //return "User name is ". $name;
        return view('getuser',['name'=>$name]);
    }

    // function aboutIt(){
    //     return view('about');
    // }

    function aboutIt(){
        $users = ['Tan','Man','Dhan'];
        $name = 'Deepak';
        return view('about',['user'=>$name, 'users'=>$users]);
    }
    function adminLogin(){
        return view('admin.login');
    }
    function getHome(){
        return view('home');
    }
    function getPage(){
        return view('Page');
    }

    function addUser(Request $Request){
 //       echo "This is new user";
       // return $Request; //result in json format
        echo $Request->name;
        echo "<br>";
        echo $Request->email;
        echo "<br>";
        echo $Request->city;
        echo "<br>";
        print_r($Request->skill);

        echo "<br>";
        echo $Request->gender;
        echo "<br>";
        echo $Request->Native_city;

        $Request->validate([
            'name'=>'required | min:3 | max:15',
            'email'=>'required | email',
            'city'=>'required | min:3 | max:15 | uppercase',
            'skill'=>'required',
            'gender'=>'required',
            'Native_city'=>'required',
        ],[
            'name.required'=>'User name can not be empty',
            'name.min'=>'enter more then 3 letters in the name field',
            'name.max'=>'There should be less then 15 letters in the name field',
            'city.min'=>'enter more then 3 letters in the city field',
            'city.max'=>'There should be less then 15 letters in the name field'
        ]);

            }
}
