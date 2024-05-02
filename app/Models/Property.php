<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', // If you have a foreign key column
        'street',
        'city',
        'postcode',
        'country',
    ];


    /**
     * Get the client that owns the property.
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }


}
