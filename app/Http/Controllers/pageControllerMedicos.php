<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class pageControllerMedicos extends Controller
{
    public function medicos(){
        $medicos = App\Plantel::all();
        return view('medico',compact('medicos'));
    }

    public function detalles($id){
        $medico = App\Plantel::FindOrFail($id);
        return view('medicosDetalles',compact('medico'));
    }

    public function agregar(){
        
        return view('agregarMedico');
    }

    public function crear(Request $request){
        //return $request->all();

        $request->validate([
            'nombre' => 'required',
            'especialidad' => 'required',
            'telefono' => 'required'
        ]);

        $medicoNuevo = new App\Plantel;
        $medicoNuevo->nombre=$request->nombre;
        $medicoNuevo->especialidad=$request->especialidad;
        $medicoNuevo->telefono=$request->telefono;
        
        $medicoNuevo->save();

        return back()->with('mensaje','Medico Agregado Exitosamente');

    }

    public function editar($id){
        $medico = App\Plantel::FindOrFail($id);
        return view('editar_medico', compact('medico'));
    }


    public function update(Request $request, $id){

        $medicoUpdate=App\Plantel::FindOrFail($id);
        $medicoUpdate->nombre = $request->nombre;
        $medicoUpdate->especialidad = $request->especialidad;
        $medicoUpdate->telefono = $request->telefono;
    
        $medicoUpdate->save();
        return back()->with('mensaje2','Informacion Actualizada');
    }

}

