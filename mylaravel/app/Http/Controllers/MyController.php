<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private function myprivate(){
        return 1;
    }
    function myfunction(){
        echo $this ->myprivate();             
        return "<h1>My Controller</h1>";
    }
}
