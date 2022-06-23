<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOndertitelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ondertitels', function(Blueprint $table)
		{
			$table->foreign('bestand', 'ondertitels_ibfk_1')->references('id')->on('bestanden')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ondertitels', function(Blueprint $table)
		{
			$table->dropForeign('ondertitels_ibfk_1');
		});
	}

}
