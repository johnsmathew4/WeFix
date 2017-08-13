<?php $__env->startSection('content'); ?>
    <style type="text/css">
        .parallax-container h3
        {
            text-align: center;
            color: white;
            font-weight: bolder;

        }

        .page-footer
        {
            text-align: center;
        }
        body{

        }

        .hovereffect {
            width:100%;
            height:100%;
            float:left;
            overflow:hidden;
            position:relative;
            text-align:center;
            cursor:default;
        }

        .hovereffect .overlay {
            width:100%;
            height:100%;
            position:absolute;
            overflow:hidden;
            top:0;
            left:0;
            opacity:0;
            background-color:rgba(0,0,0,0.5);
            -webkit-transition:all .4s ease-in-out;
            transition:all .4s ease-in-out
        }

        .hovereffect img {
            display:block;
            position:relative;
            -webkit-transition:all .4s linear;
            transition:all .4s linear;
        }

        .hovereffect h2 {
            text-transform:uppercase;
            color:#fff;
            text-align:center;
            position:relative;
            font-size:17px;
            background:rgba(0,0,0,0.6);
            -webkit-transform:translatey(-100px);
            -ms-transform:translatey(-100px);
            transform:translatey(-100px);
            -webkit-transition:all .2s ease-in-out;
            transition:all .2s ease-in-out;
            padding:10px;
        }

        .hovereffect a.info {
            text-decoration:none;
            display:inline-block;
            text-transform:uppercase;
            color:#fff;
            border:1px solid #fff;
            background-color:transparent;
            opacity:0;
            filter:alpha(opacity=0);
            -webkit-transition:all .2s ease-in-out;
            transition:all .2s ease-in-out;
            margin:50px 0 0;
            padding:7px 14px;
        }

        .hovereffect a.info:hover {
            box-shadow:0 0 5px #fff;
        }

        .hovereffect:hover img {
            -ms-transform:scale(1.2);
            -webkit-transform:scale(1.2);
            transform:scale(1.2);
        }

        .hovereffect:hover .overlay {
            opacity:1;
            filter:alpha(opacity=100);
        }

        .hovereffect:hover h2,.hovereffect:hover a.info {
            opacity:1;
            filter:alpha(opacity=100);
            -ms-transform:translatey(0);
            -webkit-transform:translatey(0);
            transform:translatey(0);
        }

        .hovereffect:hover a.info {
            -webkit-transition-delay:.2s;
            transition-delay:.2s;
        }
        .white-text{

            margin-top:
        }
        .comments
        {
            margin-top: 80px;
        }


    </style>

    <?php echo $__env->yieldContent('extra'); ?>









    <h2 style="text-align: center;color: #e40046">How can we help you today?</h2>

    <div class="carousel  " style="height: 300px; margin-top: 5px;margin-left: " >




        <a class="carousel-item "  style="width: 700px; height: 400px" href="<?php echo e(route('user.profession',['pro'=>'carpenter'])); ?>"><img  src="images/plumbing2.jpg"></a>
        <a class="carousel-item "  style="width: 700px; height: 400px" href="<?php echo e(route('user.profession',['pro'=>'carpenter'])); ?>"><img   src="images/carpentry.jpg"></a>
        <a class="carousel-item "  style="width: 700px; height: 400px" href="<?php echo e(route('user.profession',['pro'=>'cleaning'])); ?>"><img  src="images/cleaning.jpg"></a>

        <a class="carousel-item "  style="width: 700px; height: 400px" href="<?php echo e(route('user.profession',['pro'=>'painter'])); ?>"><img  src="images/painting2.jpg"></a>
        <a class="carousel-item "  style="width: 700px; height: 400px" href="<?php echo e(route('user.profession',['pro'=>'plumber'])); ?>"><img  src="images/plumbing3.jpg"></a>
        <a class="carousel-item "  style="width: 700px; height: 400px" href="<?php echo e(route('user.profession',['pro'=>'plumber'])); ?>"><img  src="images/plumbingnew.jpg"></a>
    </div>


    <div class="container-fluid"style="margin-left:">


        <div class="row " style="width: 95%;">

            <div class="col s12 m3">
                <div class="hovereffect z-depth-5 hoverable waves-effect waves-block waves-light" style="height: 250px;width: 250px;">
                    <img class="img-responsive" src="images/carpenter21.jpg" style="height:250px;">

                    <div class="overlay">
                        <h2>CARPENTRY</h2>
                        <a class="info" href="<?php echo e(route('user.profession',['pro'=>'carpenter'])); ?>">BOOK NOW</a>

                    </div>
                </div>

            </div>
            <div class="col s12 m3">
                <div class="hovereffect z-depth-5 hoverable waves-effect waves-block waves-light" style="height: 250px;width: 250px;">
                    <img class="img-responsive" src="images/cleaner22.jpg" style="height:250px;">

                    <div class="overlay">
                        <h2>CLEANING</h2>
                        <a class="info" href="<?php echo e(route('user.profession',['pro'=>'cleaner'])); ?>">BOOK NOW</a>

                    </div>
                </div>

            </div>
            <div class="col s12 m3">
                <div class="hovereffect z-depth-5 hoverable waves-effect waves-block waves-light" style="height: 250px;width: 250px;">
                    <img class="img-responsive" src="images/Plumbing21.jpg" style="height:250px;">

                    <div class="overlay">
                        <h2>PLUMBING</h2>
                        <a class="info" href="<?php echo e(route('user.profession',['pro'=>'plumber'])); ?>">BOOK NOW</a>

                    </div>
                </div>

            </div>
            <div class="col s12 m3">
                <div class="hovereffect z-depth-5 hoverable waves-effect waves-block waves-light" style="height: 250px;width: 250px;">
                    <img class="img-responsive" src="images/painter21.jpg" style="height:250px;">

                    <div class="overlay">
                        <h2>PAINTING</h2>
                        <a class="info" href="<?php echo e(route('user.profession',['pro'=>'painter'])); ?>">BOOK NOW</a>

                    </div>
                </div>

            </div>




        </div>
    </div>
    <div class="parallax-container">


        <div class="parallax"><img style="width: 60%; " src="images/parallax4.jpg"></div>
        <h3 style="margin-top: 400px">This is what our customers say!</h3>

    </div>

    <div class="carousel carousel-slider center" style="height: 300px;background-color:#bdbdbd;"  data-indicators="true">

        <div class="carousel-item  white-text" href="#one!">
            <h2 class="comments">-Vijay</h2>
            <p  class="white-text">"Problem solved within minutes.Thanks to Wefix team"</p>
        </div>
        <div class="carousel-item 3 white-text" href="#two!">
            <h2 class="comments">-John</h2>
            <p class="white-text">"Efficient and Ontime"</p>
        </div>
        <div class="carousel-item  white-text" href="#three!">
            <h2 class="comments">-Jane</h2>
            <p class="white-text">"Now a worker is just a click away.Kudos to the Wefix team for making it possible!!"</p>
        </div>

    </div>

    <div class="parallax-container">


        <div class="parallax"><img style="width: 60%; " src="images/parallax6.jpg"></div>


    </div>







    <div id="about" class="container-fluid " style="color:#e40046 " >
        <footer class="page-footer" style="background-color:#fafafa;">
            <div class="container ">
                <h3 >Why Choose Us? </h3>

                <div class="row">
                    <div class="col s12 m4">
                        <h4 style="color:#e40046 ">Easy Booking</h4>
                        <i class="medium material-icons" style="color:#e40046;">thumb_up</i></div>

                    <div class="col s12 m4">
                        <h4 style="color:#e40046 ">All In One</h4>
                        <i class="medium material-icons" style="color:#e40046;">language</i></div>
                    <div class="col s12 m4">
                        <h4 style="color:#e40046 ">On Time Service</h4>
                        <i class="medium material-icons" style="color:#e40046;">schedule</i></div>




                </div>
            </div>
            <div class="footer-copyright" style="background-color:#e40046 ">
                <div class="container">
                    Â©COPYRIGHT WEFIX SOLUTIONS PVT LTD 2016. ALL RIGHTS RESERVED
                    <a class="grey-text text-lighten-4 right" href="#!">More Details</a>
                </div>
            </div>
        </footer>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>