<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    function index($id='')
    {
        echo "hello";
        
        
        echo $id;
        return view("prac");
    }
}
