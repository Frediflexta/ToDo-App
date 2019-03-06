<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewPageController extends Controller
{
    public function new() 
    {
        return view('newPage');
    }
}
