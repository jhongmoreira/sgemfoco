@extends('layouts.main')
@section('title','Página Principal - SG em Foco')
@section('content')
<div id="destaques" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#destaques" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#destaques" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <!-- <button type="button" data-bs-target="#destaques" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="banner-1"></div>
            <div class="container texto-container">
                <div class="carousel-caption text-start">
                    <h1>Supermercado Central</h1>
                    <p>Sua compra com o melhor preço da cidade.</p>
                    <p><a class="btn btn-sm btn-primary" href="#">Acessar Feed</a></p>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="banner-2"></div>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Farmácia São Sebastião</h1>
                    <p>Descontos imperdíveis em medicamentos genéricos</p>
                    <p><a class="btn btn-sm btn-primary" href="#">Acessar Feed</a></p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#destaques" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#destaques" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<section class="container-fluid mt-4">

    <div class="container">

        <div class="row mb-2">
            <div class="col-md-12 titulos-home-border-left">
                <h3 class="border-titulo">
                    <span class="titulos-home">
                        Classificados
                    </span>
                </h3>
            </div>
        </div>

        <div class="row">
            @if(count($classificados) == 0)
                <div class="alert alert-danger"><li class="fa-solid fa-warning"></li> Nenhum classificado cadastrado no momento</div>
            @else
                @foreach($classificados as $classificado)
                    @if($classificado->post_aprovado == 1)
                    <div class="col-md-3 mb-4">
                        <div class="card" style="">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <span>{{$classificado->tipo_classificado}}</span>
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <span>{{$classificado->texto_classificado}}</span>
                                    <div class="mt-2">                                
                                        <small><i class="fa-solid fa-user"></i> {{$donoClassificado[$classificado->id]['name']}}</small>
                                    </div>
                                </h6>
                                <a href="#"
                                    class="card-link">Ver</a>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endif
            
        </div>


        <div class="row mb-2">
            <div class="col-md-12 titulos-home-border-left">
                <h3 class="border-titulo">
                    <span class="titulos-home">
                        Empresas
                    </span>
                </h3>
            </div>
        </div>

        <div class="friend-list">
            <div class="row">
            @if(count($empresas) == 0)
                <div class="alert alert-danger"><li class="fa-solid fa-warning"></li> Nenhum empresa cadastrado no momento</div>
            @else
                @foreach($empresas as $empresa)
                <div class="col-md-4 col-sm-6">
                    <div class="friend-card card">
                        <img src="img/conteudo/background_profile.jpg" alt="profile-cover" class="img-responsive cover">
                        <div class="card-info">
                            <img src="img/empresa_placeholder.png" alt="user"
                                class="profile-photo-lg">
                            <div class="friend-info">
                                <p class="float-end text-green">{{$empresa->cidade_empresa}}</p>
                                <h5><a href="index.php"
                                        class="profile-link">
                                        {{$empresa->nome_empresa}}
                                    </a></h5>
                                <p class="categoria-empresa">
                                    Serviços
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif            
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-3 mb-5 d-flex justify-content-left">
                <a href="index.php?pg=5" class="btn btn-sm btn-primary">
                    Ver Empresas
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="p-5 mb-5 bg-dark text-white rounded">
                    <h1>Tenha sua presença aqui</h1>
                    <p>Cadastre sua empresa, vagas de emprego e acesse currículos de São Gotardo e região.</p>
                    <button class="btn btn-secondary">Cadastrar-se</button>
                </div>
            </div>
        </div>


        <div class="row mb-2">
            <div class="col-md-12 titulos-home-border-left">
                <h3 class="border-titulo">
                    <span class="titulos-home">
                        Vagas de Emprego
                    </span>
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card" style="height: 7.5em;">
                    <div class="card-body">
                        <h5 class="card-title">
                            Designer Gráfico
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Atual Agência 
                        </h6>
                        <p class="card-text">
                            <span class="categoria badge bg-sucess ?>">
                                Disponível
                            </span>
                        </p>
                        <a href="index.php" class="card-link">Ver Vaga</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-3 mb-5 d-flex justify-content-left">
                <a href="index.php?pg=5" class="btn btn-sm btn-primary">
                    Ver Todas
                </a>
            </div>
        </div>



    </div>


</section>
@endsection