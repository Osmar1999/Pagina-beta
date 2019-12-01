<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageControllersInformes extends Controller
{
    public function informes(){
        return view('informe');

    }
}
