<!DOCTYPE html>
<html>
<head>
    <title>Wefix</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('images\materialize.css')}}">




    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style type="text/css">


        .nav-wrapper{
            background-color: #e40046;
            font-size: 8px;
            padding-left: 10px;

        }
        li:hover{
            background-color:#c7003d;

        }
        .parallax-container {

            width: 100%;
        }



        li{
            display: inline;
            margin-right: 100px;

        }
        .navitem{
            margin-left: 150px;

        }





        .card{
            height: 200px;
            margin-left: 10px;

        }
        .box{
            border-style: solid;
            border-width: 1px;
            border-color: grey;
            width: 96%;
            background-color: #eceff1;


        }
        .card :hover{
            background-color: #ffcdd2;


        }
        .card-panel{
            height: 200px;
        }


    </style>


</head>

<body>



<!-- Dropdown Structure -->
<ul style="padding-top: 75px;background: transparent;" id="dropdown1" class="dropdown-content">
    <li><a  style="color:#e40046;background-color: white;" href="{{ url('/register') }}">BE A WEFIXER</a></li>

    <li><a style="color:#e40046;background-color: white;"  href="{{ url('/registeruser') }}">BE A CUSTOMER</a></li>
</ul>

<ul   style="padding-top:75px;background: transparent;" id="dropdown2" class="dropdown-content">
    <li ><a  style="color:#e40046;background-color: white;" href="{{ url('/logout') }}"><i class=" waves-effect waves-green btn-flat"></i>Logout</a></li>
</ul>
<nav>
    <div class="nav-wrapper">

        <a class="brand-logo">WEFIX</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a style="color:#ffffff;font-size: 17px;" href="{{ url('/') }}">HOME</a></li>
            @if (Auth::guest())
                <li><a class="waves-effect waves-light dropdown-button"  data-activates="dropdown1">REGISTER<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="waves-effect waves-light" style="color:#ffffff;font-size: 17px;" href="{{ url('/login') }}">LOGIN</a></li>
            @else
                <li><a class="dropdown-button" data-activates="dropdown2">
                        {{ Auth::user()->email }}<i class="material-icons right">arrow_drop_down</i></a>
            @endif
            <li><a style="color:#ffffff;font-size: 17px;" href="{{ url('/about') }}">ABOUT US</a></li>

        </ul>


    </div>
</nav>

<!-- Modal Structure -->

<!-- Modal Structure -->

<!-- Modal Structure -->

@yield('content')


 <script src="{{asset('images\jquery.min.js')}}"></script>

<!-- Compiled and minified JavaScript -->
<script type="text/javascript" src="{{asset('images\materialize.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal(



        );

    });
    $(document).ready(function() {

        $('select').material_select();
    });

    $(document).ready(function(){

        $(".dropdown-button").dropdown();

    });
    $(document).ready(function(){
        $('.parallax').parallax();
    });

    



  




</script>

@yield('jquery')
</body>

</html>


