<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function getHomePage(){
        echo __CLASS__;
        echo "</br>";
        echo __FUNCTION__;
    }
    //truyen tham so vo controller cach 1
    function getHomePage2($p = 'iphone'){
       echo $p;
    }
    //truyen tham so controller cach 2
    function getHomePage3(Request $request){
        echo '4384042';
        echo '</br>';
        echo $request->product;
     }
}
