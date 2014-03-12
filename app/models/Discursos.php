<?php

class Discursos extends Illuminate\Database\Eloquent\Model
{
    protected $guarded = array('id');

    public function membro()
    {
        return $this->hasOne('Membros', 'id', 'membro_id');
    }
}