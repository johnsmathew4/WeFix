<?php $__env->startSection('css'); ?>



    <style type="text/css">


        .modal { width: 50% !important ; height:560px;  max-height: 100% !important }


    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div class="row">
        <div class="col s12 l7">

            <div  class=" hoverable z-depth-3 card horizontal" style="margin-top:20px;padding-top: 10px;height: 500px;">

                <div class="card-image " >
                    <img style="width: 400px" src="<?php echo e(asset('images/avatar.png')); ?>"   style="height: 250px;width: 400px;margin-left: 60px;">

                    <div class="card-action">
                        <a  href="#modal4" style="width:150px;margin-left:70px;"   class="btn waves-light waves-effect red">HIRE NOW</a>

                    </div>


                </div>

                <div class="card-stacked">

                    <div class="card-content">
                        <span style="color: gray;font-size: 80%">Name</span>   <h5> <?php echo e($us->name); ?></h5>
                        <span style="color: gray;font-size: 80%">Email</span> <h5> <?php echo e($us->email); ?></h5>
                        <span style="color: gray;font-size: 80%">Location</span> <h5>  <?php echo e($us->location->location); ?></h5>
                        <span style="color: gray;font-size: 80%">Profession</span> <h5>  <?php echo e($us->profession->name); ?></h5>
                        <span style="color: gray;font-size: 80%">Contact</span><h5> <?php echo e($us->number); ?> </h5>
                        <a href="#ratings"><div   style="height: 38px;background-color: #e40046;width:220px; border-radius: 5px;"><span style="color: white;text-align: center;font-size: 20px;font-weight: bold;padding-left: 10px;">
                    <?php 
                                    $dd=$us->rating - floor($us->rating);


                                     ?>


                                    <?php for($i=1;$i<=5;$i++): ?>

                                        <?php if($i<=$us->rating): ?>

                                            <i  style="padding-top:5px;color:white;"   class="material-icons">star</i>
                                        <?php else: ?>

                                            <?php if($dd>0.3): ?>
                                                <?php if($dd=0): ?>
                                                <?php endif; ?>

                                                <i  style="color:white;"   class="material-icons">star_half</i>

                                            <?php else: ?>
                                                <i  style="color:white;"   class="material-icons">star_border</i>
                                            <?php endif; ?>


                                        <?php endif; ?>




                                    <?php endfor; ?>

                                            <?php echo e($us->rating); ?>/5
