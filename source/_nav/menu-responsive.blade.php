<nav id="js-nav-menu" class="w-auto px-2 pt-6 pb-2 bg-[var(--bg)] shadow hidden lg:hidden text-center">
    <ul class="my-0">
                <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="block mt-0 mb-4 text-md no-underline {{ $page->isActive('/about') ? 'active text-[var(--link)]' : 'text-[var(--text)] underline decoration-[var(--link)] underline-offset-7 hover:text-[var(--link)] hover:no-underline' }}"
            >About</a>
        </li>
        
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="block mt-0 mb-4 text-md no-underline {{ $page->isActive('/blog') ? 'active text-[var(--link)]' : 'text-[var(--text)] underline decoration-[var(--link)] underline-offset-7 hover:text-[var(--link)] hover:no-underline' }}"
            >Blog</a>
        </li>

        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="block mt-0 mb-4 text-md no-underline {{ $page->isActive('/contact') ? 'active text-[var(--link)]' : 'text-[var(--text)] underline decoration-[var(--link)] underline-offset-7 hover:text-[var(--link)] hover:no-underline' }}"
            >Contact</a>
        </li>
    </ul>
</nav>
