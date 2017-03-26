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

    </style>

@yield('extra')


    <div class="parallax-container">
        <h2>How can we help you today?</h2>

        <div class="parallax" ><img src="images/11.jpg"></div>
    </div>

    <div class="container-fluid" style="background-color:#e40046;">

        <h2 style="text-align:center; color:white;">Select a service</h2>
        <div class="row ">
            <div class="col l3">

                <div class="card" style="height:250px; width:250px;">
                    <div class="card-image waves-effect waves-left:100pxaves-light">
                        <img class="activator" src="images/carpenter21.jpg" style="height:170px; ">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Carpentry<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal" style="background-color:#b2d1f7;">
                        <span class="card-title grey-text text-darken-4" >Carpentry<i class="material-icons right">close</i></span>
                        <p><i>"The best carpenters make the fewest chips...."</i></p>
                        <a href="/wefix/carpenter.php">Click to know more</a>

                    </div>
                </div>
            </div>
            <div class="col l3">
                <div class="card" style=" height:250px; width:250px;">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/Plumbing21.jpg" style="height:170px;">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Plumbing<i class="material-icons right">more_vert</i></span>

                    </div>
                    <div class="card-reveal" style="background-color:#b2d1f7;">
                        <span class="card-title grey-text text-darken-4">Plumbing<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col l3">
                <div class="card" style="height:250px; width:250px;" >
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/cleaner22.jpg" style="height:170px;">
                    </div>
                    <div class="card-content" >
                        <span class="card-title activator grey-text text-darken-4">Cleaning<i class="material-icons right">more_vert</i></span>

                    </div>
                    <div class="card-reveal" style="background-color:#b2d1f7;">
                        <span class="card-title grey-text text-darken-4">Cleaning<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col l3">
                <div class="card" style="height:250px; width:250px;">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/painter21.jpg" style="height:170px;">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Painting<i class="material-icons right">more_vert</i></span>

                    </div>
                    <div class="card-reveal" style="background-color:#b2d1f7;">
                        <span class="card-title grey-text text-darken-4">Painting<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div class="parallax-container">
        <div class="parallax"><img src="images/11.jpg"></div>
    </div>




    <div class="container-fluid">
        <footer class="page-footer" style="background-color:#e40046;">
            <div class="container "style="color:white;">
                <h3 >Why Choose Us? </h3>

                <div class="row">
                    <div class="col l4">
                        <h4 style="color: white">Easy Booking</h4>
                        <i class="medium material-icons" style="color:white;">thumb_up</i></div>

                    <div class="col l4">
                        <h4 style="color: white">All In One</h4>
                        <i class="medium material-icons" style="color:white;">language</i></div>
                    <div class="col l4">
                        <h4 style="color: white">On Time Service</h4>
                        <i class="medium material-icons" style="color:white;">schedule</i></div>




                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    ©COPYRIGHT WEFIX SOLUTIONS PVT LTD 2015. ALL RIGHTS RESERVED
                    <a class="grey-text text-lighten-4 right" href="#!">More Details</a>
                </div>
            </div>
        </footer>
    </div>

@endsection
