<?php

namespace App\Http\Controllers;

use App\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


        $newpassenger = new Passenger;
//         $newpassenger->fname=request('fname');
//         $newpassenger->lname=request('lname');
//         $newpassenger->billaddr=request('billaddr');
//        $newpassenger->email=request('email');
//        $newpassenger->payment_method=request('payment_method');



        $fname=request('fname');
        $lname=request('lname');
        $billaddr=request('billaddr');
        $pass_email=request('email');
        $Payment=request('payment_method');
        $price = request('price');

        $newpassenger=array('fname'=>$fname,'lname'=>$lname,'billaddr'=>$billaddr,'pass_email'=>$pass_email,'Payment'=>$Payment,'points'=>'0');







        $add_newpass_query=\DB::table('passengers')->insert($newpassenger);
//        $station_query->save();


/*        $sq_trip_insert = DB::raw('INSERT INTO trips (
                  train_id, pass_id, trip_start, trip_end, trip_date,
                  trip_return_date, payment_method, round_trip, trip_fare,
                  trip_seg_start, trip_seg_end, cancelled )
               ( SELECT tuc.train_id, p.pass_id, tuc.station_id, tuc.destination_id,
                        tuc.depart_date, tuc.return_date, p.pass_id, tuc.roundtrip,
                        1, 2, 3, 0
                FROM temp_user_choice tuc
                INNER JOIN passengers p ON p.pass_id = (SELECT pass_id FROM passengers ORDER BY pass_id DESC LIMIT 1)
                WHERE temp_id = (SELECT temp_id FROM temp_user_choice ORDER BY temp_id DESC LIMIT 1) )');*/
$sq_trip_insert = DB::insert('INSERT INTO trips (
                  train_id, pass_id, trip_start, trip_end, trip_date,
                  trip_return_date, payment_method, round_trip, trip_fare,
                  trip_seg_start, trip_seg_end, cancelled )
               ( SELECT tuc.train_id, p.pass_id, tuc.station_id, tuc.destination_id,
                        tuc.depart_date, tuc.return_date, p.pass_id, 1,
                        1, 2, 3, 0
                FROM temp_user_choice tuc
                INNER JOIN passengers p ON p.pass_id = (SELECT pass_id FROM passengers ORDER BY pass_id DESC LIMIT 1)
                WHERE temp_id = (SELECT temp_id FROM temp_user_choice ORDER BY temp_id DESC LIMIT 1) )');
//$sq_select_last_trip = DB::select( DB::raw('SELECT * FROM trips WHERE trip_id = (SELECT trip_id FROM trips ORDER BY trip_id DESC LIMIT 1)') );
//$sq_select_last_trip = DB::table('trips')->where('trip_id', '=', 1)->get();
$sq_select_passenger = DB::select( DB::raw('SELECT * FROM passengers p INNER JOIN trips t ON p.pass_id = (SELECT pass_id FROM trips ORDER BY pass_id DESC LIMIT
  1) ORDER BY p.pass_id DESC LIMIT 1') );


//    $sq_select_last_trip = \DB::table('trips')->where('trip_id', '=', function ($query) {
//            $query->select('trip_id')->orderBy('trip_id', 'desc')->limit(1);
//        })->get();
//        $sq_select_last_trip = \DB::table('trips')->where('trip_id', '1')->get();


//SELECT * FROM trips WHERE trip_id = (SELECT trip_id FROM trips ORDER BY trip_id DESC LIMIT 1)

//        return view('myReservation',compact('fname','lname', 'billaddr', 'pass_email', 'Payment'));
//        return view('myReservation',compact('sq_select_last_trip', 'sq_select_passenger'));
        return view('myReservation',compact('sq_select_passenger'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function show(Passenger $passenger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function edit(Passenger $passenger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passenger $passenger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passenger $passenger)
    {
        //
    }
}
