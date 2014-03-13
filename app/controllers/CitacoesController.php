<?php

class CitacoesController extends \BaseController {

	public function getIndex()
	{
        $dados = array();

        $dados['categorias'] = Categorias::orderBy('nome_categoria', 'asc')->get();

        

        $this->layout->content =  View::make('citacoes.todascitacoes')->with('dados', $dados);
	}

}