</span>



                            </div></a>



                        <a href="#review" ><div   style="margin-top:10px;height:35px;width:200px;background-color:#EEEEEE;color: black;font-family: Arial;border-radius: 5px;font-size: 20px;text-align: center;">Rate and Review</div></a>


                        <div class="card-action" style="margin-top: 10px;padding-left: 0px;">
                          </div>


                    </div>




                </div>
            </div>

        </div>




    <div class="col s12 l5">

        <div  class=" hoverable z-depth-3 card horizontal" style="margin-top:22px;padding-top: 10px;height: 500px;padding-left: 5px;">

            <div  class="container" style=" background-color: white">


                <div><span style="color: black;font-size: 40px;font-weight: bold;padding-left: 10px;">
                            <?php 
                        $dd=$us->rating - floor($us->rating);

                         ?>
                        <?php for($i=1;$i<=5;$i++): ?>

                            <?php if($i<=$us->rating): ?>

                                <i style="color:#e40046;" class="material-icons">star</i>
                            <?php else: ?>

                                <?php if($dd>0.3): ?>
                                    <?php if($dd=0): ?>
                                    <?php endif; ?>

                                    <i  style="color:#e40046;"   class="material-icons">star_half</i>

                                <?php else: ?>
                                    <i  style="color:#e40046;"   class="material-icons">star_border</i>
                                <?php endif; ?>


                            <?php endif; ?>




                        <?php endfor; ?>

                        <?php echo e($us->rating); ?>/5 </span></div>
                <h5 style="margin-left: 30px; color:gray;" ><?php echo e($r); ?> Ratings</h5>
                <span style="color: black;font-size: 20px;font-weight: bold;padding-left: 10px;">1☆</span>
                <span style="margin-left: 30px; font-weight: bold"><?php echo e($r1); ?></span>
                <div class="progress" style="width: 50%;margin-left: 30px;">
                    <div class="determinate" style="width:<?php if($r!=0): ?> <?php echo e(($r1/$r)*100); ?><?php endif; ?>%"></div>
                </div>

                <span style="color: black;font-size: 20px;font-weight: bold;padding-left: 10px;">2☆</span>
                <span style="margin-left: 30px; font-weight: bold"><?php echo e($r2); ?></span>

                <div class="progress" style="width: 50%;margin-left: 30px;">
                    <div class="determinate" style="width:<?php if($r!=0): ?> <?php echo e(($r2/$r)*100); ?><?php endif; ?>%"></div>
                </div>
                <span style="color: black;font-size: 20px;font-weight: bold;padding-left: 10px;">3☆</span>
                <span style="margin-left: 30px; font-weight: bold"><?php echo e($r3); ?></span>
                <div class="progress" style="width: 50%;margin-left: 30px;">
                    <div><span >1☆</span></div>
                    <div class="determinate" style="width:<?php if($r!=0): ?> <?php echo e(($r3/$r)*100); ?><?php endif; ?>%"></div>
                </div>
                <span style="color: black;font-size: 20px;font-weight: bold;padding-left: 10px;">4☆</span>
                <span style="margin-left: 30px; font-weight: bold"><?php echo e($r4); ?></span>
                <div class="progress" style="width: 50%;margin-left: 30px;">
                    <div class="determinate" style="width:<?php if($r!=0): ?> <?php echo e(($r4/$r)*100); ?><?php endif; ?>%"></div>
                </div>
                <span style="color: black;font-size: 20px;font-weight: bold;padding-left: 10px;" >5☆</span>
                <span style="margin-left: 30px; font-weight: bold"><?php echo e($r5); ?></span>
                <div class="progress" style="width: 50%;margin-left: 30px;">
                    <div class="determinate" style="width:<?php if($r!=0): ?> <?php echo e(($r5/$r)*100); ?><?php endif; ?>% "></div>


                </div>



            </div>

        </div>

    </div>




        </div>






                    <!-- Modal Structure -->
                    <div id="modal4" class="modal ">
                        <div class="modal-content">
                            <i class="medium material-icons" style="margin-left: 312px">assignment_turned_in</i>
                            <h5 style="text-align: center;">Confirm Booking?</h5>

                            <div style="text-align: center;">
                                <form method="POST" action="<?php echo e(route('user.pay',['id' => $us->id,'date' =>1])); ?>">
                                    <?php echo e(csrf_field()); ?>


                                    <?php if($tom==1): ?>
                                        <a  style="background-color: #e40046;color: white;" class=" s3 btn red" onclick="Materialize.toast('Already Booked!', 4000)"> <span ><i class="material-icons">remove_shopping_cart</i></span>Tommorrow!</a>
                                    <?php else: ?>
                                        <button type="submit" style="background-color: #e40046;color: white;" class=" s3 modal-action modal-close btn waves-light waves-effect"><span ><i class="material-icons">shopping_cart</i> </span>Tommorrow</button>
                                    <?php endif; ?>
                                </form>

                                <br>
                                <form method="POST" action="<?php echo e(route('user.pay',['id' => $us->id,'date' =>2])); ?>">
                                    <?php echo e(csrf_field()); ?>


                                    <?php if($tom1==1): ?>
                                        <a  style="background-color: #e40046;color: white;" class=" s3 btn red" onclick="Materialize.toast('Already Booked!', 4000)"> <span ><i class="material-icons">remove_shopping_cart</i></span><?php echo e($tt->addDays(2)->format('d F Y ')); ?>!</a>
                                    <?php else: ?>
                                        <button type="submit" style="background-color: #e40046;color: white;" class=" s3 modal-action modal-close btn waves-light waves-effect"><span ><i class="material-icons">shopping_cart</i> </span><?php echo e($tt->addDays(2)->format('d F Y ')); ?></button>
                                    <?php endif; ?>

                                </form>
                                <br>
                                <form method="POST" action="<?php echo e(route('user.pay',['id' => $us->id,'date' =>3])); ?>">
                                    <?php echo e(csrf_field()); ?>



                                    <?php if($tom2==1): ?>
                                        <a  style="background-color: #e40046;color: white;" class=" s3 btn red" onclick="Materialize.toast('Already Booked!', 4000)"> <span ><i class="material-icons">remove_shopping_cart</i></span><?php echo e($tt->addDay()->format('d F Y ')); ?>!</a>
                                    <?php else: ?>
                                        <button type="submit" style="background-color:#e40046; color: white;" class=" s3 modal-action modal-close btn waves-light waves-effect"><span ><i class="material-icons">shopping_cart</i> </span><?php echo e($tt->addDay()->format('d F Y ')); ?></button>
                                    <?php endif; ?>




                                </form>
                            </div>
                            <div style="text-align:center">
                                <br>

                                <form id='dater' method="POST" action="<?php echo e(route('user.pay',['id' => $us->id,'date' =>4])); ?>">
                                    <?php echo e(csrf_field()); ?>



                                    <input style="margin-left:40px;width: 300px" name="select" placeholder="Select Date" id="first_name" type="date" class="datepicker">
                                    <button type="submit" style="margin-left:300px;background-color: #e40046;color: white;" class=" s3 modal-action modal-close btn waves-light waves-effect">Book</button>

                                </form>

                            </div>
                        </div>

                        <div class="modal-footer">

                        </div>

                    </div>



    <div  id="ratings" class="container" >


    </div>
    <div  id="review" class="container" style="margin-top: 10px">

        <div class="col s12 m7">

            <div  class="   hoverable z-depth-3 card  " style="margin-top:20px;padding-top: 10px;height: 300px;padding-left: 5px;">
                <div class="container" style="background-color: white;width: 70%;">
                    <form  method="POST" action="<?php echo e($edit ? route('user.feed.edit',['id' => $us->id]) : route('user.feeding',['id' => $us->id])); ?>">
                        <div id="review" <?php if(!$booked): ?> class=" tooltipped" data-position="bottom" data-delay="50" data-tooltip="Book a worker first!!"> <?php endif; ?>
                            <div class="form-group">
                                <?php echo $edit ? '<input type="hidden" name="_method" value="PATCH">' : " "; ?>

                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label for="exampleSelect1"style="font-weight: bold;font-size: large;color:#e40046 ">Rating</label>
                                    <select class="form-control" id="rating" name="rating"    <?php if(!$booked): ?> disabled <?php endif; ?> >
                                        <?php for($i=1;$i<=5;$i++): ?>
                                            <option <?php if($edit): ?> <?php if($i==$feed->rating): ?> <?php echo e('selected="selected"'); ?> <?php endif; ?> <?php endif; ?> value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextarea"style="font-weight: bold;font-size: large;color:#e40046 ">Feedback</label>
                                    <textarea class="form-control" id="feed" rows="3"  name="feed"  <?php if(!$booked): ?> disabled <?php endif; ?> > <?php echo e($edit ? $feed->feedback : ""); ?></textarea>
                                </div>


                            </div>


                            <?php if(!$booked): ?>  <a class=" red  btn" onclick="Materialize.toast('Book To Worker To Rate', 4000)">Post!</a> <?php endif; ?>



                            <?php if($booked): ?> <button  style="background-color: #e40046;margin-top: 5px;" type="submit" class="waves-effect waves-light btn #e40046"><i class="material-icons left"><?php echo e($edit ? "edit" : "done"); ?></i><?php echo e($edit ? "Edit Feed" : "Post Feed"); ?></button>

                        </div> <?php endif; ?>
                    </form>

                    <?php if($edit): ?>
                        <form method="POST" action="<?php echo e(route('user.feed.delete',['id' => $us->id])); ?>">

                            <?php echo $edit ? '<input type="hidden" name="_method" value="DELETE">' : " "; ?>

                            <?php echo e(csrf_field()); ?>



                            <div class="container">

                                <button  style="background-color: #e40046;margin-top: 25px;" type="submit" class=" waves-effect waves-light btn "><i class="material-icons left">delete</i>Discard Feed</button>
                            </div>
                        </form>

                    <?php endif; ?>
                </div>


            </div>

        </div>
    </div>














