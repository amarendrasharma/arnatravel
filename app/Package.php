<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use JamesMills\Uuid\HasUuidTrait;

class Package extends Model
{
    // use HasUuidTrait;

    // protected $fillable = [
    //     'uuid', 'banner', 'desc', 'overview', 'title', 'duration', 'slug', 'included', 'ammenities', 'status'
    // ];
    protected $guarded = [];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function itineraries()
    {
        return $this->hasMany(Itinerary::class);
    }

    // public function getPackagePhotoUrlAttribute()
    // {
    //     return Storage::exists($this->banner) ? url(Storage::url($this->banner)) : url($this->banner);
    // }
}
