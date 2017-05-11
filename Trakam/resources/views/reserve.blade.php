@extends('layouts.app')



@section('content')

<div class="train_reserve_box">
    <h3> Search for Train </h3><br>

    {{--{!! Form::text('prices')!!}--}}

    {{--<label>--}}
        <span>Choose time of Day </span> <br/>

        {{--            <input type="radio"  id="morningradio" name="morming" value="0" checked="checked">Morning--}}
        {{--            <input type="radio"  id="afternoonradio" name="afternoon" value="1">afternoon<br>--}}
        {{--            <input type="radio"  id="eveningradio" name="evening" value="1">evening<br>--}}

        {{--          </label><br/>--}}



    {!! Form::open(['action' => 'TripController@getSearchResult', 'method' => 'get']) !!}

    {{ csrf_field() }}
    {!! Form::select('timeofday', ['M' => 'Morning', 'A' => 'Afternoon','E' => 'Evening']) !!}


        <div class="form-group">
            <label>Departure Station</label>
            <select class="form-control" id="station" name="depart_station"  >


                @foreach ($stations as $station )

                    <option value="{{$station->station_id }}">{{$station->station_name}}</option>

                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Destination Station</label>
            <select class="form-control" id="station_name" name="destination_station"  >
                @foreach ($stations as $station )
                <option value="{{$station->station_id }}">{{$station->station_name}}</option>

                @endforeach
            </select>
        </div>
        {{--{!! Form::close() !!}--}}
        <div class="form-group">
            <label name="depart_date" >Select Date</label>
            <input id="datepicker"  name="depart_date" />
        </div>



     {{--{!! Form::radio('', 'E-Mail Address', ['class' => 'awesome'])!!}--}}

        <label>
            <span>check Trip type </span> <br/>

                        <input type="radio" onclick="javascript:yesnoCheck();" id="onewayradio" name="oneway" value="0" checked="checked">One way Trip
                        <input type="radio" onclick="javascript:yesnoCheck();" id="roundradio" name="roundtrip" value="1">Round Trip<br>
                      </label><br/>



        <div class="form-group" id="roundtrip" style="display:none">
            <label name="return_date" >Return Date</label>
            <input id="datepicker1" name="return_date" />
        </div>

        <br>

    {!! Form::submit('Submit') !!}
        {{--<input type="submit" value="Submit">--}}

    {!! Form::close() !!}
</div>
@endsection

