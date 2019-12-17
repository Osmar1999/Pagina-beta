<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class pageControllersPacientes extends Controller
{
    public function pacientes(Request $request){

        $buscar=$request->get('buscar');

        $pacientes = App\Paciente::orderBy('id','DESC')
        ->where('nombre','LIKE',"%$buscar%")
        ->paginate(5);
        
        return view('paciente',compact('pacientes'));

    }


    public function detalles2($id){
        $paciente = App\Paciente::FindOrFail($id);
        return view('detalle_paciente',compact('paciente'));
    }

    public function agregar(){
        
        return view('agregarPaciente');
    }

    public function crear(Request $request){
        //return $request->all();

        if($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $nombre = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/pictures/',$nombre);
        }  
        else{
            $nombre=NULL;
        }

        $request->validate([
            'numeroHistoria' => 'required|numeric',
            'nombre' => 'required',
            'apellidoPaterno' => 'required|alpha',
            'apellidoPaterno' => 'required|alpha',
            'sexo' => 'required',
            'nacimiento' => 'required',
            'carnet' => 'required',
            'nacionalidad' => 'required|alpha',
            'departamento' => 'required',
            'provincia' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'telefono' => 'required|numeric',
            
        
        ]);
        $pacienteNuevo = New App\Paciente;
        $pacienteNuevo->numeroHistoria = $request->numeroHistoria;
        $pacienteNuevo->nombre = $request->nombre;
        $pacienteNuevo->apellidoPaterno = $request->apellidoPaterno;
        $pacienteNuevo->apellidoMaterno = $request->apellidoMaterno;
        $pacienteNuevo->sexo = $request->sexo;
        $pacienteNuevo->nacimiento = $request->nacimiento;
        $pacienteNuevo->carnet = $request->carnet;
        $pacienteNuevo->nacionalidad = $request->nacionalidad;
        $pacienteNuevo->departamento = $request->departamento;
        $pacienteNuevo->provincia = $request->provincia;
        $pacienteNuevo->ciudad = $request->ciudad;
        $pacienteNuevo->direccion = $request->direccion;
        $pacienteNuevo->telefono = $request->telefono;
        $pacienteNuevo->avatar = $nombre;
        
        $pacienteNuevo->save();

        return back()->with('mensaje','Datos del paciente guardados exitosamente');
    }

    public function actualizar($id){
        $paciente = App\Paciente::FindOrFail($id);
        return view('edit_paciente',compact('paciente'));
    }

    public function upDate(Request $request, $id){

        $request->validate([
            'numeroHistoria' => 'required|numeric',
            'nombre' => 'required',
            'apellidoPaterno' => 'required|alpha',
            'apellidoPaterno' => 'required|alpha',
            'sexo' => 'required',
            'nacimiento' => 'required',
            'carnet' => 'required',
            'nacionalidad' => 'required|alpha',
            'departamento' => 'required',
            'provincia' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'telefono' => 'required|numeric',
        
        ]);

        $pacienteUpdate=App\Paciente::FindOrFail($id);
        $pacienteUpdate->numeroHistoria = $request->numeroHistoria;
        $pacienteUpdate->nombre = $request->nombre;
        $pacienteUpdate->apellidoPaterno = $request->apellidoPaterno;
        $pacienteUpdate->apellidoMaterno = $request->apellidoMaterno;
        $pacienteUpdate->sexo = $request->sexo;
        $pacienteUpdate->nacimiento = $request->nacimiento;
        $pacienteUpdate->carnet = $request->carnet;
        $pacienteUpdate->nacionalidad = $request->nacionalidad;
        $pacienteUpdate->departamento = $request->departamento;
        $pacienteUpdate->provincia = $request->provincia;
        $pacienteUpdate->ciudad = $request->ciudad;
        $pacienteUpdate->direccion = $request->direccion;
        $pacienteUpdate->telefono = $request->telefono;
        $pacienteUpdate->fecha = $request->fecha;

        $pacienteUpdate->save();

        return back()->with('mensaje','Datos  actualizados del paciente exitosamente');
}


        public function eliminar($id){

            $pacienteEliminar=App\Paciente::FindOrFail($id);
            $pacienteEliminar->delete();

            return back()->with('mensaje','Paciente Eliminado');
        }
}