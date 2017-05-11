<?php

namespace App\Http\Controllers;

use App\Passenger;
use Illuminate\Http\Request;

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

        $newpassenger=array('fname'=>$fname,'lname'=>$lname,'billaddr'=>$billaddr,'pass_email'=>$pass_email,'Payment'=>$Payment,'points'=>'0');







        $add_newpass_query=\DB::table('passengers')->insert($newpassenger);
//        $station_query->save();


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
