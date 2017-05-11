<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    //

    protected $fillable=['fname','lname','billaddr','email','payment_method','point'];

}
