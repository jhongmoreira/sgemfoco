@extends('layouts.main')
@section('title','Detalhes do Classificado - SG em Foco')
@section('content')
<div class="container mt-5">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?pg=5">Classificados</a></li>
              <li class="breadcrumb-item active" aria-current="page">#{{$classificadoShow->id}}</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <div class="mt-3">
                      <h4>{{$donoClassificado['name']}}</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"> E-mail</h6>
                    <span class="text-secondary">{{$donoClassificado['email']}}</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Categoria</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$classificadoShow->tipo_classificado}}
                    </div>
                  </div>                
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Anúncio</i></h6>
                      {{$classificadoShow->texto_classificado}}
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>  
  </div>
@endsection