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

Route::get('/informe','pageControllersInformes@informes')->name('ruta_informe');

Route::get('/paciente','pageControllersPacientes@pacientes')->name('ruta_paciente');

Route::get('/medico','pageControllerMedicos@medicos')->name('ruta_medico');

Route::get('/detalle{id}','pageControllerMedicos@detalles')->name('medico_detalles');

Route::get('/AgregarMedico','pageControllerMedicos@agregar')->name('medico_agregar');

Route::post('/nuevoMedico','pageControllerMedicos@crear')->name('medico.crear');

Route::get('/EditarMedico/{id}','pageControllerMedicos@editar')->name('medico_editar');

Route::put('UpdateDatosMedico/{id}','pageControllerMedicos@update')->name('medico_update');