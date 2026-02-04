<?php $__env->startSection('content'); ?><p>This starter template includes a custom <strong>404 Not Found</strong> error page, located at <code>/source/404.blade.php</code>. <a href="/404">To preview the 404 page</a>, you can visit <code>/404</code> in your browser.</p>

<pre><code class="language-html">&lt;!-- source/404.blade.php --&gt;

<?php echo e('@'); ?>extends('_layouts.main')

<?php echo e('@'); ?>section('body')
    &lt;div class="flex flex-col items-center mt-32 text-gray-700"&gt;
        &lt;h1 class="mb-2 text-6xl font-light leading-none"&gt;404&lt;/h1&gt;

        &lt;h2 class="text-3xl"&gt;Page not found.&lt;/h2&gt;

        &lt;hr class="block w-full max-w-sm mx-auto my-8 border"&gt;

        &lt;p class="text-xl"&gt;
            Need to update this page? See the &lt;a title="404 Page Documentation" href="https://jigsaw.tighten.co/docs/custom-404-page/"&gt;Jigsaw documentation&lt;/a&gt;.
        &lt;/p&gt;
    &lt;/div&gt;
<?php echo e('@'); ?>endsection
</code></pre>

<hr />

<p>Depending on where your site is hosted, you may need to configure your server to use the custom 404 page. For more details, visit the <a href="https://jigsaw.tighten.co/docs/custom-404-page/">Jigsaw documentation about configuring a custom 404 page</a>.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>