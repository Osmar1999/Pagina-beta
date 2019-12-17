<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','pageControllersIndex@inicio' )->name('ruta_inicio');
Route::get('/manual','pageControllersIndex@manual')->name('ruta_manual');


Route::get('/informe','pageControllersInformes@informes')->name('ruta_informe');

Route::get('/detalleInforme{id}','pageControllersInformes@detalle')->name('detalle_informe');

Route::get('/agregarinforme','pageControllersInformes@agregar')->name('informe_agregar');

Route::post('/crearinforme','pageControllersInformes@crear')->name('informe.crearInf');

Route::get('/editarInforme{id}','pageControllersInformes@actualizar')->name('informe_editar');

Route::put('/updateInforme{id}','pageControllersInformes@upDate')->name('informe_update');

Route::delete('/eliminarInforme/{id}','pageControllersInformes@eliminar')->name('informe.eliminar');

Route::get('/ImagenesInforme{id}','pageControllersInformes@imagen')->name('ver_imagen');

Route::get('/DescargaInforme{id}','pageControllersInformes@descarga')->name('informe.pdf');






Route::get('/solicitud','pageControllersSolicitudes@solicitudes')->name('ruta_solicitud');

Route::get('/detallesolicitud{id}','pageControllersSolicitudes@detalle')->name('solicitud_detalles');

Route::get('/agregarsolicitud','pageControllersSolicitudes@agregar')->name('solicitud_agregar');

Route::post('/crearSolicitud','pageControllersSolicitudes@crearSoli')->name('solicitud.crear');

Route::get('/editarSolicitud{id}','pageControllersSolicitudes@editar')->name('solicitud_editar');

Route::put('/updateSolicitud{id}','pageControllersSolicitudes@upDate')->name('solicitud_update');

Route::delete('/eliminarSolicitud/{id}','pageControllersSolicitudes@eliminar')->name('soliciud.eliminar');



Route::get('/paciente','pageControllersPacientes@pacientes')->name('ruta_paciente');

Route::get('/detallePaciente{id}','pageControllersPacientes@detalles2')->name('paciente_detalles');

Route::get('/AgregarPaciente','pageControllersPacientes@agregar')->name('paciente_agregar');

Route::post('/crearPaciente','pageControllersPacientes@crear')->name('paciente.crear');

Route::get('/actualizarPaciente{id}','pageControllersPacientes@actualizar')->name('paciente.editar');

Route::put('/updatePaciente{id}','pageControllersPacientes@upDate')->name('paciente.update');

Route::delete('/eliminarPaciente/{id}','pageControllersPacientes@eliminar')->name('paciente.eliminar');




Route::get('/medico','pageControllerMedicos@medicos')->name('ruta_medico');

Route::get('/detalleMedico{id}','pageControllerMedicos@detalles')->name('medico_detalles');

Route::get('/AgregarMedico','pageControllerMedicos@agregar')->name('medico_agregar');

Route::post('/nuevoMedico','pageControllerMedicos@crear')->name('medico.crear');

Route::get('/EditarMedico/{id}','pageControllerMedicos@editar')->name('medico_editar');

Route::put('UpdateDatosMedico/{id}','pageControllerMedicos@update')->name('medico_update');

Route::delete('EliminarDatosMedico/{id}','pageControllerMedicos@eliminar')->name('medicos.eliminar');

//Route::get('/medicoBuscar','pageControllerMedicos@buscar')->name('medico.buscar');



