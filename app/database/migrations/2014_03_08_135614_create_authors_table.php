<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration {

	public function up()
	{
		Schema::create('autores', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nome_autor');
            $table->string('imagem_autor');
		});
	}

	public function down()
	{
		Schema::table('autores', function(Blueprint $table)
		{
			$table->drop('autores');
		});
	}

}