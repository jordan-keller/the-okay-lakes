---
title: Lyrics
description: Lyrics for the album Redshift by The Okay Lakes
---
@extends('_layouts.main')

@section('body')

@component('_components.backdrop-overlay')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 p-3">
        @foreach($lyrics->sortBy('track') as $lyric)
            <a href="{{ $lyric->getUrl() }}" class="block group">
                <div class="text-center overflow-hidden shadow-sm hover:shadow-md text-[var(--text)]/70 hover:text-[var(--text)] transition-shadow">
                    <div class="aspect-square overflow-hidden">
                        <img 
                            class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-300"
                            src="{{ $lyric->image }}" 
                            alt="{{ $lyric->title }}"
                            loading="lazy"
                        />
                    </div>
                    <div class="p-3">
                        <div class="text-base font-medium line-clamp-2 font-title uppercase tracking-wide">{{ $lyric->title }}</div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endcomponent

@endsection