@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('status'))
        <div class="alert alert-{{ session('status')['class'] }}" role="alert">
            {{ session('status')['message'] }}
        </div>
    @endif

    <div class="row ">
        <div class="col-md-4">
           @include('includes._sidebar')
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body row">
                    
                    <div class="card col-md-6 col-sm-12 col-xs-12" >
                        <h1 align="center">100 visualizações</h1>
                        <div class="card-body" align="center">
                            <p class="card-text" >Quantidade de visualizações que seu estabelecimento teve no mes.</p>
                            <a href="#" class="btn btn-secondary btn-block">Saber mais</a>
                        </div>
                    </div>
                    <div class="card col-md-6 col-sm-12 col-xs-12" >
                        <h1 align="center">55 Comentários</h1>
                        <div class="card-body" align="center">
                            <p class="card-text" >Quantidade de visualizações que seu estabelecimento teve no mes.</p>
                            <a href="#" class="btn btn-secondary btn-block">Saber mais</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
