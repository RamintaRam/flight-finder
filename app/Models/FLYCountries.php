<?php

namespace App;

use App\Models\CoreModel;

class FLYCountries extends CoreModel
{
    protected $table = 'fly_countries';

    protected $fillable = ['id', 'name'];
}
