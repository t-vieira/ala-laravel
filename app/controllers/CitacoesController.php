<?php

class CitacoesController extends \BaseController {

    public function __construct()
    {

    }

	public function getIndex($id = null)
	{
        $dados = array();

        $dados['categorias'] = Categorias::orderBy('nome_categoria', 'asc')->get();

        if (is_null($id)) {
            $dados['citacoes'] = Citacoes::orderBy('id', 'desc')->paginate(8);
        } else {
            $id = Hashids::decrypt($id);
            $dados['citacoes'] = Citacoes::where('categoria_id', '=', $id[0])->paginate(10);
        }


        $this->layout->content =  View::make('citacoes.todascitacoes')->with('dados', $dados);
	}

    public function getRegistrarcitacao()
    {
        $dados = array();

        $categorias = Categorias::orderBy('nome_categoria', 'asc')->get();

        $dados['categorias'] = array();

        $dados['categorias'][''] = '';

        foreach ($categorias as $categoria) {
            $dados['categorias'][$categoria->id] = $categoria->nome_categoria;
        }

        $autores = Autores::orderBy('nome_autor', 'asc')->get();

        $dados['autor'] = array();

        $dados['autor'][''] = '';

        foreach ($autores as $autor) {
            $dados['autor'][$autor->id] = $autor->nome_autor;
        }

        $this->layout->content = View::make('citacoes.registrarcitacao')->with('dados', $dados);
    }

    public function postRegistrarcitacao()
    {
        $citacao = new Citacoes(Input::all());
        $citacao->save();

        if ($citacao) {
            return Redirect::to('citacoes/registrarcitacao')
                                ->with('alerta', '<div class="alert alert-success alert-dismissable">
								    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								    Citação Cadastrada com Sucesso!
								  </div>');
        } else {
            return Redirect::to('citacoes/registrarcitacao')
                                 ->with('alerta', '<div class="alert alert-success alert-dismissable">
								    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								    Houve uma erro no registro da citação. Tente novamente!
								  </div>');
        }

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