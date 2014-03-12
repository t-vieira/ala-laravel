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

@endsection