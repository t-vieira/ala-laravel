<?php

class IndexController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $dados = array();

        $dados['membros'] = Membros::take(10)->orderBy('id', 'desc')->get();

        $dados['discursantes'] = DB::select(DB::raw('SELECT
                                d1.id,
                                d1.membro_id,
                                m.nome_membro,
                                d1.data_discurso,
                                d1.tema_discurso
                                FROM discursos d1
                                INNER JOIN
                                (
                                SELECT
                                membro_id,
                                MAX(data_discurso) LastDataDiscurso
                                FROM discursos
                                GROUP BY membro_id
                                ) d2
                                ON d1.membro_id = d2.membro_id
                                AND d1.data_discurso = d2.LastDataDiscurso
                                INNER JOIN
                                membros m on d1.membro_id = m.id
                                ORDER BY d1.data_discurso ASC LIMIT 0, 10'));

        $dados['citacoes'] = Citacoes::take(10)->orderBy('id', 'desc')->get();

        $dados['categorias'] = Categorias::take(10)->orderBy('id', 'desc')->get();

        $dados['autores'] = Autores::take(10)->orderBy('id', 'desc')->get();

	    $this->layout->content =  View::make('index')->with('dados', $dados);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
