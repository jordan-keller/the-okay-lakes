<?php $__env->startSection('content'); ?><p>This is the start of your first blog post.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>