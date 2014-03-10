<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembrosTable extends Migration {

	public function up()
	{
		Schema::create('membros', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nome_membro');
		});
	}

	public function down()
	{
		Schema::drop('autores');
    }
}