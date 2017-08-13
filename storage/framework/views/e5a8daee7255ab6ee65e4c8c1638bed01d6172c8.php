<?php $__env->startSection('extra'); ?>



    <div id="modal3" class="modal">
        <div class="modal-content">

            <div class="row">
                <form  class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                    <?php echo e(csrf_field()); ?>



                    <div class="row">
                        <div style="<?php echo e($errors->has('email') ? 'color: red;': ""); ?>" class="input-field col s12">
                            <i class="material-icons prefix"style="color:#e40046 ">email</i>
                            <input onclick = "<?php echo e($errors->has('email') ? "this.style.boxShadow = '0 0 0 red'" : ""); ?>"
                                   onmouseover= "<?php echo e($errors->has('email') ? "this.style.borderBottom = '1px solid red'" : ""); ?>" id="email"  name="email" type="email" class="validate">
                            <label  style="<?php echo e($errors->has('email') ? "color: red;"  : ""); ?> for="email">Email</label>
                            <small style="<?php echo e($errors->has('email') ? "color:red" : ""); ?>" >  <?php if($errors->has('email')): ?>

                                    <?php echo e($errors->first('email')); ?>


                                <?php endif; ?> </small>
                        </div>
                    </div>


                    <div class="row">
                        <div style="<?php echo e($errors->has('email') ? 'color: red;': ""); ?>" class="input-field col s12">
                            <i class="material-icons prefix"style="color:#e40046 ">lock</i>
                            <input  onclick = "<?php echo e($errors->has('email') ? "this.style.boxShadow = '0 0 0 red'" : ""); ?>"
                                    onmouseover= "<?php echo e($errors->has('email') ? "this.style.borderBottom = '1px solid red'" : ""); ?>"  id="password"  name="password"   type="password" class="validate">
                            <label style="<?php echo e($errors->has('email') ? "color: red;"  : ""); ?>"  for="password">Password</label>
                            <small style="<?php echo e($errors->has('email') ? "color:red" : ""); ?>" >  <?php if($errors->has('email')): ?>

                                    <?php echo e($errors->first('passsword')); ?>


                                <?php endif; ?> </small>
                        </div>
                    </div>

                    <p>
                        <input type="checkbox" name="remember" id="test5" />
                        <label for="test5">Remember Me</label>
                    </p>




                    <button style="background-color: #c7003d;"  class="btn waves-effect waves-light" type="submit" name="action">Log In
                        <i class="material-icons right">send</i>
                    </button>

                    <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Forgot Your Password?</a>

                </form>
            </div>



        </div>
        <div class="modal-footer">

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jquery'); ?>

    <script type="text/javascript">



        $(document).ready(function() {
            $('#modal3').modal('open');

        });

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>