<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageControllersPacientes extends Controller
{
    public function pacientes(){
        return view('paciente');

    }
}
