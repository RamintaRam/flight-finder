<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFlyAirportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fly_airports', function(Blueprint $table)
		{
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->integer('count', true);
			$table->string('name');
			$table->string('country_id', 36)->index('fk_fly_airports_fly_countries_idx');
			$table->string('city')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fly_airports');
	}

}
