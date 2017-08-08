<?php

namespace App;

use App\Models\CoreModel;

class FLYAirports extends CoreModel
{
    protected $table = 'fly_airports';

    protected $fillable = ['id', 'name', 'country_id', 'city'];
}
