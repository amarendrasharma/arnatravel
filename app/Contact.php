<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];
    protected $appends = ['contactdate'];
    function getContactdateAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
