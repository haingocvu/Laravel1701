<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function getDetailPage(){
        $title = "detail page";
        return view("admin.detail", compact('title'));
    }
    
    function getTypePage(){
        $title = "type page";
        return view("admin.type", compact('title'));
    }

    function getHomePage(){
        $title = "home page";
        return view("admin.home", compact('title'));
    }
}
