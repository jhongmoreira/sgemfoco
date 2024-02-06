@extends('layouts.main')
@section('title','Detalhes do Classificado - SG em Foco')
@section('content')
<div class="container mt-5">
    <div class="main-body">

      <div class="col-md-6 mx-auto">
           <h1>Anuncie aqui</h1>
           <form action="/anunciar" method="post">
            @csrf
                        
            <div class="form-group mt-2">
              <label for="tipo">Tipo:</label>
              <select name="tipo" id="tipo" class="form-control">
                <option value="Teste">Teste</option>
              </select>
            </div>

            <div class="form-group mt-2">
              <label for="descricao">Descrição</label>
              <textarea name="descricao" id="descricao" cols="30" rows="2" class="form-control"></textarea>
            </div>

            <div class="form-group mt-2">
              <label for="titulo">Data:</label>
              <input type="date" name="data_exp" id="data_exp" class="form-control">
            </div>

            <input type="submit" value="Enviar" class="btn btn-primary mt-2">

           </form>
      </div>

    </div>  
  </div>
@endsection