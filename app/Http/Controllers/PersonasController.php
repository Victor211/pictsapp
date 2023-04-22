<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Client\RequestException;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Persona;

class PersonasController extends Controller
{
    public function spviewPacientesTutores() {
        try {
            $data = DB::select("select * from view_pacientes_tutores");
            return $data;
        } catch(ConnectionException $e) {
            return 0;
        }
    }

    public function listaPersonaxID($id_persona) {
        try {
            $response = Persona::select('personas.*')
            ->where ('personas.id_persona','=', $id_persona)
            ->get();
            return $response;
        } catch(ConnectionException $e) {
            return 0;
        }
    }

    public function spviewTutores() {
        try {
            $data = DB::select("select * from view_tutores");
            return $data;
        } catch(ConnectionException $e) {
            return 0;
        }
    }

    public function spviewPacientes() {
        try {
            $data = DB::select("select * from view_pacientes");
            return $data;
        } catch(ConnectionException $e) {
            return 0;
        }
    }



}
