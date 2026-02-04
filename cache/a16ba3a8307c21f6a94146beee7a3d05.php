<nav class="hidden lg:flex items-center justify-end text-lg font-heading gap-7">

    <a title="<?php echo e($page->siteName); ?> About" href="/about"
        class="text-[var(--link)]/70 hover:text-[var(--link)] <?php echo e($page->isActive('/about') ? 'active text-[var(--text)]' : ''); ?>">
        About
    </a>

        

        <a title="<?php echo e($page->siteName); ?> Lyrics" href="/lyrics"
        class="text-[var(--link)]/70 hover:text-[var(--link)] <?php echo e($page->isActive('/lyrics') ? 'active text-[var(--text)]' : ''); ?>">
        Lyrics
    </a>


        <a title="<?php echo e($page->siteName); ?> Videos" href="/videos"
        class="text-[var(--link)]/70 hover:text-[var(--link)] <?php echo e($page->isActive('/videos') ? 'active text-[var(--text)]' : ''); ?>">
        Videos
    </a>

    <a title="<?php echo e($page->siteName); ?> Listen" href="/listen"
        class="text-[var(--link)]/70 hover:text-[var(--link)] <?php echo e($page->isActive('/listen') ? 'active text-[var(--text)]' : ''); ?>">
        Listen
    </a>

    
</nav>
<?php /**PATH /Users/Jordan/Herd/the-okay-lakes/source/_nav/menu.blade.php ENDPATH**/ ?>