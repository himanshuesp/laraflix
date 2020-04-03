<?php $__env->startSection('content'); ?>
<div class="container mt-3">
    <div class="row">
		<ul class="col-md-12" style="margin: 0; padding: 0; display:inline-block; font-size: 0;">
			<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li class="col-md-3" style="list-style-type: none; display: inline-block; padding: 10px; margin: 0; font-size: 1rem;">
					<a href="/video/<?php echo e($video->id); ?>/"><img src="<?php echo e($video->previewSource()); ?>" style="width: 100%;"></a>
					<span style="color: #fff;"><?php echo e($video->name); ?></span>
				</li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>