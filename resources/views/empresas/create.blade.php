@extends('layouts.main')
@section('title','Detalhes do Classificado - SG em Foco')
@section('content')
<div class="container mt-5">
    <div class="main-body">

      <div class="col-md-6 mx-auto">
           <h1>Nova Empresa</h1>
           <form action="{{ route('cadastrar-empresa') }}" method="post" enctype="multipart/form-data">
            @csrf
                        
            
            <div class="form-group mt-2">
              <label for="nome">Nome</label>
              <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="form-group">
                <label for="logo">Logo</label><br>
                <input type="file" class="form-control" id="logo" name="logo">
            </div class="form-group">
            
            <div class="form-group mt-2">
              <label for="categoria">Categoria:</label>
              <select name="categoria" id="categoria" class="form-control">
                @foreach($categorias as $categoria)
                  <option value="{{ $categoria->id }}">{{ $categoria->nome_categoria }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group mt-2">
              <label for="telefone">Telefone</label>
              <input type="text" name="telefone" id="telefone" class="form-control">
            </div>

            <div class="form-group mt-2">
              <label for="whatsapp">Whatsapp</label>
              <input type="text" name="whatsapp" id="whatsapp" class="form-control">
            </div>

            <div class="form-group mt-2">
              <label for="site">Site</label>
              <input type="text" name="site" id="site" class="form-control">
            </div>

            <div class="form-group mt-2">
              <label for="facebook">Facebook</label>
              <input type="text" name="facebook" id="facebook" class="form-control">
            </div>

            <div class="form-group mt-2">
              <label for="email">E-mail</label>
              <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="form-group mt-2">
              <label for="instagram">Instagram</label>
              <input type="text" name="instagram" id="instagram" class="form-control">
            </div>

            <div class="form-group mt-2">
              <label for="rua">Rua</label>
              <input type="text" name="rua" id="rua" class="form-control">
            </div>

            <div class="form-group mt-2">
              <label for="numero">Número</label>
              <input type="text" name="numero" id="numero" class="form-control">
            </div>

            <div class="form-group mt-2">
              <label for="bairro">Bairro</label>
              <input type="text" name="bairro" id="bairro" class="form-control">
            </div>

            <div class="form-group mt-2">
              <label for="cidade">Cidade</label>
              <input type="text" name="cidade" id="cidade" class="form-control">
            </div>          

            <input type="submit" value="Enviar" class="btn btn-primary mt-2">

           </form>
      </div>

    </div>  
  </div>
@endsection