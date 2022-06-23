<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBestandenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bestanden', function(Blueprint $table)
		{
			$table->foreign('schijf', 'bestanden_ibfk_1')->references('naam')->on('schijven')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('map', 'bestanden_ibfk_2')->references('id')->on('mappen')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('bestandstype', 'bestanden_ibfk_3')->references('naam')->on('bestandstypes')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bestanden', function(Blueprint $table)
		{
			$table->dropForeign('bestanden_ibfk_1');
			$table->dropForeign('bestanden_ibfk_2');
			$table->dropForeign('bestanden_ibfk_3');
		});
	}

}
