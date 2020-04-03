<?php $__env->startSection('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-4" style="display: block; margin: 0 auto">
			<form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
				<?php echo e(csrf_field()); ?>


				<h2>Log In</h2>

				<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
					<input id="email" type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo e(old('email')); ?>" required autofocus>

					<?php if($errors->has('email')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('email')); ?></strong>
						</span>
					<?php endif; ?>
				</div>

				<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
					<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

					<?php if($errors->has('password')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('password')); ?></strong>
						</span>
					<?php endif; ?>
				</div>

				<div class="form-group">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
						</label>
					</div>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Login
					</button>

					<a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
						Forgot Your Password?
					</a>
				</div>
			</form>
		</div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>