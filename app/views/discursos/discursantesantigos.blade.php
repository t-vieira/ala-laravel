@section('conteudo')

<div class="col-lg-12">

	<h1 class="page-header">Discursantes Antigos</h1>

	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Veja abaixo os discursantes mais antigos
			</div>

			<div class="panel-body">

				<div class="list-group">

				    @foreach ($dados['discursantes'] as $discursante)
				        <p class="list-group-item">
                            <i class="fa fa-user fa-fw"></i> {{$discursante->nome_membro}}<br/>
                            <span class="text-muted small">{{$discursante->tema_discurso}}</span>
                            <span class="pull-right text-muted small"><em>{{ Datas::calcular_diferenca($discursante->data_discurso) }}</em></span>
                        </p>
                    @endforeach

				</div>

			</div>

		</div>

	</div>

</div>

@stop