<?php

class Citacoes extends Illuminate\Database\Eloquent\Model
{
    protected $guarded = array('id');

    public $timestamps = false;

    public function categoria()
    {
        return $this->hasOne('categorias', 'id', 'categoria_id');
    }

    public function autor()
    {
        return $this->hasOne('autores', 'id', 'autor_id');
    }

    public function contarCategoria($id)
    {
        return Citacoes::where('categoria_id', '=', $id)->count();
    }
}
