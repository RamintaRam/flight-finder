<?php

namespace App;

use App\Models\CoreModel;


class FLYFlights extends CoreModel
{
    protected $table = 'fly_flights';

    protected $fillable = ['id', 'departure', 'arival', 'origin_id', 'destination_id', 'airline_id'];
}
