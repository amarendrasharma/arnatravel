<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    protected $guarded = [];
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
