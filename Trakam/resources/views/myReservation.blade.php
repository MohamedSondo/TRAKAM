@extends('layouts.app')

@section('content')
    {{--<div class="panel panel-info col-md-6 col-md-offset-3">--}}
        {{--<!-- Default panel contents -->--}}
        {{--<div class="panel-heading">Congratulations your trip has been booked! Yay!!! :D</div>--}}
        {{--<div class="panel-body">--}}
        {{--@foreach($sq_select_passenger as $passenger)--}}
                {{--<p>First Name: {{ $passenger->fname }}</p>--}}
                {{--<p>Last Name: {{ $passenger->lname }}</p>--}}
                {{--<p>Billing Address: {{ $passenger->billaddr }}</p>--}}
                {{--<p>Price: {{ $passenger->trip_fare }}</p>--}}
                {{--<p>Round Trip: {{ $passenger->round_trip }}</p>--}}
        {{--@endforeach--}}
        {{--</div>--}}

        {{--<!-- List group -->--}}
        {{--<ul class="list-group">--}}
            {{--<li class="list-group-item">Cras justo odio</li>--}}
            {{--<li class="list-group-item">Dapibus ac facilisis in</li>--}}
            {{--<li class="list-group-item">Morbi leo risus</li>--}}
            {{--<li class="list-group-item">Porta ac consectetur ac</li>--}}
            {{--<li class="list-group-item">Vestibulum at eros</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
    @foreach($sq_select_passenger as $passenger)
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td class="col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#"> {{ $passenger->fname }} {{ $passenger->lname
                                    }}</a></h4>
                                    <h5 class="media-heading"> Trip Date: {{ $passenger->trip_date
                                    }}</h5>
                                    @if($passenger->trip_return_date != null)
                                        <h5 class="media-heading"> Trip Return Date: {{ $passenger->trip_return_date
                                        }}</h5>
                                    @endif
                                    <span>Status: </span><span class="text-warning"><strong>Booked!</strong></span>
                                </div>
                            </div></td>
                        <td class="col-md-1" style="text-align: center">
                            <input type="email" class="form-control" id="exampleInputEmail1" value="
                            @if($passenger->round_trip == 1)
                                2
                            @else 1
                            @endif
                                    ">
                        </td>
                        <td class="col-md-1 text-center"><strong>${{ $passenger->trip_fare }}</strong></td>
                        <td class="col-md-1 text-center"><strong>${{ $passenger->trip_fare }}</strong></td>
                        <td class="col-md-1">
                            <button type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-remove"></span> Cancel
                            </button></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>${{ $passenger->trip_fare }}</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                            <button type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-shopping-cart"></span> <a href="{{ url('reserve') }}">Continue Shopping</a>
                            </button></td>
                        <td>
                            <button type="button" class="btn btn-success">
                               <a href="{{ url('notification') }}"> Check for delays </a><span class="glyphicon
                               glyphicon-play"></span>
                            </button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endforeach
@endsection