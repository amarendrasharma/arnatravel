<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use JamesMills\Uuid\HasUuidTrait;

class Package extends Model
{
    use HasUuidTrait;
    protected $fillable = [
        'uuid', 'banner', 'desc', 'overview', 'title', 'duration', 'slug', 'included', 'ammenities', 'status'
    ];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function itineraries()
    {
        return $this->hasMany(Itinerary::class);
    }
}
