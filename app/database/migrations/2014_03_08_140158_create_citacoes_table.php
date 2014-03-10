<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitacoesTable extends Migration {

	public function up()
	{
		Schema::create('citacoes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('texto_citacao');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->integer('autor_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('autores');
            $table->string('fonte_citacao');

		});
	}

	public function down()
	{
		Schema::drop('citacoes');
	}

}