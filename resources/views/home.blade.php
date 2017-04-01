@extends('layouts.app')



@section('content')
    <style type="text/css">
        .parallax-container h2
        {
            text-align: center;
            color: white;

        }

        .page-footer
        {
            text-align: center;
        }
        body{
            background-color: #f4f3f0;
        }

        .hovereffect {
            width: 100%;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
        }

        .hovereffect .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
            background-color: rgba(0,0,0,0.6);
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transform: translate(460px, -100px) rotate(180deg);
            -ms-transform: translate(460px, -100px) rotate(180deg);
            transform: translate(460px, -100px) rotate(180deg);
            -webkit-transition: all 0.2s 0.4s ease-in-out;
            transition: all 0.2s 0.4s ease-in-out;
        }

        .hovereffect img {
            display: block;
            position: relative;
            -webkit-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
        }

        .hovereffect h2 {
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            position: relative;
            font-size: 17px;
            padding: 10px;
            background: rgba(0, 0, 0, 0.6);
        }

        .hovereffect a.info {
            display: inline-block;
            text-decoration: none;
            padding: 7px 14px;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            margin: 50px 0 0 0;
            background-color: transparent;
            -webkit-transform: translateY(-200px);
            -ms-transform: translateY(-200px);
            transform: translateY(-200px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .hovereffect a.info:hover {
            box-shadow: 0 0 5px #fff;
        }

        .hovereffect:hover .overlay {
            opacity: 1;
            filter: alpha(opacity=100);
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
            -webkit-transform: translate(0px, 0px);
            -ms-transform: translate(0px, 0px);
            transform: translate(0px, 0px);
        }

        .hovereffect:hover h2 {
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transition-delay: 0.5s;
            transition-delay: 0.5s;
        }

        .hovereffect:hover a.info {
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }


    </style>

    @yield('extra')









    <h2 style="text-align: center;color: #e40046">How can we help you today?</h2>

    <div class="carousel  " style="height: 300px; margin-top: 5px;margin-left: " >




        <a class="carousel-item "  style="width: 700px; height: 400px" href="{{route('user.profession',['pro'=>'carpenter'])}}"><img  src="images/plumbing2.jpg"></a>
        <a class="carousel-item "  style="width: 700px; height: 400px" href="{{route('user.profession',['pro'=>'carpenter'])}}"><img   src="images/carpentry.jpg"></a>
        <a class="carousel-item "  style="width: 700px; height: 400px" href="{{route('user.profession',['pro'=>'cleaning'])}}"><img  src="images/cleaning.jpg"></a>

        <a class="carousel-item "  style="width: 700px; height: 400px" href="{{route('user.profession',['pro'=>'painter'])}}"><img  src="images/painting2.jpg"></a>
        <a class="carousel-item "  style="width: 700px; height: 400px" href="{{route('user.profession',['pro'=>'plumber'])}}"><img  src="images/plumbing3.jpg"></a>
        <a class="carousel-item "  style="width: 700px; height: 400px" href="{{route('user.profession',['pro'=>'plumber'])}}"><img  src="images/plumbingnew.jpg"></a>
    </div>


    <div class="container-fluid"style="margin-left: 80px">


        <div class="row " style="width: 95%;">

            <div class="col 13">
                <div class="hovereffect z-depth-5 hoverable waves-effect waves-block waves-light" style="height: 250px;width: 250px;">
                    <img class="img-responsive" src="images/carpenter21.jpg" style="height:250px;">

                    <div class="overlay">
                        <h2>CARPENTRY</h2>
                        <a class="info" href="{{route('user.profession',['pro'=>'carpenter'])}}">BOOK NOW</a>

                    </div>
                </div>

            </div>
            <div class="col 13">
                <div class="hovereffect z-depth-5 hoverable waves-effect waves-block waves-light" style="height: 250px;width: 250px;">
                    <img class="img-responsive" src="images/cleaner22.jpg" style="height:250px;">

                    <div class="overlay">
                        <h2>CLEANING</h2>
                        <a class="info" href="{{route('user.profession',['pro'=>'cleaner'])}}">BOOK NOW</a>

                    </div>
                </div>

            </div>
            <div class="col 13">
                <div class="hovereffect z-depth-5 hoverable waves-effect waves-block waves-light" style="height: 250px;width: 250px;">
                    <img class="img-responsive" src="images/Plumbing21.jpg" style="height:250px;">

                    <div class="overlay">
                        <h2>PLUMBING</h2>
                        <a class="info" href="{{route('user.profession',['pro'=>'plumber'])}}">BOOK NOW</a>

                    </div>
                </div>

            </div>
            <div class="col 13">
                <div class="hovereffect z-depth-5 hoverable waves-effect waves-block waves-light" style="height: 250px;width: 250px;">
                    <img class="img-responsive" src="images/painter21.jpg" style="height:250px;">

                    <div class="overlay">
                        <h2>PAINTING</h2>
                        <a class="info" href="{{route('user.profession',['pro'=>'painter'])}}">BOOK NOW</a>

                    </div>
                </div>

            </div>




        </div>
    </div>







    <div class="container-fluid " style="color:#e40046 " >
        <footer class="page-footer" style="background-color:#f4f3f0;">
            <div class="container ">
                <h3 >Why Choose Us? </h3>

                <div class="row">
                    <div class="col l4">
                        <h4 style="color:#e40046 ">Easy Booking</h4>
                        <i class="medium material-icons" style="color:#e40046;">thumb_up</i></div>

                    <div class="col l4">
                        <h4 style="color:#e40046 ">All In One</h4>
                        <i class="medium material-icons" style="color:#e40046;">language</i></div>
                    <div class="col l4">
                        <h4 style="color:#e40046 ">On Time Service</h4>
                        <i class="medium material-icons" style="color:#e40046;">schedule</i></div>




                </div>
            </div>
            <div class="footer-copyright" style="background-color:#e40046 ">
                <div class="container">
                    ©COPYRIGHT WEFIX SOLUTIONS PVT LTD 2015. ALL RIGHTS RESERVED
                    <a class="grey-text text-lighten-4 right" href="#!">More Details</a>
                </div>
            </div>
        </footer>
    </div>

@endsection
