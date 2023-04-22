<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Client\RequestException;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Barrio;

class DefinicionesController extends Controller
{
    public function spviewVinculos() {
        try {
            $data = DB::select("select * from view_vinculos");
            return $data;
        } catch(ConnectionException $e) {
            return 0;
        }
    }


    public function spviewPaises() {
        try {
            $data = DB::select("select * from view_paises");
            return $data;
        } catch(ConnectionException $e) {
            return 0;
        }
    }

    public function spviewDepartamentos() {
        try {
            $data = DB::select("select * from view_departamentos");
            return $data;
        } catch(ConnectionException $e) {
            return 0;
        }
    }

    public function spviewCiudades() {
        try {
            $data = DB::select("select * from view_ciudades");
            return $data;
        } catch(ConnectionException $e) {
            return 0;
        }
    }

    public function spviewBarrios() {
        try {
            $data = DB::select("select * from view_barrios");
            return $data;
        } catch(ConnectionException $e) {
            return 0;
        }
    }

    public function spviewBarriosxidCiudad($id_ciudad) {
        try {
            $response = Barrio::select('barrios.*')
            ->where ('barrios.id_ciudad','=', $id_ciudad)
            ->get();
            return $response;
        } catch(ConnectionException $e) {
            return 0;
        }
    }

    public function spviewBarriosxidCiudadSP($id_ciudad) {
        try {
            $data = DB::select('call barriosxidciudad(?)',array($id_ciudad));
            return $data;
        } catch(ConnectionException $e) {
            return 0;
        }
    }

    public function spviewTiposEvaluaciones() {
        try {
            $data = DB::select("select * from view_tipoevaluaciones");
            return $data;
        } catch(ConnectionException $e) {
            return 0;
        }
    }
    
    public function spviewTiposTest() {
        try {
            $data = DB::select("select * from view_tipostest");
            return $data;
        } catch(ConnectionException $e) {
            return 0;
        }
    }
    
}
