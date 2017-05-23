 @extends('layouts.app')

@section('content')









    {{--{!! Form::open(['action' => 'TripController@index', 'method' => 'get']) !!}--}}
    {{--{{ csrf_field() }}--}}

    <div class="container">

        <div class="row col-md-6 custyle">
            {!! Form::open(['action' => 'TripController@index', 'method' => 'get']) !!}

            <table class="table table-striped custab" name="data">
                <a href="{{ url('reserve') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Back to search Train </a>


                <thead>


                <tr name="y">
                    <th>Train ID</th>
                    <th>Origin</th>
                    <th>Destination Time</th>
                    <th>Destination Date</th>
                    <th>Arrival Time</th>
                    @if($return_date != null)
                        <th>Arrival Date</th>
                    @endif
                    <th>Departure</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                @foreach ($stops as $stop)
                    {{--{!! Form::open(['action' => 'TripController@index', 'method' => 'get']) !!}--}}
                        <tr id ="x">

                            <div class="form-group">
                            <td>
                                {{--{!! Form::open(['action' => 'TripController@index', 'method' => 'get']) !!}--}}
                                {!! Form::text('train_id', $stop->train_id) !!}
                                {{--{!! Form::submit('Book Now',['class' => 'btn btn-info btn-xs']) !!}--}}
                                {{--{!! Form::close() !!}--}}

                            </td>
                            </div>
                            <div class="form-group">
                            <td>
                                {{--{!! Form::open(['action' => 'TripController@index', 'method' => 'get']) !!}--}}

                                {!! Form::text('station_id', $stop->station_id) !!}
                                {{--{!! Form::submit('Book Now',['class' => 'btn btn-info btn-xs']) !!}--}}
                                {{--{!! Form::close() !!}--}}



                            </td>
                            </div>
                            <div class="form-group">
                            <td>
                                {{--{!! Form::open(['url' => '/']) !!}--}}
                                {{--{!! Form::open(['action' => 'TripController@index', 'method' => 'get']) !!}--}}
                                {!! Form::text('destination_id', $end_station) !!}
                                {{--{!! Form::submit('Book Now',['class' => 'btn btn-info btn-xs']) !!}--}}

                            </td>

                            </div>
                            <div class="form-group">
                                <td>
                                    {{--{!! Form::open(['url' => '/']) !!}--}}
                                    {{--{!! Form::open(['action' => 'TripController@index', 'method' => 'get']) !!}--}}
                                    {!! Form::text('depart_date', $depart_date) !!}
                                    {{--{!! Form::submit('Book Now',['class' => 'btn btn-info btn-xs']) !!}--}}

                                </td>

                            </div>
                            <div class="form-group">

                                <td>
                                    {{--{!! Form::open(['action' => 'TripController@index', 'method' => 'get']) !!}--}}
                                    {!! Form::text('time_in', $stop->time_in) !!}
                                    {{--{!! Form::submit('Book Now',['class' => 'btn btn-info btn-xs']) !!}--}}
                                    {{--{!! Form::close() !!}--}}

                                </td>
                            </div>
                            @if($return_date != null)
                                <div class="form-group">

                                    <td>
                                        {{--{!! Form::open(['action' => 'TripController@index', 'method' => 'get']) !!}--}}
                                        {!! Form::text('return_date', $return_date) !!}
                                        {{--{!! Form::submit('Book Now',['class' => 'btn btn-info btn-xs']) !!}--}}
                                        {{--{!! Form::close() !!}--}}

                                    </td>
                                </div>
                            @endif
        {{--<td><strong>{!!Form::label($stop->time_out) !!}</strong></td>--}}
                            <div class="form-group">

                            <td >
                                {{--{!! Form::open(['url' => '/']) !!}--}}
                                {{--{!! Form::open(['action' => 'TripController@index', 'method' => 'get']) !!}--}}
                                {!! Form::text('time_out', $stop->time_out) !!}
                                {{--{!! Form::submit('Book Now',['class' => 'btn btn-info btn-xs']) !!}--}}

                            </td>

    </div>




    {{--<td><strong>{!!Form::label($stop->train_id) !!}</strong></td>--}}

                    {{--<td name="train_id" ><strong>{{$stop->train_id}}</strong></td>--}}
                    {{--<td name ="station_id"><strong>{{$stop->station_id}}</strong></td>--}}
                    {{--<td name ="time_in"><strong>{{$stop->time_in}}</strong></td>--}}
                    {{--<td name ="time_out"><strong>{{$stop->time_out}}</strong></td>--}}

                            <div class="form-group">

                    <td class="text-center" >
                        {{--<a class='btn btn-info btn-xs' href="{{ url('Book') }}">--}}
                            {{--<span class="glyphicon glyphicon-edit"></span>--}}
                        {{--{{ Form::text('core_values[]') }}--}}
                        {!! Form::submit('Book Now',['class' => 'btn btn-info btn-xs']) !!}
                        {{--</a>--}}
                        {{--<a href="{{ url('BookTrip') }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Add to Cart</a> --}}



                    </td>
    </div>




    {{--{!! Form::close() !!}--}}
                     </tr>
                @endforeach
                    {{--{!! Form::close() !!}--}}




                {{--@endforeach--}}
            </table>

            {{--{!! Form::submit('Book Now',['class' => 'btn btn-info btn-xs']) !!}--}}
            {!! Form::close() !!}

        </div>
    </div>




    {{--{!! Form::close() !!}--}}

@endsection












