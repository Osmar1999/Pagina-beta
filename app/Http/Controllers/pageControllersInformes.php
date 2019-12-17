<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PDF;

class pageControllersInformes extends Controller
{
    public function informes(Request $request){
       
        $buscar=$request->get('buscar');

        $informes = App\Informe::orderBy('id','DESC')
        ->where('paciente','LIKE',"%$buscar%") 
        
        ->paginate(5);

        return view('informe',compact('informes'));

    }

    public function detalle($id){
        $informe = App\Informe::FindOrFail($id);
        return view('detalle_informe',compact('informe'));
    }

    public function imagen($id){
        $informe = App\Informe::FindOrFail($id);
        return view('imagenes_informe',compact('informe'));
    }

    public function agregar(){
        
        return view('agregarInforme');
    }

    public function crear(Request $request){

        if($request->hasFile('imagen')){
            $file=$request->file('imagen');
            $name1 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/pictures/',$name1);
        } 
        else{
            $name1=NULL;
        }

        if($request->hasFile('avatar2')){
            $file=$request->file('avatar2');
            $name2 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/pictures/',$name2);
        } 
        else{
            $name2=NULL;
        }
        if($request->hasFile('avatar3')){
            $file=$request->file('avatar3');
            $name3 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/pictures/',$name3);
        } 
        else{
            $name3=NULL;
        }
        if($request->hasFile('avatar4')){
            $file=$request->file('avatar4');
            $name4 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/pictures/',$name4);
        } 
        else{
            $name4=NULL;
        }
        if($request->hasFile('avatar5')){
            $file=$request->file('avatar5');
            $name5 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/pictures/',$name5);
        } 
        else{
            $name5=NULL;
        }
        if($request->hasFile('avatar6')){
            $file=$request->file('avatar6');
            $name6 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/pictures/',$name6);
        } 
        else{
            $name6=NULL;
        }
        $request->validate([
            'tipo' => 'required',
            'tecnica' => 'required',
            'paciente' => 'required',
            'medico' => 'required',
            'diagnostico' => 'required',
            'obvservaciones' => 'required',
            'area' => 'required',

        ]);
        
        $informeNuevo = New App\Informe;
        $informeNuevo->tipo = $request->tipo;
        $informeNuevo->tecnica = $request->tecnica;
        $informeNuevo->paciente = $request->paciente;
        $informeNuevo->medico = $request->medico;
        $informeNuevo->diagnostico = $request->diagnostico;
        $informeNuevo->obvservaciones = $request->obvservaciones;
        $informeNuevo->area = $request->area;
        $informeNuevo->imagen = $name1;
        $informeNuevo->avatar2 = $name2;
        $informeNuevo->avatar3 = $name3;
        $informeNuevo->avatar4 = $name4;
        $informeNuevo->avatar5 = $name5;
        $informeNuevo->avatar6 = $name6;

        $informeNuevo->save();
        return back()->with('mensaje', 'Informe creado exitosamente');


        //return $request->all();

        }

        public function actualizar($id){
            $informe = App\Informe::FindOrFail($id);
            return view('edit_informe',compact('informe'));
        }
    

        public function upDate(Request $request, $id){
            $request->validate([
                'tipo' => 'required',
                'tecnica' => 'required',
                'paciente' => 'required',
                'medico' => 'required',
                'diagnostico' => 'required',
                'obvservaciones' => 'required',
                'area' => 'required',
            ]);

            $informeUpdate=App\Informe::FindOrFail($id);
            $informeUpdate->tipo = $request->tipo;
            $informeUpdate->tecnica = $request->tecnica;
            $informeUpdate->paciente = $request->paciente;
            $informeUpdate->medico = $request->medico;
            $informeUpdate->diagnostico = $request->diagnostico;
            $informeUpdate->obvservaciones = $request->obvservaciones;
            $informeUpdate->area = $request->area;
    
            $informeUpdate->save();
            return back()->with('mensaje', 'Informe actualizado exitosamente');
      }
    
      public function eliminar($id){

        $informeEliminar=App\Informe::FindOrFail($id);
        $informeEliminar->delete();

        return back()->with('mensaje','Informe Eliminado');
    }
    
    public function descarga($id){
        $descarga = App\Informe::FindOrFail($id);
        
        $pdf = PDF::loadView('descarga_informe', compact('descarga'));

        return $pdf->download('informe-list.pdf');
    }

    }