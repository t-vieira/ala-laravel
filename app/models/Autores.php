<?php

class Autores extends Illuminate\Database\Eloquent\Model
{
    protected $guarded = array('id');

    public $timestamps = false;

    public function citacoes()
    {
        return $this->hasMany('Citacoes', 'autor_id');
    }
}