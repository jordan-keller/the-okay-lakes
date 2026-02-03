<nav class="hidden lg:flex items-center justify-end text-lg font-heading gap-7">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="text-[var(--link)]/70 hover:text-[var(--link)] {{ $page->isActive('/blog') ? 'active text-[var(--text)]' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="text-[var(--link)]/70 hover:text-[var(--link)] {{ $page->isActive('/about') ? 'active text-[var(--text)]' : '' }}">
        About
    </a>

        <a title="{{ $page->siteName }} Lyrics" href="/lyrics"
        class="text-[var(--link)]/70 hover:text-[var(--link)] {{ $page->isActive('/lyrics') ? 'active text-[var(--text)]' : '' }}">
        Lyrics
    </a>


        <a title="{{ $page->siteName }} Videos" href="/videos"
        class="text-[var(--link)]/70 hover:text-[var(--link)] {{ $page->isActive('/videos') ? 'active text-[var(--text)]' : '' }}">
        Videos
    </a>

    <a title="{{ $page->siteName }} Listen" href="/listen"
        class="text-[var(--link)]/70 hover:text-[var(--link)] {{ $page->isActive('/listen') ? 'active text-[var(--text)]' : '' }}">
        Listen
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="text-[var(--link)]/70 hover:text-[var(--link)] {{ $page->isActive('/contact') ? 'active text-[var(--text)]' : '' }}">
        Contact
    </a>
</nav>
