@section('conteudo')

<div class="col-lg-12">

    <h1 class="page-header">Todas as Citações</h1>

    <div class="col-lg-12">

        <ul class="nav nav-pills">
            <li class="active"><a href="#"><span class="badge pull-right">29</span>Todos</a></li>
            @foreach ($dados['categorias'] as $categoria)
            <li><a href="#"><span class="badge pull-right">1</span>{{ $categoria->nome_categoria }}</a></li>
            @endforeach
        </ul>

    </div>

</div>

@endsection