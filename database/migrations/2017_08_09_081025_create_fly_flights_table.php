<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFlyFlightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fly_flights', function(Blueprint $table)
		{
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->softDeletes();
			$table->integer('count', true);
			$table->timestamps();
			$table->dateTime('departure')->nullable();
			$table->dateTime('arival')->nullable();
			$table->string('destination_id', 36)->nullable()->index('fk_fly_flights_fly_airports1_idx');
			$table->string('airline_id', 36)->unique('airline_id_UNIQUE');
			$table->string('origin_id', 36)->unique('origin_id_UNIQUE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fly_flights');
	}

}
