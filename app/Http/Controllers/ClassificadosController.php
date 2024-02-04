<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classificados;
use App\Models\User;

class ClassificadosController extends Controller
{
    public function index(){
        $classificados = Classificados::all();

        $donoClassificado = [];

        foreach ($classificados as $classificado) {
            $dono = User::where('id', $classificado->id_usuario)->first();
            $donoClassificado[$classificado->id] = $dono->toArray();
        }

        return view('welcome', ['classificados' => $classificados, 'donoClassificado' => $donoClassificado]);
    }

}
