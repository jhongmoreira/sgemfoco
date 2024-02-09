<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categoria extends Controller
{
    public function show(){
        $categorias = Categorias::orderBy('id', 'desc')->get();

        return $categorias;
    }
}
