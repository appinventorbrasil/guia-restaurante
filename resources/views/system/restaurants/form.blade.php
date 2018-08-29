@extends('layouts.app')

@section('content')

  
    <div class="container">
        <div class="row">
            @if(session('status'))
                <div class="col-md-12 alert alert-{{ session('status')['class'] }}" role="alert">
                    {{ session('status')['message'] }}
                </div>
            @endif
            {{-- <div class="col-md-4">
                @include('includes._sidebar')
            </div> --}}
            <div class="col-md-12">

                <div class="card">

                    @if(isset($restaurant))
                    <div class="card-header">Atualizar restaurante</div>

                    <form action="{{ route('restaurants.update', $restaurant->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                    @else
                    <div class="card-header">Cadastrar restaurante</div>

                    <form action="{{ route('restaurants.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    @endif

                        <div class="card-body">
                            <div class="col-md-12 form-group">
                                <label for="">Nome do restaurante</label>
                                <input class="form-control" type="text" name="name" value="{{ $restaurant->name ?? '' }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Descreva seu restaurante</label>
                                <textarea class="form-control" type="text" rows="7" name="description" >{{ $restaurant->description ?? '' }}</textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Endereço do restaurante</label>
                                <input class="form-control" type="text" name="address" value="{{ $restaurant->address ?? '' }}">
                            </div>
                           
                            <div class="row">
                                 <div class="col-md-4 form-group">
                                    <label for="">Imagem do restaurante </label>
                                     <input class="form-control" type="file" name="image" value="{{ $restaurant->photo ?? '' }}">
                                </div>
                                @if(isset($restaurant))
                                    <div class="form-group col-md-4">
                                        <img width="100%" src="{{ asset($restaurant->photo) }}" alt="">
                                    </div>
                                @endif
                            </div>
                           
                            <div class="col-md-12 form-group">
                                <h4 class="title">Contato</h4>
    
                                <label for="">Telefone(s) do restaurante</label>
                                <input class="form-control" type="text" name="phone" value="{{ $restaurant->phone ?? '' }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="">Horario de funcionamento do restaurante (Separe por | os horários)</label>
                                <input class="form-control" type="text" name="schedules" value="{{ $restaurant->schedules ?? '' }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <h4 class="title">Localização</h4>
    
                                <label for="">Coloque as coordenadas da localizacao do seu restaurante</label>
                                <input class="form-control" type="text" rows="4" name="google_maps" value="{{ $restaurant->google_maps ?? '' }}">
                            </div>
                        </div>
                        <div class="card-footer ">
                            <button type="submit" class="btn btn-primary">SALVAR</button>
                        </div>
                    </form>
                   
                </div>
                
            </div>
        </div>
    </div>



@stop