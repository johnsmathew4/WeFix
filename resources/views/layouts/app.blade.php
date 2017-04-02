<!DOCTYPE html>
<html>
<head>
    <title>Wefix</title>
    <!--Import Google Icon Font-->
   <style type="text/css">

       /* fallback */
       @font-face {
           font-family: 'Material Icons';
           font-style: normal;
           font-weight: 400;
           src: local('Material Icons'), local('MaterialIcons-Regular'), url(http://fonts.gstatic.com/s/materialicons/v21/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');
       }

       .material-icons {
           font-family: 'Material Icons';
           font-weight: normal;
           font-style: normal;
           font-size: 24px;
           line-height: 1;
           letter-spacing: normal;
           text-transform: none;
           display: inline-block;
           white-space: nowrap;
           word-wrap: normal;
           direction: ltr;
           -webkit-font-feature-settings: 'liga';
           -webkit-font-smoothing: antialiased;
       }


       </style>



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

        .parallax-container {
            width: 100%;
        }

        .navitem{
            margin-left: 150px;
        }
        .card{
            height: 200px;
            margin-left: 10px;
        }




    </style>


</head>

<body>



<!-- Dropdown Structure -->
<ul style="padding-top: 75px;background: transparent;" id="dropdown1" class="dropdown-content">
    <li><a  style="color:#e40046;background-color: white;" href="{{ url('/register') }}">Be A Wefixer</a></li>

    <li><a style="color:#e40046;background-color: white;"  href="{{ url('/registeruser') }}">Be A Customer</a></li>
</ul>

<ul   style="padding-top:75px;background: transparent;" id="dropdown2" class="dropdown-content">
    <li ><a  style="color:#e40046;background-color: white;" href="{{ url('/logout') }}"><i class=" waves-effect waves-green btn-flat"></i>Logout</a></li>
</ul>



<ul class="side-nav" id="mobile-demo">

    <li ><a style="font-size: 17px;" href="{{ url('/') }}"><i class="material-icons left">home</i>Home</a></li>
    <li><a style=";font-size: 17px;" href="{{ url('/about') }}"><i class="material-icons left">people</i>About Us</a></li>
    @if (Auth::guest())

        <li><a class="waves-effect waves-light" style="font-size: 17px;" href="{{ url('/login') }}"><i class="material-icons left">input</i>Login</a></li>

        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header"><i class="material-icons left">assignment</i>Register<i class="material-icons right">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a  style="color:#e40046;background-color: white;" href="{{ url('/register') }}">BE A WEFIXER</a></li>
                            <li><a style="color:#e40046;background-color: white;"  href="{{ url('/registeruser') }}">BE A CUSTOMER</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>




    @else

        @if(Auth::user()->role_id==2)

            <li><a class="waves-effect waves-light"  href="{{ url('/admin') }}"><i class="material-icons left">input</i>Dashboard</a></li>

        @endif
            @if(Auth::user()->role_id==0)

                <li><a class="waves-effect waves-light"  href="{{ url('/wefixer') }}"><i class="material-icons left">input</i>Orders</a></li>
                <li><a class="waves-effect waves-light"  href="{{ url('/wefix/edit') }}"><i class="material-icons left">edit</i>Edit Profile</a></li>

            @endif
            @if(Auth::user()->role_id==1)

                <li><a class="waves-effect waves-light"  href="{{ url('/users/order') }}"><i class="material-icons left">input</i>Orders</a></li>
                <li><a class="waves-effect waves-light"  href="{{ url('/users/edit') }}"><i class="material-icons left">edit</i>Edit Profile</a></li>

            @endif

        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header">{{ Auth::user()->email }}<i class="material-icons"> arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li ><a  style="color:#e40046;" href="{{ url('/logout') }}"><i class=" waves-effect waves-green btn-flat"></i>Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>








    @endif





</ul>


<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">

            <a class="brand-logo"><i class="material-icons right">build</i>WeFix</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul  class="right hide-on-med-and-down">
                <li ><a style="color:#ffffff;font-size: 17px;" href="{{ url('/') }}"><i class="material-icons left">home</i>Home</a></li>
                @if (Auth::guest())
                    <li><a class="waves-effect waves-light dropdown-button"  data-activates="dropdown1"><i class="material-icons left">assignment</i>Register<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="waves-effect waves-light" style="color:#ffffff;font-size: 17px;" href="{{ url('/login') }}"><i class="material-icons left">input</i>Login</a></li>
                @else

                @if(Auth::user()->role_id==2)

                        <li><a class="waves-effect waves-light" style="color:#ffffff;font-size: 17px;" href="{{ url('/admin') }}"><i class="material-icons left">input</i>Dashboard</a></li>

                    @endif
                    @if(Auth::user()->role_id==0)

                        <li><a class="waves-effect waves-light" style="color:#ffffff;font-size: 17px;" href="{{ url('/wefixer') }}"><i class="material-icons left">input</i>Orders</a></li>
                        <li><a class="waves-effect waves-light" style="color:#ffffff;font-size: 17px;" href="{{ url('/wefix/edit') }}"><i class="material-icons left">edit</i>Edit Profile</a></li>

                    @endif
                    @if(Auth::user()->role_id==1)

                        <li><a class="waves-effect waves-light" style="color:#ffffff;font-size: 17px;" href="{{ url('/users/order') }}"><i class="material-icons left">input</i>Orders</a></li>
                        <li><a class="waves-effect waves-light" style="color:#ffffff;font-size: 17px;" href="{{ url('/users/edit') }}"><i class="material-icons left">edit</i>Edit Profile</a></li>

                    @endif
                    <li><a class="dropdown-button" data-activates="dropdown2">
                            {{ Auth::user()->email }}<i class="material-icons right">arrow_drop_down</i></a>
                @endif
                <li><a style="color:#ffffff;font-size: 17px;" href="{{ url('/about') }}"><i class="material-icons left">people</i>About Us</a></li>

            </ul>

        </div>
    </nav>
</div>

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
        $(".button-collapse").sideNav();
        $('.parallax').parallax();
    });




    $(document).ready(function(){

        $('.carousel').carousel({





                    indicators:true


                }


        );

        autoplay()
        function autoplay() {
            $('.carousel').carousel('next');
            setTimeout(autoplay, 3600);
        }

    });






</script>

@yield('jquery')
</body>

</html>


