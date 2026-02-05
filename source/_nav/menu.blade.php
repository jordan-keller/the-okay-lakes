<nav class="hidden lg:flex text-lg font-serif tracking-wider gap-7 font-semibold">

    <a title="{{ $page->siteName }} About" href="/about"
        class="text-[var(--text)]/70 transition duration-300 hover:text-[var(--text)] {{ $page->isActive('/about') ? 'active text-[var(--text)]/100 translate' : '' }}">
        About
    </a>

        {{-- <a title="{{ $page->siteName }} Blog" href="/blog"
        class="text-[var(--text)]/70 transition duration-300 hover:text-[var(--text)] {{ $page->isActive('/blog') ? 'active text-[var(--text)]/100' : '' }}">
        Blog
    </a> --}}

        <a title="{{ $page->siteName }} Lyrics" href="/lyrics"
        class="text-[var(--text)]/70 transition duration-300 transition duration-300 hover:text-[var(--text)] {{ $page->isActive('/lyrics') ? 'active text-[var(--text)]/100' : '' }}">
        Lyrics
    </a>


        <a title="{{ $page->siteName }} Videos" href="/videos"
        class="text-[var(--text)]/70 transition duration-300 hover:text-[var(--text)] {{ $page->isActive('/videos') ? 'active text-[var(--text)]/100' : '' }}">
        Videos
    </a>

    <a title="{{ $page->siteName }} Listen" href="/listen"
        class="text-[var(--text)]/70 transition duration-300 hover:text-[var(--text)] {{ $page->isActive('/listen') ? 'active text-[var(--text)]/100' : '' }}">
        Listen
    </a>

    {{-- <a title="{{ $page->siteName }} Contact" href="/contact"
        class="text-[var(--text)]/70 transition duration-300 hover:text-[var(--text)] {{ $page->isActive('/contact') ? 'active text-[var(--text)]/100' : '' }}">
        Contact
    </a> --}}
</nav>
