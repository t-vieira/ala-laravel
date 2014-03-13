@section('conteudo')

    <div class="col-lg-12">
        <h1 class="page-header">Painel de Controle</h1>
    </div>

    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-comments fa-fw"></i> Discursantes Antigos
            </div>
            <div class="panel-body">
                <div class="list-group">
                    @foreach ($dados['discursantes'] as $discursante)
                        <p class="list-group-item">
                            <i class="fa fa-user fa-fw"></i> {{ $discursante->membro->nome_membro }}
                            <span class="pull-right text-muted small"><em>{{ Datas::calcular_diferenca($discursante->data_discurso) }}</em></span>
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-users fa-fw"></i> Últimos Membros Cadastrados
            </div>
            <div class="panel-body">
                <div class="list-group">
                    @foreach ($dados['membros'] as $membro)
                    <p class="list-group-item">
                        <i class="fa fa-user fa-fw"></i> {{ $membro->nome_membro }}
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="panel panel-success">
            <div class="panel-heading">
                <i class="fa fa-quote-left fa-fw"></i> Últimas Citações Cadastradas
            </div>
            <div class="panel-body">
                <div class="list-group">
                    @foreach ($dados['citacoes'] as $citacao)
                        <p class="list-group-item">
                            <i class="fa fa-quote-right"></i> {{ substr($citacao->texto_citacao, 0, 100) }} ...
                            <span class="pull-right text-muted small"><em>{{ $citacao->autor->nome_autor }}</em></span>
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <i class="fa fa-tags fa-fw"></i> Últimas Categorias Cadastradas
            </div>
            <div class="panel-body">
                <div class="list-group">
                    @foreach ($dados['categorias'] as $categoria)
                    <p class="list-group-item">
                        <i class="fa fa-tag fa-fw"></i> {{ $categoria->nome_categoria }}
                    </p>
                    @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <i class="fa fa-smile-o fa-fw"></i> Últimos Autores Cadastrados
            </div>
            <div class="panel-body">
                <div class="list-group">
                    @foreach ($dados['autores'] as $autor)
                    <p class="list-group-item">
                        {{ $autor->nome_autor }}
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
