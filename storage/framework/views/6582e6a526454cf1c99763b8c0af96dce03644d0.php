<?php $__env->startSection('content'); ?>
    <style type="text/css">
        body {
            background: #ffffff;

        }

        .card {
            background: #fff;
            border-radius: 2px;
            display: inline-block;
            height: 300px;

            width: 300px;
            box-shadow: none;
        }


        .card:hover {
            box-shadow: 0 10px 40px #bdbdbd;
        }



.container
{

    text-align: center;
}




    </style>


    <div class="container">
        <h4>Here are the top <?php echo e($pro); ?>s from <?php echo e(Auth::user()->location->location); ?> </h4>
        <div class="row">
            <?php foreach($user as $us): ?>
                <div class="col s12 m4">


                    <a href="profile/<?php echo e($us->id); ?>"> <div class="card">


                            <div class="card-image">
                                <img  src="../images/avatar.png" style="height:150px;width:150px;margin-left:75px;border-radius: 50%;">
                            </div>
                            <div class="card-content" >

                                <p  style="font-family: Roboto;font-size: large;font-weight: bold; word-spacing:20px;" > <?php echo e($us->name); ?>  </p>
                                <p style="font-family: Roboto;font-size: large;font-weight: bold" >  <?php echo e($us->email); ?> </p>
                                <?php if($us->rating==0): ?>
                                    <p style="font-family: Roboto;font-size: large;font-weight: bold;" >Not Rated </p>
                                <?php else: ?>
                                    <p style="font-family: Roboto;font-size: large;font-weight: bold;" >    <?php 
                                        $dd=$us->rating - floor($us->rating);


                                         ?>


                                        <?php for($i=1;$i<=5;$i++): ?>

                                            <?php if($i<=$us->rating): ?>

                                                <i  style=""   class="material-icons">star</i>
                                            <?php else: ?>

                                                <?php if($dd>0.3): ?>
                                                    <?php if($dd=0): ?>
                                                    <?php endif; ?>

                                                    <i    class="material-icons">star_half</i>

                                                <?php else: ?>
                                                    <i     class="material-icons">star_border</i>
                                                <?php endif; ?>


                                            <?php endif; ?>




                                        <?php endfor; ?>
<?php echo e($us->rating); ?>/5


                                </p>

                                    <?php endif; ?>

                            </div>


                        </div></a>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


   
   





   
        
 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>