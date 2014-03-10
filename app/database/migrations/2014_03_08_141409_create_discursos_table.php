<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscursosTable extends Migration {

	public function up()
	{
		Schema::create('discursos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('membro_id')->unsigned();
            $table->foreign('membro_id')->references('id')->on('membros');
            $table->string('tema_discurso');
            $table->date('data_discurso');
		});
	}

	public function down()
	{
		Schema::drop('discursos');
	}

}