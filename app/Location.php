<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    public $timestamps = false;

    public function vetexes()
    {
        return $this->belongsToMany('App\Location', 'mapping', 'location_1', 'location_2')->withPivot(['distances', 'id']);
    }
}
