---
title: Videos
description: Music videos, album trailers, and live videos for Redshift.
---
@extends('_layouts.main')

@section('body')

<div class="max-w-4xl mx-auto space-y-8 bg-black/40 backdrop-blur-sm sm:p-4 p-8">
    @forelse($videos as $video)
    <div>
        <div class="w-full">
            <div class="aspect-video">
                <iframe 
                    class="w-full h-full shadow-lg object-contain"
                    src="https://www.youtube.com/embed/{{ $video->youtube_id }}"
                    title="{{ $video->title }}"
                    loading="lazy"
                    width="560"
                    height="315"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        @if($video->getContent())
        <div class="text-2xl font-normal pt-4 font-title text-[var(--text)] uppercase mb-4 tracking-widest">{{ $video->title }}</div>
        <span class="text-md/9 mx-auto">
            {!! $video->getContent() !!}
        </span>
        @endif
    </div>
    @empty
        <p>No videos found.</p>
    @endforelse
</div>

@endsection