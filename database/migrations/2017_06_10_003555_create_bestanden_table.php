<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBestandenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bestanden', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->timestamps();
			$table->string('naam', 200);
			$table->string('bestandstype')->nullable()->index('bestandstype');
			$table->integer('map')->nullable()->index('bestand_ibfk_2');
			$table->string('schijf', 64)->nullable()->index('schijf');
			$table->integer('grootte')->nullable();
			$table->unique(['naam','schijf','map','bestandstype'], 'idx_bestand');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bestanden');
	}

}
