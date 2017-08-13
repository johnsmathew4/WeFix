<?php $__env->startSection('content'); ?>
<div class="container">
<h3 style="color:grey;" align="center">Edit Profile</h3>
<div class="row">
    <form  class="form-horizontal" role="form" method="POST" action="<?php echo e(route('user.edited')); ?>">
        <?php echo e(csrf_field()); ?>


        <div class="row">
            <div style="<?php echo e($errors->has('name') ? 'color: red;': ""); ?>" class="input-field col s12">
                <input value="<?php echo e($user->name); ?>" onclick = "<?php echo e($errors->has('name') ? "this.style.boxShadow = '0 0 0 red'" : ""); ?>"
                       onmouseover= "<?php echo e($errors->has('name') ? "this.style.borderBottom = '1px solid red'" : ""); ?>" id="name"  name="name" type="text" class="validate">
                <label  style="<?php echo e($errors->has('name') ? "color: red;"  : ""); ?>" for="name">Name</label>
                <small style="<?php echo e($errors->has('name') ? "color:red" : ""); ?>" >  <?php if($errors->has('name')): ?>

                        <?php echo e($errors->first('name')); ?>


                    <?php endif; ?> </small>
            </div>
        </div>

        <input  type="hidden"  name="role_id" value=1>
        <div class="row">
            <div style="<?php echo e($errors->has('email') ? 'color: red;': ""); ?>" class="input-field col s12">
                <input value="<?php echo e($user->email); ?>" onclick = "<?php echo e($errors->has('email') ? "this.style.boxShadow = '0 0 0 red'" : ""); ?>"
                       onmouseover= "<?php echo e($errors->has('email') ? "this.style.borderBottom = '1px solid red'" : ""); ?>" id="email"  name="email" type="email" class="validate">
                <label  style="<?php echo e($errors->has('email') ? "color: red;"  : ""); ?>" for="email" >Email</label>
                <small style="<?php echo e($errors->has('email') ? "color:red" : ""); ?>" >  <?php if($errors->has('email')): ?>

                        <?php echo e($errors->first('email')); ?>


                    <?php endif; ?> </small>
            </div>
        </div>


        <div class="row">
            <div style="<?php echo e($errors->has('number') ? 'color: red;': ""); ?>" class="input-field col s12">

                <input value="<?php echo e($user->number); ?>" onclick = "<?php echo e($errors->has('number') ? "this.style.boxShadow = '0 0 0 red'" : ""); ?>"
                       onmouseover= "<?php echo e($errors->has('number') ? "this.style.borderBottom = '1px solid red'" : ""); ?>" id="number"  name="number" type="number" class="validate">
                <label  style="<?php echo e($errors->has('number') ? "color: red;"  : ""); ?> "for="number">Mobile No</label>
                <small style="<?php echo e($errors->has('number') ? "color:red" : ""); ?>" >  <?php if($errors->has('number')): ?>

                        <?php echo e($errors->first('number')); ?>


                    <?php endif; ?> </small>
            </div>
        </div>

        <div class="row">
        <div class="input-field col s12">
            <select id="loc" name="location_id">

                <?php if($location): ?>
                    <?php foreach($location as $loc): ?>

                        <option <?php if($loc->id==$user->location_id): ?>  <?php echo e('selected="selected"'); ?> <?php endif; ?> value="<?php echo e($loc->id); ?>"><?php echo e($loc->location); ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            <label>Location</label>
        </div>
</div>

        <div class="input-field col s12">

            <textarea name='address' id="textarea1" class="materialize-textarea"><?php echo e($user->address); ?></textarea>
            <label for="textarea1">Address</label>
            <small style="<?php echo e($errors->has('address') ? "color:red" : ""); ?>" >  <?php if($errors->has('address')): ?>

                    <?php echo e($errors->first('address')); ?>


                <?php endif; ?> </small>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" style=" background-color: #e40046;" class="btn btn-primary">
                    <i class="fa fa-btn fa-user teal"></i> Apply Changes
                </button>
            </div>
        </div>
    </form>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>