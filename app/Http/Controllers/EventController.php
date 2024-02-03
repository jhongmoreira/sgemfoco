<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classificados;
use App\Models\User;

class EventController extends Controller
{
    public function index(){
        $classificados = Classificados::all();
        $donosClassificados = [];

        foreach ($classificados as $classificado) {
            $donoClassificado = User::find($classificado->id_usuario);

            // Verifica se o usuário foi encontrado antes de adicionar ao array
            if ($donoClassificado) {
                $donosClassificados[] = $donoClassificado->toArray();
            }
        }

        return view('welcome', ['classificados' => $classificados, 'donosClassificados' => $donosClassificados]);
    }

}
