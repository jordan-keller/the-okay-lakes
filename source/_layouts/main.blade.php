<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/prismjs/themes/prism.css" rel="stylesheet" />

        @viteRefresh()
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
    
    </head>

    <body class="flex flex-col justify-between min-h-screen maleading-normal border-1 border-black">
           <div id="progress-bar" class="bg-white/50"></div>
        <header class="flex flex-row bg-gradient-to-b to-transparent from-[var(--bg)]/80 py-4 px-4 items-start " role="banner">
            <span class="flex-1 max-w-8xl text-left px-4 py-4 lg:items-end">
                <div class="text-left align-bottom">
                    <a href="/" title="{{ $page->siteName }} home">
                    <div class="text-2xl tracking-[.14em] font-heading no-wrap text-left text-[var(--text)] block">The Okay Lakes</div>
                    <div class="block text-2xl tracking-[.7em] uppercase text-[var(--text)] leading-none font-title">Redshift</div>
                    </a>
                </div>
            </span>
            <span id="vue-search" class="flex flex-1 mt-4 w-full place-content-end items-end pr-8">
            @include('_components.search')
            @include('_nav.menu')
            @include('_nav.menu-toggle')
            </span>
</header>
        @include('_nav.menu-responsive')

        <main role="main" class="flex-auto w-full container max-w-full mx-auto py-8">
            @yield('body')
        </main>

       <footer class="bg-gradient-to-b from-transparent to-[var(--bg)] text-center text-sm pt-12 py-4 font-serif" role="contentinfo">
            <ul class="flex flex-col md:flex-col justify-center list-none text-[var(--text)]">
                <li class="md:mr-2">
                    &copy; <a href="https://tighten.co" title="Tighten website">The Okay Lakes</a> {{ date('Y') }}.
                </li>

                <li>
                    Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a> by <a href="https://tighten.co" title="Tighten website">Tighten</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li>
            </ul>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/prismjs/prism.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/prismjs/plugins/autoloader/prism-autoloader.min.js"></script>
        @stack('scripts')
    </body>
</html>
