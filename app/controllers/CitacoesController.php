<?php

class CitacoesController extends \BaseController {

	public function getIndex($id = null)
	{
        $dados = array();

        $dados['categorias'] = Categorias::orderBy('nome_categoria', 'asc')->get();

        if (is_null($id)) {
            $dados['citacoes'] = Citacoes::orderBy('id', 'desc')->get();
        } else {
            $dados['citacoes'] = Citacoes::where('categoria_id', '=', $id)->get();
        }


        $this->layout->content =  View::make('citacoes.todascitacoes')->with('dados', $dados);
	}

    static function contarCategoria($id = null)
    {
        if (is_null($id)) {

            return Citacoes::count();

        } else {

            return Citacoes::where('categoria_id', '=', $id)->count();
        }
    }

}