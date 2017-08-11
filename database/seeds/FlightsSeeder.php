<?php

use App\FLYAirlines;
use App\FLYAirports;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Ramsey\Uuid\Uuid;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('fly_flights')->insert([
                'id' => Uuid::uuid4(),
                'airline_id' => FLYAirlines::all()->random()->id,
                'origin_id' => FLYAirports::all()->random()->id,
                'destination_id' => FLYAirports::all()->random()->id,
                'arival' => $faker-> date(),
                'departure' => $faker->date(),
            ]);
        }
    }
}
