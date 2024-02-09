<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Empresa;


class Empresas extends Controller
{
    public function create(){
        $categorias = Categoria::orderBy('id', 'desc')->get();
        return view("empresas.create", ['categorias' => $categorias]);
    }

    public function store(Request $request){
        $empresa = new Empresa;
        $empresa->nome_empresa = $request->nome;
        $empresa->categoria_empresa = $request->categoria;
        $empresa->telefone_empresa = $request->telefone;
        $empresa->whatsapp_empresa = $request->whatsapp;
        $empresa->site_empresa = $request->site;
        $empresa->instagram_empresa = $request->instagram;
        $empresa->facebook_empresa = $request->facebook;
        $empresa->email_empresa = $request->email;
        $empresa->rua_empresa = $request->rua;
        $empresa->numero_empresa = $request->numero;
        $empresa->bairro_empresa = $request->bairro;
        $empresa->cidade_empresa = $request->cidade;
        $empresa->visivel = 0;

        // Logo Upload
        if($request->hasFile('logo') && $request->file('logo')->isValid()){
            $requestImage = $request->logo;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now").".".$extension);
            $requestImage->move(public_path('img/empresas'), $imageName);
            $empresa->logotipo_empresa = $imageName;
        }

        $empresa->save();

        return redirect('/')->with('msg','Empresa cadastrada. Aguarde liberação pelo Administrador do Sistema!');

    }
}
