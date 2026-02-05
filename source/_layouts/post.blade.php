@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('body')
<div class="max-w-4xl mb-6 mx-auto">
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-8">
    @endif

<div class="max-w-4xl mx-auto">
@component('_components.backdrop-overlay')
<div class="p-9">
    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="text-[var(--text)] text-xs tracking-wider font-semibold uppercase md:mt-0 pb-2 underline underline-offset-5 text-decoration-[var(--link)] hover:text-[var(--link)] hover:no-underline"
            >{{ $category }}</a>
        @endforeach
    @endif
    <div class="leading-none capitalize font-normal text-3xl my-3 text-[var(--text)]">{{ $page->title }}</div>
<p class="text-[var(--text)] text-xs tracking-wider font-semibold uppercase md:mt-0 pb-2">{{ date('F j, Y', $page->date) }}</p>

    <div class="pb-2 text-xl/9 mt-6">
        @yield('content')
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endcomponent
</div>
</div>
@endsection
