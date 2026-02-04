<nav id="js-nav-menu" class="w-auto px-2 pt-6 pb-2 bg-[var(--bg)] shadow hidden lg:hidden text-center">
    <ul class="my-0">
            <li class="pl-4">
                <a
                title="<?php echo e($page->siteName); ?> About"
                href="/about"
                class="block mt-0 mb-4 text-md no-underline <?php echo e($page->isActive('/about') ? 'active text-[var(--link)]' : 'text-[var(--text)] underline decoration-[var(--link)] underline-offset-7 hover:text-[var(--link)] hover:no-underline'); ?>"
                >About</a>
             </li>

            <li class="pl-4">
                <a
                title="<?php echo e($page->siteName); ?> Lyrics"
                href="/about"
                class="block mt-0 mb-4 text-md no-underline <?php echo e($page->isActive('/lyrics') ? 'active text-[var(--link)]' : 'text-[var(--text)] underline decoration-[var(--link)] underline-offset-7 hover:text-[var(--link)] hover:no-underline'); ?>"
                >Lyrics</a>
             </li>


            <li class="pl-4">
                <a
                title="<?php echo e($page->siteName); ?> Video"
                href="/about"
                class="block mt-0 mb-4 text-md no-underline <?php echo e($page->isActive('/video') ? 'active text-[var(--link)]' : 'text-[var(--text)] underline decoration-[var(--link)] underline-offset-7 hover:text-[var(--link)] hover:no-underline'); ?>"
                >Videos</a>
             </li>

            <li class="pl-4">
                <a
                title="<?php echo e($page->siteName); ?> Listen"
                href="/listen"
                class="block mt-0 mb-4 text-md no-underline <?php echo e($page->isActive('/listen') ? 'active text-[var(--link)]' : 'text-[var(--text)] underline decoration-[var(--link)] underline-offset-7 hover:text-[var(--link)] hover:no-underline'); ?>"
                >Listen</a>
             </li>
        
        

        
    </ul>
</nav>
<?php /**PATH /Users/Jordan/Herd/the-okay-lakes/source/_nav/menu-responsive.blade.php ENDPATH**/ ?>