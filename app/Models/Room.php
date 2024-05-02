<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['name', 'area', 'price'];


    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
