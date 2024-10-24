<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

function show(){
    //return redirect()->to('/home2/profile/page');
    return to_route('hm');
}
function user1(){
    return to_route('user1',["name"=>'Deepak']);
}
}
