<?php $__env->startSection('title', 'Landing'); ?>

<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo e(csrf_field()); ?>


    <div>
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
    </div>

    <div>
        <label for="password" class="col-md-4 control-label">Password</label>

        <input id="password" type="password" class="form-control" name="password" required>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">
            Login
        </button>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>