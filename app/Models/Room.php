<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'property_id', // If you have a foreign key column
        'name',
        'area',
        'price'
    ];


    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
