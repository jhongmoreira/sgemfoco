<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classificados;
use App\Models\Categoria;
use App\Models\Empresas;
use App\Models\User;

class ClassificadosController extends Controller
{
    public function index(){
        /*Busca Classificados*/
        $classificados = Classificados::all();
        $donoClassificado = [];
        foreach ($classificados as $classificado) {
            $dono = User::where('id', $classificado->id_usuario)->first();
            $donoClassificado[$classificado->id] = $dono->toArray();
        }

        /*Busca Empresas*/
        $empresas = Empresas::all();

        $categoriaEmpresa = [];
        foreach ($empresas as $empresa) {
            $categoria = Categoria::where('id', $empresa->categoria_empresa)->first();
            $categoriaEmpresa[$empresa->categoria_empresa] = $categoria->toArray();
        }

        return view('welcome',[
                    'classificados' => $classificados, 
                    'donoClassificado' => $donoClassificado, 
                    'empresas' => $empresas,
                    'categoriaEmpresa'=>$categoriaEmpresa
                ]);
    }

}
