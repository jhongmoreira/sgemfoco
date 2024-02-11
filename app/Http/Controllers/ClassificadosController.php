<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classificados;
use App\Models\Categoria;
use App\Models\Empresa;
use App\Models\Vaga;
use App\Models\User;

class ClassificadosController extends Controller
{
    public function index(){
        /*Busca Classificados*/
        $classificados = Classificados::orderBy('id', 'desc')->take(4)->get();

        foreach ($classificados as $classificado){
            $usuario = User::find($classificado->id_usuario);
        }

       

        /*Busca Empresas*/
        $empresas = Empresa::all();

        $categoriaEmpresa = [];
        foreach ($empresas as $empresa) {
            $categoria = Categoria::where('id', $empresa->categoria_empresa)->first();
            $categoriaEmpresa[$empresa->categoria_empresa] = $categoria->toArray();
        }

        /*Busca Vagas*/
        $vagas = Vaga::all();
        $nomeEmpresa = [];
        $empresaId = [];

        // $nomeEmpresa = [];
        // foreach ($vagas as $vaga) {
        //     $empresaId = Empresa::where('id', $vaga->cod_empresa)->first();
        //     $nomeEmpresa[$vaga->cod_empresa] = $empresaId->toArray();
        // }
        foreach ($vagas as $vaga){
            $empresa = Empresa::find($vaga->cod_empresa);
        }


        return view('welcome',[
                    'classificados' => $classificados, 
                    'empresas' => $empresas,
                    'categoriaEmpresa'=>$categoriaEmpresa,
                    'vagas' => $vagas,
                    'empresa' => $empresa
                    // 'empresaId' => $empresaId,
                    // 'nomeEmpresa' => $nomeEmpresa
                ]);
    }

    public function show($id){
        /*Busca Classificados*/
        $classificadoShow = Classificados::findOrFail($id);
        $donoClassificado = User::where('id', $classificadoShow->id_usuario)->first()->toArray();

        return view('classificados.show', ['classificadoShow'=>$classificadoShow, 'donoClassificado'=>$donoClassificado]);
    }

    public function create(){
        return view('classificados.create');
    }

    public function store(Request $request){
        $anuncio = new Classificados;
        $user = auth()->user();
        $anuncio->id_usuario = $user->id;
        $anuncio->tipo_classificado = $request->tipo;
        $anuncio->texto_classificado = $request->descricao;
        $anuncio->data_publicacao = date('Y-m-d');
        $anuncio->data_expira = date('Y-m-d', strtotime($request->data_exp));
        $anuncio->post_aprovado = 0;

        $anuncio->save();

        return redirect('/')->with('msg','Anuncio criado com sucesso. Aguarde liberação pelos administradores!');


    }

}
