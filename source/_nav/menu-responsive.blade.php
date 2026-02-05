<nav 
    id="js-nav-menu" 
    class="hidden lg:hidden fixed top-0 left-0 right-0 w-full min-h-screen px-2 pt-6 pb-2 bg-[var(--bg)] font-serif shadow text-center transform -translate-y-full origin-top z-50"
    style="transition: transform 2s ease-out;"
>
    <ul class="my-0">
        <li class="pl-4">
            <a href="/about" class="block mt-0 mb-4 text-md text-[var(--text)] {{ $page->isActive('/about') ? 'text-[var(--link)]' : '' }}">About</a>
        </li>
        <li class="pl-4">
            <a href="/lyrics" class="block mt-0 mb-4 text-md text-[var(--text)] {{ $page->isActive('/lyrics') ? 'text-[var(--link)]' : '' }}">Lyrics</a>
        </li>
        <li class="pl-4">
            <a href="/videos" class="block mt-0 mb-4 text-md text-[var(--text)] {{ $page->isActive('/videos') ? 'text-[var(--link)]' : '' }}">Videos</a>
        </li>
        <li class="pl-4">
            <a href="/listen" class="block mt-0 mb-4 text-md text-[var(--text)] {{ $page->isActive('/listen') ? 'text-[var(--link)]' : '' }}">Listen</a>
        </li>
    </ul>
</nav>