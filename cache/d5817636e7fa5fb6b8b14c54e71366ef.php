<?php $__env->startSection('body'); ?>
<div class="lyric-detail min-h-screen flex flex-col" <?php if(isset($page->image)): ?> style="background-image: url('<?php echo e($page->image); ?>'); background-size: cover; background-position: center; background-attachment: fixed;" <?php endif; ?>>
    <div class="bg-black/40 backdrop-blur-sm flex-1 flex flex-col justify-center p-8">
        <h1 class="text-4xl font-bold text-white mb-8"><?php echo e($page->title); ?></h1>
        <img src="<?php echo e($page->image); ?>" alt="<?php echo e($page->title); ?>" class="w-64 h-64 object-cover mb-8 mx-auto rounded shadow-lg" loading="lazy" />
        
        <div class="content whitespace-pre-wrap text-red-900 max-w-2xl text-lg leading-relaxed">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/Jordan/Herd/the-okay-lakes/source/_layouts/lyric.blade.php ENDPATH**/ ?>