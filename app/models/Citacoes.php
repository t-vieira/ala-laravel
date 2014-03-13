<?php

class Citacoes extends Illuminate\Database\Eloquent\Model
{
    protected $guarded = array('id');

    public function categoria()
    {
        return $this->hasOne('categorias', 'id', 'categoria_id');
    }

    public function autor()
    {
        return $this->hasOne('autores', 'id', 'autor_id');
    }
}
