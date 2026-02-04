<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="<?php echo e($page->description ?? $page->siteDescription); ?>">

        <meta property="og:title" content="<?php echo e($page->title ? $page->title . ' | ' : ''); ?><?php echo e($page->siteName); ?>"/>
        <meta property="og:type" content="<?php echo e($page->type ?? 'website'); ?>" />
        <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
        <meta property="og:description" content="<?php echo e($page->description ?? $page->siteDescription); ?>" />

        <title><?php echo e($page->title ?  $page->title . ' | ' : ''); ?><?php echo e($page->siteName); ?></title>

        <link rel="home" href="<?php echo e($page->baseUrl); ?>">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="<?php echo e($page->siteName); ?> Atom Feed">

        <?php if($page->production): ?>
            <!-- Insert analytics code here -->
        <?php endif; ?>

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/prismjs/themes/prism.css" rel="stylesheet" />

        <?php echo vite_refresh(); ?>
        <link rel="stylesheet" href="<?php echo e(vite('source/_assets/css/main.css')); ?>">
        <script defer type="module" src="<?php echo e(vite('source/_assets/js/main.js')); ?>"></script>
    
    </head>

    <body class="flex flex-col justify-between min-h-screen leading-normal">
        <header class="bg-gradient-to-b to-transparent from-[var(--bg)]/80 py-4" role="banner">
    <div class="max-w-8xl mx-auto px-4 lg:px-8">
        <div class="text-center">
            <a href="/" title="<?php echo e($page->siteName); ?> home" class="text-center text-[var(--text)]">
                <div class="block text-3xl my-0 font-heading"><?php echo e($page->siteName); ?></div>
                <div class="block text-center font-title text-2xl tracking-[.7em] uppercase text-[var(--text)]">Redshift</div>
            </a>
        </div>

        <div id="vue-search" class="flex flex-1 justify-center items-center mt-4">
            <?php echo $__env->make('_components.search', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('_nav.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('_nav.menu-toggle', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
</header>
        <?php echo $__env->make('_nav.menu-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-7 px-4">
            <?php echo $__env->yieldContent('body'); ?>
        </main>

       <footer class="bg-gradient-to-b from-transparent to-[var(--bg)] text-center text-sm pt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-none">
                <li class="md:mr-2">
                    &copy; <a href="https://tighten.co" title="Tighten website">Tighten</a> <?php echo e(date('Y')); ?>.
                </li>

                <li>
                    Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li>
            </ul>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/prismjs/prism.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/prismjs/plugins/autoloader/prism-autoloader.min.js"></script>
        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
<?php /**PATH /Users/Jordan/Herd/the-okay-lakes/source/_layouts/main.blade.php ENDPATH**/ ?>