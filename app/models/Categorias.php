<?php

class Categorias extends Illuminate\Database\Eloquent\Model
{
    protected $guarded = array('id');

    public function citacoes()
    {
        $this->hasMany('Citacoes', 'categoria_id');
    }
}