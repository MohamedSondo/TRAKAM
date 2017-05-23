<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    //

    protected $fillable=['fname','lname','billaddr','email','payment_method','point'];
    protected $fillable_1 = ['train_id', 'station_id', 'time_in', 'time_out'];
}
