<?php

class DiscursosController extends \BaseController {

    public function __construct()
    {

    }

    public function getIndex()
    {

    }

    public function getDiscursantesantigos()
    {
        $dados = array();

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
                                ORDER BY d1.data_discurso ASC'));

        $this->layout->content =  View::make('discursos.discursantesantigos')->with('dados', $dados);
    }

}