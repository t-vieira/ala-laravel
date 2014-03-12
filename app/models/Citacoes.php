<?php

class Citacoes extends Illuminate\Database\Eloquent\Model
{
    protected $guarded = array('id');

    public function categoria()
    {
        $this->hasOne('Categorias', 'categoria_id');
    }

    public function autor()
    {
        $this->hasOne('Autores', 'autor_id');
    }
}