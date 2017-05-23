<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trainquery;
use App\Passenger;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
    {
        //
        $train_id=request('train_id');
        $station_id=request('station_id');
        $destination_id=request('destination_id');
        $depart_date=request('depart_date');
        $return_date=request('return_date');
        $roundtrip = request('roundtrip');
        $time_in=request('time_in');
        $time_out=request('time_out');

        $new_temp_trip = array(
            'train_id' => $train_id,
            'station_id' => $station_id,
            'destination_id' => $destination_id,
            'depart_date' => $depart_date,
            'return_date' => $return_date,
            'roundtrip' => $roundtrip,
            'time_in' => $time_in,
            'time_out' => $time_out
        );

        $new_trip_temp_add = DB::table('temp_user_choice')->insert($new_temp_trip);
//        $sq_temp_table = DB::table('temp_user_choice')->get()->toArray();


//        $sq_add_new_trip = DB::table('trip')->insert();
//   dd(request()->all());


//
return view('BookTrip');
//return view('BookTrip');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //




//        dd(request()->all());

//
//        $newpassenger = new Passenger;
////         $newpassenger->fname=request('fname');
////         $newpassenger->lname=request('lname');
////         $newpassenger->billaddr=request('billaddr');
////        $newpassenger->email=request('email');
////        $newpassenger->payment_method=request('payment_method');
//
//
//
        $fname=request('fname');
        $lname=request('lname');
        $billaddr=request('billaddr');
        $pass_email=request('email');
        $Payment=request('payment_method');

        $newpassenger=array('fname'=>$fname,'lname'=>$lname,'billaddr'=>$billaddr,'pass_email'=>$pass_email,'Payment'=>$Payment,'points'=>'0');

//
//
//
//
//
//
        $add_newpass_query=\DB::table('passengers')->insert($newpassenger);
//        $station_query->save();
//
//
        return view('myReservation',compact('$add_newpass_query'));




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //dd(request()->all);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       // dd(request()->all);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getSearchResult( ){
//   dd(request()->all());
//       $station_query= new trainquery;
//        $station_query->depart_station=request('depart_station');
//        $station_query->destination_station=request('destination_station');
//        $station_query->depart_date=request('depart_date');
//        $station_query->oneway=request('oneway');
//        $station_query->roundtrip=request('roundtrip');
//        $station_query->return_date=request('return_date');

//        $station_query->save();
//        $x=$station_query->depart_station;


//
       $depart_station =(request('depart_station'));
       $end_station = (request('destination_station'));
       $depart_date=(request('depart_date'));
        $return_date=(request('return_date'));
       $depart_timeofday =(request('timeofday'));
//
//        settype($depart_station, "int");
////        $depart_station= request()->input('depart_station');

//echo "hello ";
//
       $stops= \DB::table('stop_at')->where('station_id', $depart_station)->where('timeofday',$depart_timeofday )->get();
        return view('search_results',compact('stops','end_station', 'depart_date', 'return_date' ));
    }



    public function getmyReservation(){

}

}
