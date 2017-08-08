<?php

namespace App;

use App\Models\CoreModel;


class FLYAirlines extends CoreModel
{
    protected $table = 'fly_airlines';

    protected $fillable = ['id', 'name'];
}
