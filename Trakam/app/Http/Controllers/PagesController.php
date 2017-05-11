<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getWelcome(){

    	return view('welcome');

    }


    public function getSearchTrip(){

        $stations= \DB::table('stations')->get();

    	return view('reserve', compact('stations'));

    }


    public function getNotification(){

    	return view('notification');

    }

    public function getAbout(){

    	return view('about');

    }



    public function getBookNow(){



    }
}
