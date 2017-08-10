<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class AirlinesSeeder extends Seeder
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
            DB::table('fly_airlines')->insert([
                'id' => Uuid::uuid4(),
                'name' => $faker->name
            ]);
        }
    }
}
