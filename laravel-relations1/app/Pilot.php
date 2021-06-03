<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'nation',
        'date_of_birth',
    ];

    public function cars() {
        return $this->belongsToMany(Car::class);
    }
}
