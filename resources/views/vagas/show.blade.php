@extends('layouts.main')
@section('title','Detalhes do Classificado - SG em Foco')
@section('content')
<div class="container mt-5">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?pg=6">Vagas</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $vaga->id }}</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="../img/empresas/{{ $empresa->logotipo_empresa }}" alt="Logo da Empresa" width="150">
                    <div class="mt-3">
                      <h4>{{ $empresa->nome_empresa }} <h4>
                      <!-- <p class="text-secondary mb-1">###</p> -->
                      <p class="text-muted font-size-sm">{{ $empresa->cidade_empresa }}</p>
                      <button class="btn btn-primary">Enviar Mensagem</button>
                      <!-- <button class="btn btn-outline-primary">Message</button> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg> Website</h6>
                    <span class="text-secondary">{{ $empresa->site_empresa }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg> Instagram</h6>
                    <span class="text-secondary">{{ $empresa->instagram_empresa }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg> Facebook</h6>
                    <span class="text-secondary">{{ $empresa->facebook_empresa }}</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $empresa->email_empresa }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telefone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $empresa->telefone_empresa }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Whatsapp</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $empresa->whatsapp_empresa }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Endereço</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $empresa->rua_empresa.", n° ".$empresa->numero_empresa." - ".$empresa->bairro_empresa }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">{{ $vaga->nome_vaga }}</i>
                    </h6>
                        <span class="categoria badge ###">
                        </span>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><small><i class="fa-solid fa-hashtag"></i> {{ $vaga->id }} </small></li>
                      <li class="list-group-item"><small><i class="fa-solid fa-calendar"></i>  {{ "até ".date('d/m/Y', strtotime($vaga->data_exp)) }} </small></li>
                      <li class="list-group-item"><small><i class="fa-solid fa-briefcase"></i> {{ $vaga->nome_vaga }} </small></li>
                      <li class="list-group-item"><small><i class="fa fa-solid fa-graduation-cap"></i> {{ $vaga->escolaridade }}</small></li>
                      <li class="list-group-item"><small><i class="fa fa-solid fa-money-bill"></i> {{" R$ ".number_format($vaga->salario, 2, ',', ' ') }}</small></li>
                    </ul>
                    <div>
                        <h6 class="d-flex align-items-center mt-2"><i class="material-icons text-info mr-2">Como se candidatar?</i></h4>
                    </div>
                    <p>{{ $vaga->descricao}}</p>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>  
@endsection