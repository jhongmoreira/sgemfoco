<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classificados;
use App\Models\Categoria;
use App\Models\Empresas;
use App\Models\Vagas;
use App\Models\User;

class ClassificadosController extends Controller
{
    public function index(){
        /*Busca Classificados*/
        $classificados = Classificados::orderBy('id', 'desc')->take(4)->get();

        // Verifica se existem resultados
        if ($classificados->isNotEmpty()) {
            // Obtém o primeiro resultado da coleção
            $primeiroClassificado = $classificados->first();        
            // Obtém o dono do classificado
            $donoClassificado = User::find($primeiroClassificado->id_usuario)->toArray();
        } else {
            // Caso não haja resultados
            $donoClassificado = null;
        }
        
        // foreach ($classificados as $classificado) {
        //     $dono = User::where('id', $classificado->id_usuario)->first();
        //     $donoClassificado[$classificado->id] = $dono->toArray();
        // }

        /*Busca Empresas*/
        $empresas = Empresas::all();

        $categoriaEmpresa = [];
        foreach ($empresas as $empresa) {
            $categoria = Categoria::where('id', $empresa->categoria_empresa)->first();
            $categoriaEmpresa[$empresa->categoria_empresa] = $categoria->toArray();
        }

        /*Busca Vagas*/
        $vagas = Vagas::where('aberto',1)->get();
        $nomeEmpresa = [];
        $empresaId = [];

        foreach ($vagas as $vaga) {
            $empresaId = Empresas::where('id', $vaga->cod_empresa)->first();
            $nomeEmpresa[$vaga->cod_empresa] = $empresaId->toArray();
        }

        return view('welcome',[
                    'classificados' => $classificados, 
                    'donoClassificado' => $donoClassificado, 
                    'empresas' => $empresas,
                    'categoriaEmpresa'=>$categoriaEmpresa,
                    'vagas' => $vagas,
                    'empresaId' => $empresaId,
                    'nomeEmpresa' => $nomeEmpresa
                ]);
    }

    public function show($id){
        /*Busca Classificados*/
        $classificadoShow = Classificados::findOrFail($id);
        $donoClassificado = User::where('id', $classificadoShow->id_usuario)->first()->toArray();

        return view('classificados.show', ['classificadoShow'=>$classificadoShow, 'donoClassificado'=>$donoClassificado]);
    }

}
