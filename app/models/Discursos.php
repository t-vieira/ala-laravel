<?php

class Discursos extends Illuminate\Database\Eloquent\Model
{
    protected $guarded = array('id');

    public function membro()
    {
        $this->hasOne('Membros', 'membros_id', 'id');
    }
}