<?php if($feeding): ?>
    <div class=" container col s12 ">

    <ul class="  hoverable z-depth-3 collection" style="width: 100%; margin-left:10px; ;">
        <h4 style="text-align: center;">Ratings and feedback</h4>
        <li class="collection-item avatar">


            <?php foreach($feeding as $f): ?>
                <img  src="<?php echo e(asset('images/avatar.png')); ?>"  alt="" class="circle">
                <p  >
<span style="color: black;font-size: 20px;font-weight: bold;padding-left: 10px;">
                    <?php 
                    $dd=$f->rating - floor($f->rating);

                     ?>
                    <?php for($i=1;$i<=5;$i++): ?>

                        <?php if($i<=$f->rating): ?>

                            <i  style="color:#e40046;"   class="material-icons">star</i>
                        <?php else: ?>

                            <?php if($dd>0.3): ?>
                                <?php if($dd=0): ?>
                                <?php endif; ?>

                                <i  style="color:#e40046;"   class="material-icons">star_half</i>

                            <?php else: ?>
                                <i  style="color:#e40046;"   class="material-icons">star_border</i>
                            <?php endif; ?>


                        <?php endif; ?>




                    <?php endfor; ?>


                    <?php echo e($f->rating); ?></span>  <br>
                    <?php echo e($f->feedback); ?> <br>
                    <?php echo e($f->updated_at->diffForHumans()); ?>


                </p>
                <hr>
            <?php endforeach; ?>
        </li>
    </ul>
        </div>

<?php else: ?>
    <h4 style="text-align: center;"> No  Feeds</h4>


<?php endif; ?>

<?php echo e($tt); ?>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('jquery'); ?>

<?php  

 $tt->subMonth();   

 ?>
    <script type="text/javascript">

        $(document).ready(function(){

            $('.datepicker').pickadate({
                monthsFull: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd',


    min: new Date(<?php echo e($tt->addDay()->format('Y,m,d')); ?>),
    max: new Date(<?php echo e($tt->addDays(17)->format('Y,m,d')); ?>),
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});





// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
$('.modal').modal();
});



            $('#dater').on('submit', function (e) {

                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: '<?php echo e(route('user.pay',['id' => $us->id,'date' =>4])); ?>',
                     data:{ _token : '<?php echo csrf_token() ?>',select:$('#first_name').val() },
                    success: function (result) {

                        if(result=='tt')
                        Materialize.toast('Alreay Booked', 4000);
                                else if(result=='fail')
                            Materialize.toast('Please Select Date', 4000);
                        else{
                            Materialize.toast('Order Successfully', 4000);
                        window.setTimeout(function() {
                            window.location.href = '<?php echo e(url('/users/order')); ?>';
                        }, 4000);}
                    },




                });

            });





</script>




<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>