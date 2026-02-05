---
title: Videos
description: Music videos, album trailers, and live videos for Redshift.
---
@extends('_layouts.main')

@section('body')

<div class="lg:max-w-full sm:max-w-full mx-2 bg-black/40 backdrop-blur-sm snap-y snap-mandatory overflow-y-scroll h-screen">
    @forelse($videos as $video)
    <div class="lg:min-h-screen md:min-h-full snap-start snap-always">
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
        <div class="prose text-2xl font-normal pt-4 font-title text-[var(--text)] uppercase mb-4 tracking-widest">{{ $video->title }}</div>
        <div class="prose">
            {!! $video->getContent() !!}
        </div>
        @endif
    </div>
    @empty
        <p>No videos found.</p>
    @endforelse
</div>

@endsection