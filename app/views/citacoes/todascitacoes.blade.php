@section('conteudo')

<div class="col-lg-12">

    <h1 class="page-header">Todas as Citações</h1>

    <div class="col-lg-12">

        <ul class="nav nav-pills">
            <li class="active"><a href="{{ URL::to('/') }}/citacoes/todascitacoes"><span class="badge pull-right">{{ CitacoesController::contarCategoria() }}</span>Todos</a></li>
            @foreach ($dados['categorias'] as $categoria)
            <li><a href="{{ URL::to('/') }}/citacoes/todascitacoes/index/{{ $categoria->id }}"><span class="badge pull-right">{{ CitacoesController::contarCategoria($categoria->id) }}</span>{{ $categoria->nome_categoria }}</a></li>
            @endforeach
        </ul>

        <br/><br/>

        <div class="panel panel-default">

            <div class="panel-heading">
                Abaixo estão listadas as citações
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        @foreach ($dados['citacoes'] as $citacao)
                        <div class="row">
                            <figure class="col-md-2">
                                <img src="{{ URL::to('/') }}/uploads/autores/{{ $citacao->autor->imagem_autor }}" width="100" height="120" alt="" class="img-circle pull-right" />
                            </figure>
                            <blockquote class="col-md-8">
                                <p>{{ $citacao->texto_citacao }}</p>
                                <small>{{ $citacao->autor->nome_autor }} em {{ $citacao->fonte_citacao }}</small>
                            </blockquote>
                        </div>

                        <hr/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop