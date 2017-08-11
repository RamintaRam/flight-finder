<?php

use App\FLYCountries;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Faker\Factory as Faker;

class AirportsSeeder extends Seeder
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
            DB::table('fly_airports')->insert([
                'id' => Uuid::uuid4(),
                'name' => $faker->name,
                'country_id' => FLYCountries::all()->random()->id,
                'city' => $faker->city,
            ]);
        }
    }
}
