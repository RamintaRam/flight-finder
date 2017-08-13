<?php

namespace App\Console\Commands;

use App\FLYAirlines;
use App\FLYAirports;
use App\FLYCountries;
use App\FLYFlights;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Faker\Factory;
use Ramsey\Uuid\Uuid;

class FakeDataCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fake:data';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates fake data';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    function getRandomString($length = 3)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[mt_rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
    public function handle()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $airport_id = null;
            while (!$airport_id)
            {
                $airport_id = $this->getRandomString();
                if (FLYAirports::find($airport_id))
                    $airport_id = null;
            }
            FLYAirports::create([
                'id' => $airport_id,
                'name' => $faker->company,
                'city' => $faker->city,
                'country_id' => FLYCountries::all()->random()->id
            ]);
        }


        for ($i = 0; $i < 10; $i++) {
            $airline_id = null;
            while (!$airline_id)
            {
                $airline_id = $this->getRandomString();
                if (FLYAirlines::find($airline_id))
                    $airline_id = null;
            }
            FLYAirlines::create([
                'id' => $airline_id,
                'name' => $faker->company,
            ]);
        }



        for ($i = 0; $i < 1000; $i++) {
            $time = Carbon::create(rand(2017, 2018), rand(1, 12), rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59));
            FLYFlights::create([
                'id' => Uuid::uuid4(),
                'airline_id' => $faker->randomElement(FLYAirlines::get()->pluck('id')->toArray()),
                'destination_id' => $faker->randomElement(FLYAirports::get()->pluck('id')->toArray()),
                'origin_id' => $faker->randomElement(FLYAirports::get()->pluck('id')->toArray()),
                'departure' => $time->toDateTimeString(),
                'arival' => $time->addMinutes(rand(30, 960))->toDateTimeString()
            ]);
        }
    }
}