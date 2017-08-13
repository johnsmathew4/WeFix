<?php $__env->startSection('content'); ?>
    <style type="text/css">


        .card:hover {
            box-shadow: 0 10px 40px #e40046;
        }

    </style>
    <h1 align="center" >Orders</h1>


    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#test2">Pending</a></li>
                <li class="tab col s3"><a href="#test1">Finished</a></li>
                <li class="tab col s3"><a href="#test3">Cancelled</a></li>


            </ul>
        </div>
        <div id="test1" class="col s12">

            <ul class="collection" style="width: 70%;margin: 0 auto">


                <?php 
                $i=1;
                 ?>


                <?php foreach($orders as $order): ?>

                    <?php if($order->finish==1&&$order->finish!=2): ?>





                    <li style="margin-top: 8px" class="collection-item avatar hovereffect z-depth-3 hoverable waves-effect waves-block waves-light">


                        <img  src="<?php echo e(asset('images/avatar.png')); ?>"  alt="" class="circle">
                        <a style="display: block ;text-decoration: none"  href="<?php echo e(route('wefixer.profile',['id'=> $order->user->id])); ?> "><?php echo e($order->user->name); ?></a>


                        <?php echo e($order->user->email); ?><br>
                        <h5> <?php echo e($order->time->format('d F Y ')); ?></h5><br>
                        <?php echo e($order->created_at->diffForHumans()); ?>

                        <br>
                        Finished: <?php echo e($order->updated_at->diffForHumans()); ?>

                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>



            </ul>

        </div>
        <div id="test2" class="col s12">

            <ul class="collection" style="width: 70%;margin: 0 auto">


                <?php 
                $i=1;
                 ?>


                <?php foreach($orders as $order): ?>

                    <?php if($order->finish!=1&&$order->accept!=2): ?>





                        <li style="margin-top: 8px" class="collection-item avatar hovereffect z-depth-3 hoverable waves-effect waves-block waves-light">


                            <img  src="<?php echo e(asset('images/avatar.png')); ?>"  alt="" class="circle">
                            <a style="display: block ;text-decoration: none"  href="<?php echo e(route('wefixer.profile',['id'=> $order->user->id])); ?> "><?php echo e($order->user->name); ?></a>


                            <?php echo e($order->user->email); ?><br>
                            <h5> <?php echo e($order->time->format('d F Y ')); ?></h5><br>
                            <?php echo e($order->created_at->diffForHumans()); ?>

                            <br>

                            <?php if($order->accept!=1): ?>
                            <form method="POST" action="<?php echo e(route('accept',['id' => $order->id])); ?>">
                                <?php echo e(csrf_field()); ?>

                                <button type="submit" style="margin-right:300px;background-color: #e40046;color: white;" class="modal-action modal-close btn waves-light waves-effect">Accept</button>
                            </form>
                            <br>
                                <form method="POST" action="<?php echo e(route('reject',['id' => $order->id])); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <button type="submit" style="margin-right:300px;background-color: #e40046;color: white;" class="modal-action modal-close btn waves-light waves-effect">Reject</button>
                                </form>
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>



            </ul>

    </div>
        <div id="test3" class="col s12">

            <ul class="collection" style="width: 70%;margin: 0 auto">


                <?php 
                $i=1;
                 ?>


                <?php foreach($orders as $order): ?>

                    <?php if($order->accept==2): ?>





                        <li style="margin-top: 8px" class="collection-item avatar hovereffect z-depth-3 hoverable waves-effect waves-block waves-light">


                            <img  src="<?php echo e(asset('images/avatar.png')); ?>"  alt="" class="circle">
                            <a style="display: block ;text-decoration: none"  href="<?php echo e(route('wefixer.profile',['id'=> $order->user->id])); ?> "><?php echo e($order->user->name); ?></a>


                            <?php echo e($order->user->email); ?><br>
                            <h5> <?php echo e($order->time->format('d F Y ')); ?></h5><br>
                            <?php echo e($order->created_at->diffForHumans()); ?>

                            <br>
                            <form method="POST" action="<?php echo e(route('active',['id' => $order->id])); ?>">
                                <?php echo e(csrf_field()); ?>

                                <button type="submit" style="margin-right:300px;background-color: #e40046;color: white;" class="modal-action modal-close btn waves-light waves-effect">Make Active</button>
                            </form>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>



            </ul>

        </div>
    </div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>