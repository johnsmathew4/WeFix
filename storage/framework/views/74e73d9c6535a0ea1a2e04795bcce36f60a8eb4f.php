<?php $__env->startSection('extra'); ?>


    <div id="modal1" class="modal">
        <div class="modal-content">

            <h3 style="color:grey;" align="center">Wefixer</h3>
            <div class="row">
                <form  class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <div class="row">
                        <div style="<?php echo e($errors->has('name') ? 'color: red;': ""); ?>" class="input-field col s12">
                            <i class="material-icons prefix"style="color:#e40046 ">account_circle</i>
                            <input value="<?php echo e(old('name')); ?>" onclick = "<?php echo e($errors->has('name') ? "this.style.boxShadow = '0 0 0 red'" : ""); ?>"
                                   onmouseover= "<?php echo e($errors->has('name') ? "this.style.borderBottom = '1px solid red'" : ""); ?>" id="name"  name="name" type="text" class="validate">
                            <label  style="<?php echo e($errors->has('name') ? "color: red;"  : ""); ?> "for="name">Name</label>
                            <small style="<?php echo e($errors->has('name') ? "color:red" : ""); ?>" >  <?php if($errors->has('name')): ?>

                                    <?php echo e($errors->first('name')); ?>


                                <?php endif; ?> </small>
                        </div>
                    </div>

                    <input  type="hidden"  name="role_id" value=0>
                    <div class="row">
                        <div style="<?php echo e($errors->has('email') ? 'color: red;': ""); ?>" class="input-field col s12">

                            <i class="material-icons prefix"style="color:#e40046 ">email</i>
                            <input value="<?php echo e(old('email')); ?>"onclick = "<?php echo e($errors->has('email') ? "this.style.boxShadow = '0 0 0 red'" : ""); ?>"
                                   onmouseover= "<?php echo e($errors->has('email') ? "this.style.borderBottom = '1px solid red'" : ""); ?>" id="email"  name="email" type="email" class="validate">
                            <label  style="<?php echo e($errors->has('email') ? "color: red;"  : ""); ?> "for="email">Email</label>
                            <small style="<?php echo e($errors->has('email') ? "color:red" : ""); ?>" >  <?php if($errors->has('email')): ?>

                                    <?php echo e($errors->first('email')); ?>


                                <?php endif; ?> </small>
                        </div>
                    </div>







                    <div class="row">
                        <div style="<?php echo e($errors->has('password') ? 'color: red;': ""); ?>" class="input-field col s12">
                            <i class="material-icons prefix"style="color:#e40046 ">lock</i>
                            <input value="<?php echo e(old('password')); ?>"onclick = "<?php echo e($errors->has('password') ? "this.style.boxShadow = '0 0 0 red'" : ""); ?>"
                                   onmouseover= "<?php echo e($errors->has('password') ? "this.style.borderBottom = '1px solid red'" : ""); ?>" id="password"  name="password" type="password" class="validate">
                            <label  style="<?php echo e($errors->has('password') ? "color: red;"  : ""); ?> "for="password">Password</label>
                            <small style="<?php echo e($errors->has('password') ? "color:red" : ""); ?>" >  <?php if($errors->has('password')): ?>

                                    <?php echo e($errors->first('password')); ?>


                                <?php endif; ?> </small>
                        </div>
                    </div>


                    <div class="row">
                        <div style="<?php echo e($errors->has('password_confirmation') ? 'color: red;': ""); ?>" class="input-field col s12">
                            <i class="material-icons prefix "style="color:#e40046 ">lock_outline</i>

                            <input onclick = "<?php echo e($errors->has('password_confirmation') ? "this.style.boxShadow = '0 0 0 red'" : ""); ?>"
                                   onmouseover= "<?php echo e($errors->has('password_confirmation') ? "this.style.borderBottom = '1px solid red'" : ""); ?>" id="password_confirmation"  name="password_confirmation" type="password" class="validate">
                            <label  style="<?php echo e($errors->has('password_confirmation') ? "color: red;"  : ""); ?> "for="password_confirmation">Confirm Password</label>
                            <small style="<?php echo e($errors->has('password_confirmation') ? "color:red" : ""); ?>" >  <?php if($errors->has('password_confirmation')): ?>

                                    <?php echo e($errors->first('password_confirmation')); ?>


                                <?php endif; ?> </small>
                        </div>
                    </div>

                    <div class="row">
                        <div style="<?php echo e($errors->has('number') ? 'color: red;': ""); ?>" class="input-field col s12">
                            <i class="material-icons prefix"style="color:#e40046 ">phone</i>
                            <input value="<?php echo e(old('number')); ?>" onclick = "<?php echo e($errors->has('number') ? "this.style.boxShadow = '0 0 0 red'" : ""); ?>"
                                   onmouseover= "<?php echo e($errors->has('number') ? "this.style.borderBottom = '1px solid red'" : ""); ?>" id="number"  name="number" type="number" class="validate">
                            <label  style="<?php echo e($errors->has('number') ? "color: red;"  : ""); ?> "for="number">Mobile No</label>
                            <small style="<?php echo e($errors->has('number') ? "color:red" : ""); ?>" >  <?php if($errors->has('number')): ?>

                                    <?php echo e($errors->first('number')); ?>


                                <?php endif; ?> </small>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix"style="color:#e40046 ">location_on</i>
                        <select id="loc" name="location_id">

                            <?php if($location): ?>
                                <?php foreach($location as $loc): ?>

                                    <option value="<?php echo e($loc->id); ?>"><?php echo e($loc->location); ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        <label>Location</label>
                    </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix"style="color:#e40046 ">store</i>
                            <textarea name='address' id="textarea1" class="materialize-textarea"><?php echo e(old('address')); ?></textarea>
                            <label for="textarea1">Address</label>
                            <small style="<?php echo e($errors->has('address') ? "color:red" : ""); ?>" >  <?php if($errors->has('address')): ?>

                                    <?php echo e($errors->first('address')); ?>


                                <?php endif; ?> </small>
                        </div>




                    <div class="input-field col s12">
                        <i class="material-icons prefix"style="color:#e40046 ">work</i>
                        <select name="profession_id">

                            <?php if($profession): ?>
                                <?php foreach($profession as $pro): ?>

                                    <option value="<?php echo e($pro->id); ?>"><?php echo e($pro->name); ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        <label>Profession</label>
                    </div>






















                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" style=" background-color: #e40046;margin-left: 280px" class="btn btn-primary pulse">
                                <i class="fa fa-btn fa-user "></i> Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>



        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jquery'); ?>

    <script type="text/javascript">



        $(document).ready(function() {
            $('#modal1').modal('open');

        });

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>