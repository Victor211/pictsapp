<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Client\RequestException;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Arr;

class EvaluacionesController extends Controller
{
    public function spEjecutarEvaluacion($id_tipo_evaluacion) {
        //$id_tipo_evaluacion = $request->id_tipo_evaluacion;
        try {
            $preguntas = DB::select('call sp_preguntas_id_tipo_evaluacion(?)',array($id_tipo_evaluacion));
            //return $preguntas ;
            $evaluacion = [];
            foreach ($preguntas as $value) {
                $respuestas = DB::select('call sp_respuestas_id_pregunta(?)',array($value->id_pregunta));
                $valores = [
                    'id_pregunta'=>$value->id_pregunta,
                    'titulo'=>$value->titulo,
                    'descripcion'=>$value->descripcion,
                    'cuerpo'=>$value->cuerpo,
                    'imagen'=>$value->imagen, 
                    'sonido'=>$value->sonido, 
                    'respuestas'=>$respuestas
                ];
                //return $valores;
                array_push($evaluacion, $valores);
            }
            return $evaluacion;
        } catch(\Exception $e) {
            return $e;
        }
    }

    public function spCargarEvaluacion(Request $request) {

    }

    public function spAnularEvaluacion(Request $request) {

    }
    
}
