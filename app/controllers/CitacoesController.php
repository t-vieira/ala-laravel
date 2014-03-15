<?php

class CitacoesController extends \BaseController {

	public function getIndex($id = null)
	{
        $dados = array();

        $dados['categorias'] = Categorias::orderBy('nome_categoria', 'asc')->get();

        if (is_null($id)) {
            $dados['citacoes'] = Citacoes::orderBy('id', 'desc')->get();
        } else {
            $id = base64_decode($id);
            $dados['citacoes'] = Citacoes::where('categoria_id', '=', $id)->get();
        }


        $this->layout->content =  View::make('citacoes.todascitacoes')->with('dados', $dados);
	}

    public function getRegistrarcitacao()
    {
        $dados = array();

        $categorias = Categorias::orderBy('nome_categoria', 'asc')->get();

        $dados['categorias'] = array();

        foreach ($categorias as $categoria) {
            $dados['categorias'][$categoria->id] = $categoria->nome_categoria;
        }

        $autores = Autores::orderBy('nome_autor', 'asc')->get();

        $dados['autor'] = array();

        foreach ($autores as $autor) {
            $dados['autor'][$autor->id] = $autor->nome_autor;
        }

        $this->layout->content = View::make('citacoes.registrarcitacao')->with('dados', $dados);
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