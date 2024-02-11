@extends('layouts.main')
@section('title','Detalhes do Classificado - SG em Foco')
@section('content')
<div class="container mt-5">
    <div class="main-body">

      <div class="col-md-6 mx-auto">
           <h1>Nova Vaga de Emprego</h1>
           <form action="{{ route('cadastrar-vaga') }}" method="post">
            @csrf                    
            <div class="form-group mt-2">
              <label for="empresa">Empresa</label>
              <select name="empresa" id="empresa" class="form-control">
                @foreach($empresas as $empresa)
                  <option value="{{ $empresa->id }}">{{ $empresa->nome_empresa }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group mt-2">
              <label for="titulo">Título da vaga</label>
              <input type="text" name="titulo" id="titulo" class="form-control">
            </div>

            <div class="form-group mt-2">
              <label for="salario">Salário</label>
              <input type="number" step="0.01" name="salario" id="salario" class="form-control">
            </div>
          
            <div class="form-group mt-2">
              <label for="escolaridade">Escolaridade:</label>
              <select name="escolaridade" id="escolaridade" class="form-control">
                  <option value="nenhuma">Nenhuma exigência</option>
                  <option value="fundamental">Fundamental</option>
                  <option value="medio">Médio</option>
                  <option value="superior">Superior</option>
                  <option value="posgraduado">Pós-graduado</option>
                  <option value="mestrado">Mestrado</option>
                  <option value="doutorado">Doutorado</option>
              </select>
            </div>

            <div class="form-group mt-2">
              <label for="descricao">Descrição</label>
              <textarea name="descricao" id="descricao" rows="5" class="form-control"></textarea>
            </div>          

            <input type="submit" value="Enviar" class="btn btn-primary mt-2">

           </form>
      </div>

    </div>  
  </div>
@endsection