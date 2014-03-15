@section('conteudo')

<div class="col-lg-12">

	<h1 class="page-header">Registrar Citação</h1>

	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Use o formulário abaixo para cadastrar uma citação
			</div>

			@if (Session::has('alerta'))
			    {{Session::get('alerta')}}
			@endif

			<div class="panel-body">
				<div class="row">
					<div class="col-lg-3">

					    {{ Form::open() }}

					    <div class="form-group">
					        {{Form::label('texto_citacao', 'Citação')}}
					        {{Form::textarea('texto_citacao', '', $atributes = array('class' => 'form-control'))}}
					    </div>

					    <div class="form-group">

					        {{Form::label('categoria_citacao', 'Categoria da Citação')}}
					        {{Form::select('categoria_id', $dados['categorias'], null, $atributes = array('class' => 'form-control', 'id' => 'categoria_id', 'data-placeholder' => 'Selecione uma Categoria...'))}}

					    </div>

					    <div class="form-group">

					        {{Form::label('autor_id', 'Autor da Citação')}}
					        {{Form::select('autor_id', $dados['autor'], null, $atributes = array('class' => 'form-control', 'id' => 'autor_id', 'data-placeholder' => 'Selecione um Autor...'))}}

					    </div>

					    <div class="form-group">

					        {{Form::label('fonte_citacao', 'Fonte da Citação')}}
					        {{Form::text('fonte_citacao', '', $atributes = array('class' => 'form-control'))}}

					    </div>

					    {{Form::submit('Cadastrar Citação', $atributes = array('class' => 'btn btn-success'))}}

					    {{Form::close()}}

					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script>
	$('#autor_id').chosen();
	$('#categoria_id').chosen();
</script>


@stop