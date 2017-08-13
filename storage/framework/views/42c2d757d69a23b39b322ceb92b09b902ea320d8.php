<?php $__env->startSection('css'); ?>

    <style>


        body
        {

            background-color: #fbfbfb;
        }

    </style>

    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



<div class="row "  style="margin-left:30px; margin-right:30px;">


        <?php 
        $i=1;
         ?>
        <?php foreach($orders as $order): ?>

        <div class="col s12 m12 l6" style="">
        <div class="card horizontal hoverable z-depth-2 ">

                <img width="50px" height="50px" src="<?php echo e(asset('images/avatar.png')); ?>"  alt="" class="circle">

            <div class="card-stacked">

                    <h5><a style="display: block ;text-decoration: none"  href="<?php echo e(route('user.profile',['id'=> $order->worker->id])); ?> "> <?php echo e($i++); ?>.  <?php echo e($order->worker->name); ?></a></h5>
                 <?php echo e($order->worker->profession->name); ?>

                    <h5> <?php echo e($order->time->format('d F Y ')); ?></h5>
                    Booked :<?php echo e($order->created_at->diffForHumans()); ?>

                    <?php if($order->finish==1): ?> <br>
                    Finished:<?php echo e($order->updated_at->diffForHumans()); ?>

                    <?php else: ?>

                        <?php if($order->accept==1): ?>
                            <form method="POST" action="<?php echo e(route('finish',['id' => $order->id])); ?>">
                                <?php echo e(csrf_field()); ?>

                                <button type="submit" style="margin-right:300px;background-color: #e40046;color: white;" class="modal-action modal-close btn waves-light waves-effect">Finished</button>
                            </form>
                        <?php elseif($order->accept==2): ?>
                            <h6 style="color: #ff000e">Work Rejected</h6>
                        <?php else: ?>
                            <h6 style="color: #54ff33">Pending</h6>
                        <?php endif; ?>

                    <?php endif; ?>






            </div>
        </div>
        </div>

                    <?php endforeach; ?>


</div>









<?php $__env->stopSection(); ?>


<?php $__env->startSection('jquery'); ?>

    <script>
    <?php if(session('status')): ?>
        Materialize.toast('Order Successfully', 4000);

    <?php endif; ?>
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>