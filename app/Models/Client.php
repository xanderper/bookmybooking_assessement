<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','phone'
    ];


    /**
     * Get the properties associated with the client.
     */
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
