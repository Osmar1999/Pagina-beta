<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageControllersIndex extends Controller
{
    public function inicio(){
        return view('welcome');

    }

    public function manual(){
        return view('manual');
    }
}