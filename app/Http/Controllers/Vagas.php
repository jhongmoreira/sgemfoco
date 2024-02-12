<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;
use App\Models\Empresa;

class Vagas extends Controller
{
    //
    public function create(){
        $empresas = Empresa::all();
        return view("vagas.create", ['empresas'=>$empresas]);
    }

    public function store(Request $request){
        $vaga = new Vaga;

        $vaga->cod_empresa = $request->empresa;
        $vaga->nome_vaga = $request->titulo;
        $vaga->salario = $request->salario;
        $vaga->escolaridade = $request->escolaridade;
        $vaga->descricao = $request->descricao;
        $vaga->data_exp = date('Y-m-d', strtotime($request->data_exp));
        $vaga->aberto = 1;

        $vaga->save();

        return redirect("/")->with("msg", "Vaga cadastrada com sucesso!");
    }

    public function show($id){
        $vaga = Vaga::find($id);
        $empresa = Empresa::find($vaga->cod_empresa);

        return view("vagas.show", ['vaga' => $vaga, 'empresa'=>$empresa]);
    }
}
