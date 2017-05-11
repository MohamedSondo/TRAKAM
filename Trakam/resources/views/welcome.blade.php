<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("https://static.pexels.com/photos/253647/pexels-photo-253647.jpeg");
                background-color: #fff;


                background-size: cover;

                background-repeat:no-repeat;

                background-position: 50% 50%;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                /*color: #636b6f;*/
                color: black;
                padding: 0 25px;
                font-size: 20px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif



            <div class="content">
                <div class="title m-b-md" style="color:black; font-weight: bold">
                    TrakAm
                </div>

                <div class="links">
                   <a href="{{ url('/') }}">Home </a>
                    <a href="{{ url('myReservation') }}">My Reservation</a>
                    <a href="{{ url('reserve') }}">Search Trips </a>
                    <a href="{{ url('notification') }}">Notification </a>
                    <a href="{{ url('about') }}">About US </a>
                </div>
            </div>
        </div>
    </body>
</html>
