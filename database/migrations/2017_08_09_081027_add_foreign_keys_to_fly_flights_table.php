<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFlyFlightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fly_flights', function(Blueprint $table)
		{
			$table->foreign('airline_id', 'fk_fly_flights_fly_airlines1')->references('id')->on('fly_airlines')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('destination_id', 'fk_fly_flights_fly_airports1')->references('id')->on('fly_airports')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('origin_id', 'fk_fly_flights_fly_airports2')->references('id')->on('fly_airports')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fly_flights', function(Blueprint $table)
		{
			$table->dropForeign('fk_fly_flights_fly_airlines1');
			$table->dropForeign('fk_fly_flights_fly_airports1');
			$table->dropForeign('fk_fly_flights_fly_airports2');
		});
	}

}
