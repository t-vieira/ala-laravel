<?php

class Membros extends Illuminate\Database\Eloquent\Model
{
    protected $guarded = array('id');

    public function discursos()
    {
        $this->hasMany('Discursos', 'membro_id');
    }
}