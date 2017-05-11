@extends('layouts.app')

@section('content')



    {{--{!! Form::open(['action' => 'TripController@getmyReservation', 'method' => 'get']!!}--}}
<div class="container" >
    {!! Form::open(['action' => 'PassengerController@create', 'method' => 'get']) !!}
    {{ csrf_field() }}

    <div class="form-horizontal">

        {{--<form class="form-horizontal">--}}

            <fieldset>

                <!-- Form Name -->
                <legend>Booking Form </legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" name="fname"> First Name</label>
                    <div class="col-md-4">
                        <input id="fname" name="fname" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="lname"> Last Name</label>
                    <div class="col-md-4">
                        <input id="lname" name="lname" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="location">Billing Address</label>
                    <div class="col-md-4">
                        <input id="billaddr" name="billaddr" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Email Address</label>
                    <div class="col-md-4">
                        <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>


                {{--<div class="form-group">--}}
                    {{--<label class="col-md-4 control-label" for="bookingdate">Booking Date</label>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<input id="bookingdate" name="bookingdate" type="text" placeholder="" class="form-control input-md" required="">--}}

                    {{--</div>--}}
                {{--</div>--}}


                <div class="form-group">
                    <label class="col-md-4 control-label" for="payment_method   ">Payment Methods</label>
                    <div class="col-md-4">
                        <div class="input-group">

                            <div class="input-group-btn">

                                <select class="form-control" id="payment_name"  name="payment_method" >

                                    <option value="Debit" selected>Debit </option>
                                    <option value="Credit"> Credit</option>
                                    <option value="PayPal ">PayPal </option>
                                    <option value="Cash"> Cash </option>

                                </select>





                            </div>
                        </div>
                    </div>
                </div>

                {{--<!-- Text input-->--}}
                {{--<div class="form-group">--}}
                    {{--<label class="col-md-4 control-label" for="regno">Registration Number</label>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<input id="regno" name="regno" type="text" placeholder="" class="form-control input-md" required="">--}}

                    {{--</div>--}}
                {{--</div>--}}

                <!-- Textarea -->
                {{--<div class="form-group">--}}
                    {{--<label class="col-md-4 control-label" for="comments">Comments</label>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<textarea class="form-control" id="comments" name="comments"></textarea>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </fieldset>
        {{--</form>--}}
        {{Form::submit('Submit', array('class' => 'btn btn-primary btn-primary'))}}


    </div>
    {!! Form::close() !!}
</div>


@endsection