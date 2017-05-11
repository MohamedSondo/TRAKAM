<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainquery extends Model
{
    //



    protected $fillable=['depart_station','destination_station','depart_date','oneway','roundtrip','return_date'];

}
