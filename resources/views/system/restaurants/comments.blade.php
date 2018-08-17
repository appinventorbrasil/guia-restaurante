@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <div class="card ">
                    <div class="card-header">Comentários e avaliações
                        
                    </div>

                    <div class="card-body">
                        <h3>Avaliação média do seu restaurante {{ number_format( Auth::user()->restaurant->averageEvaluation(), 1) }} </h3><br>
                        @if(count($comments))
                            @foreach($comments as $comment)
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $comment->user->name }} - avaliou em <label for="" class="btn btn-warning btn-sm">{{ $comment->evaluation }}</label></h5>
                                        <h6 class="card-subtitle mb-2 text-muted">comentado em {{ $comment->created_at->format('d/m/Y') }}    </h6>
                                        <p class="card-text">{{ $comment->description }}</p>
                                        <div align="right">
                                            @if(!$comment->approved)
                                                <a href="{{ route('comments.approved', $comment->id) }}" class="btn btn-primary card-link">Aprovar</a>
                                            @endif
                                            <a href="#" class="btn btn-danger">Excluir</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h3 align="center">Sem comentarios</h3>
                        @endif
                    </div>
                </div>
            </div>
           
        </div>
    </div>
@stop