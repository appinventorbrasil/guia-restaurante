<div class="card">
    <div class="card-header">Menu</div>

    <div class="card-body">
        @if(!Auth::user()->restaurant)
            <a href="{{ route('restaurants.create') }}" class="btn btn-primary btn-block">Cadastrar Restaurante</a>
        @else
            <a href="{{ route('restaurants.edit', Auth::user()->restaurant->id) }}" class="btn btn-primary btn-block">Atualizar Restaurante</a>
        @endif
        <a href="{{ route('comments.index') }}" class="btn btn-primary btn-block">Comentario e avaliazoes</a>
        <a href="" class="btn btn-primary btn-block">Estatisticas</a>
    </div>
</div>