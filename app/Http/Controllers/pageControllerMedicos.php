<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class pageControllerMedicos extends Controller
{
    public function medicos(Request $request){

        $nombre=$request->get('name');
       
        $medicos = App\Plantel::orderBy('id','DESC')
        ->where('nombre','LIKE',"%$nombre%")
        ->paginate(5);

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
      
        if($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $name = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/pictures/',$name);
        }  
        else{
            $name=NULL;
        }
            
            $request->validate([
                'nombre' => 'required|alpha',
                'especialidad' => 'required|alpha',
                'telefono' => 'required'
            ]);
    
            $MedicoNuevo = new App\Plantel;
            $MedicoNuevo->nombre = $request->nombre;
            $MedicoNuevo->especialidad = $request->especialidad;
            $MedicoNuevo->telefono = $request->telefono;
            $MedicoNuevo->avatar = $name;

            $MedicoNuevo->save();
    
            return back()->with('mensaje', 'Medico agregado exitosamente');
           
    }


    public function editar($id){
        $medico = App\Plantel::FindOrFail($id);
        return view('edit_medico', compact('medico'));
    }


    public function update(Request $request, $id){

        $request->validate([
            'nombre' => 'required|alpha',
            'especialidad' => 'required|alpha',
            'telefono' => 'required'
        ]);

        $medicoUpdate=App\Plantel::FindOrFail($id);
        $medicoUpdate->nombre = $request->nombre;
        $medicoUpdate->especialidad = $request->especialidad;
        $medicoUpdate->telefono = $request->telefono;
    
        $medicoUpdate->save();
        return back()->with('mensaje2','Informacion Actualizada');
    }

    public function eliminar($id){

        $medicoEliminar=App\Plantel::FindOrFail($id);
        $medicoEliminar->delete();

        return back()->with('mensaje2','Medico eliminado');

    }

}

