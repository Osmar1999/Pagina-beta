<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class pageControllersSolicitudes extends Controller
{
    public function solicitudes(Request $request){
        
        $buscar=$request->get('buscar');

        $solicitudes = App\Solicitud::orderBy('id','DESC')
        ->where('solicitante','LIKE',"%$buscar%")
        ->paginate(5);

        return view('solicitud',compact('solicitudes'));

    }

    public function detalle($id){
        $solicitud = App\Solicitud::FindOrFail($id);
        return view('detalle_solicitud',compact('solicitud'));
    }

    public function agregar(){
        
        return view('agregarSolicitud');
    }

    public function crearSoli(Request $request){
    
        $request->validate([
            'numeroCamilla' => 'required',
            'numeroHabitacion' => 'required',
            'nivel' => 'required',
            'solicitante' => 'required',
            'area' => 'required',
            'tipo' => 'required',
            'diagnostico' => 'required',
           
        
        ]);
        $solicitudNueva = New App\Solicitud;
        $solicitudNueva->numeroCamilla = $request->numeroCamilla;
        $solicitudNueva->numeroHabitacion = $request->numeroHabitacion;
        $solicitudNueva->nivel = $request->nivel;
        $solicitudNueva->solicitante = $request->solicitante;
        $solicitudNueva->area = $request->area;
        $solicitudNueva->tipo = $request->tipo;
        $solicitudNueva->diagnostico = $request->diagnostico;
       

        $solicitudNueva->save();
        return back()->with('mensaje', 'Solicitud creada exitosamente');

    }

    public function editar($id){
        $solicitud = App\Solicitud::FindOrFail($id);
        return view('edit_solicitud',compact('solicitud'));
    }


    public function upDate(Request $request, $id){

        $request->validate([
            'numeroCamilla' => 'required',
            'numeroHabitacion' => 'required',
            'nivel' => 'required',
            'solicitante' => 'required',
            'area' => 'required',
            'tipo' => 'required',
            'diagnostico' => 'required',
            
        
        ]);
        $solicitudUpdate=App\Solicitud::FindOrFail($id);
        
        $solicitudUpdate->numeroCamilla = $request->numeroCamilla;
        $solicitudUpdate->numeroHabitacion = $request->numeroHabitacion;
        $solicitudUpdate->nivel = $request->nivel;
        $solicitudUpdate->solicitante = $request->solicitante;
        $solicitudUpdate->area = $request->area;
        $solicitudUpdate->tipo = $request->tipo;
        $solicitudUpdate->diagnostico = $request->diagnostico;
        
            
        $solicitudUpdate->save();
        return back()->with('mensaje', 'Solicitud actudalizada exitosamente');
    }

    public function eliminar($id){

        $solicitudEliminar=App\Solicitud::FindOrFail($id);
        $solicitudEliminar->delete();

        return back()->with('mensaje','Solicitud Eliminada');
    }
    

}
