<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFlyAirportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fly_airports', function(Blueprint $table)
		{
			$table->foreign('country_id', 'fk_fly_airports_fly_countries')->references('id')->on('fly_countries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fly_airports', function(Blueprint $table)
		{
			$table->dropForeign('fk_fly_airports_fly_countries');
		});
	}

}
