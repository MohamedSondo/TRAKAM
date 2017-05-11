<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TrakAm') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('TrakAm', 'TrakAm') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
{{--@yield('scripts')--}}
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="custom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<style>




    #output {
        background-color: #c5edf3;
        color: #463c39;
        font-size: 17px;
        padding: 30px 30px;
        width: 40%;
        border: 2px solid #009688;
        font-family: sans-serif;
        line-height: 1.8;
    }
    #newPublish {
        background-color: #c5edf3;
        color: #463c39;
        font-size: 17px;
        padding: 30px 30px;
        width: 40%;
        border: 2px solid #009688;
        font-family: sans-serif;
        line-height: 1.8;
    }
    .box {
        background-color: #f7f7f7;
        margin-top: 60px;
        margin-bottom: 50px;
        padding: 40px 60px;
    }
    #details_info {
        background-color: #f7f7f7;
        color: #463c39;
        font-size: 17px;
        padding: 30px 30px;
        width: 40%;
        border: 1px solid #cccccc;
        font-family: sans-serif;
        line-height: 1.8;
        margin-left: 90px;
    }
    .box3 {
        margin-top: 80px;
        margin-left: 150px;
        margin-right: 150px;
        margin-bottom: 60px;
        padding: 40px 50px;
        background-color: gainsboro;
    }
    .box11 {
        margin-top: 80px;
        margin-left: 250px;
        margin-right: 250px;
        margin-bottom: 60px;
        padding: 40px 50px;
        background-color: gainsboro;
        line-height: 2.5;
    }
    .web_design_box {
        margin-top: 30px;
        margin-left: 350px;
        margin-right: 350px;
        margin-bottom: 60px;
        padding: 40px 50px;
        background-color: #d9edf7;
        box-shadow: 3px 5px 10px #318f86;
    }
    .train_reserve_box {
        margin-top: 30px;
        margin-left: 350px;
        margin-right: 350px;
        margin-bottom: 60px;
        padding: 40px 50px;
        background-color: #c6badc;
        box-shadow: 3px 5px 10px #7527b0;
    }
    .online_food_delivery_box {
        margin-top: 50px;
        margin-left: 350px;
        margin-right: 350px;
        margin-bottom: 60px;
        padding: 20px 40px;
        background-color: #d4c0b9;
        box-shadow: 3px 5px 10px #714c4a;
    }
    .result_box {
        margin-top: 15%;
        margin-left: 350px;
        margin-right: 350px;
        margin-bottom: 60px;
        padding: 20px 40px;
        background-color: #d4c0b9;
        box-shadow: 3px 5px 10px #8BC34A;
    }
    .result_box_text {
        color: #232222;
        font-size: 20px;
        text-align: center;
        padding-top:10px;
    }
    .result_box_text span {
        color: #614136;
        font-size: 26px;
        text-align: center;
    }
</style>

<script>

    $(document).ready(function() {
        $("#datepicker").datepicker({
            dateFormat: 'yy-mm-dd'
        });

    });



    $(document).ready(function() {
        $("#datepicker1").datepicker({dateFormat: 'yy-mm-dd'});
    });



    function yesnoCheck() {
        if (document.getElementById('roundradio').checked) {
            document.getElementById('roundtrip').style.display = 'block';
        }
        else document.getElementById('roundtrip').style.display = 'none';

    }


</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</body>
</html>
