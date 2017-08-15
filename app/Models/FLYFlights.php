<?php

namespace App;

use App\Models\CoreModel;


class FLYFlights extends CoreModel
{
    protected $table = 'fly_flights';

    protected $fillable = ['id', 'departure', 'arival', 'origin_id', 'destination_id', 'airline_id'];

    protected $with = ['airline'];

    protected $hidden = ['created_at', 'deleted_at', 'count', 'updated_at', 'airline_id'];


    public function airline()
    {
        return $this->hasOne(FLYAirlines::class, 'id', 'airline_id');
    }
}
