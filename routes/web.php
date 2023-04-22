<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PersonasController;
use App\Http\Controllers\DefinicionesController;
//use App\Http\Controllers\EvaluacionesController;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/pacientes', function () {
    return view('pages/pacientes/pacientes');
});
Route::get('/ejercicios', function () {
    return view('pages/ejercicios/ejercicios');
});
Route::get('/paises', function () {
    return view('pages/definiciones/paises');
});
Route::get('/departamentos', function () {
    return view('pages/definiciones/departamentos');
});
Route::get('/ciudades', function () {
    return view('pages/definiciones/ciudades');
});
Route::get('/barrios', function () {
    return view('pages/definiciones/barrios');
});


Route::get('/tipotest', function () {
    return view('pages/definiciones/tipotest');
});
Route::get('/tiposevaluacion', function () {
    return view('pages/definiciones/tiposevaluacion');
});
Route::get('/preguntas', function () {
    return view('pages/definiciones/preguntas');
});
Route::get('/respuestas', function () {
    return view('pages/definiciones/respuestas');
});


Route::middleware(['auth'])->group(function () {

});

//Require_once __DIR__ . '/modulos/.php'; 

Route::controller(PersonasController::class)->group(function () {
    Route::get("listarpersonas", 'spviewPacientesTutores');
    Route::get("listartutores", 'spviewTutores');
    Route::get("listarpacientes", 'spviewPacientes');
    Route::get("listarpacientestutoresxid/{id_persona}", 'listaPersonaxID');//eloquent
});

Route::controller(DefinicionesController::class)->group(function () {
    Route::get("listarpaises", 'spviewPaises');
    Route::get("listardepartamentos", 'spviewDepartamentos');
    Route::get("listarciudades", 'spviewCiudades');
    Route::get("listarbarrios", 'spviewBarrios');
    Route::get("listarbarriosxidciudad/{id_ciudad}", 'spviewBarriosxidCiudad'); //vista rapida
    Route::get("listarbarriosxidciudadsp/{id_ciudad}", 'spviewBarriosxidCiudadSP');//procedimiento almacenado

    Route::get("listarvinculos", 'spviewVinculos');
    Route::get("listartiposevaluaciones", 'spviewTiposEvaluaciones');
    Route::get("listartipostest", 'spviewTiposTest');
});
