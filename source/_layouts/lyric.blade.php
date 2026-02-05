@extends('_layouts.main')

@section('body')

<div class="lyric-detail min-h-screen flex flex-col" @isset($page->image) style="background-image: url('{{ $page->image }}'); background-size: cover; background-position: center; background-attachment: fixed;" @endisset>
    
@component('_components.backdrop-overlay')
        <div class="flex md:flex-col lg:flex-row gap-x-10">
            
            <span class="flex-1 pt-0">
                <img src="{{ $page->image }}" alt="{{ $page->title }}" class="lg:sticky lg:top-0 w-full h-screen object-contain shadow-lg p-4" loading="lazy" />
            </span>

            <span class="flex-1 overflow-y-auto md:ml-12">
                <div class="py-6 lg:mt-20">
                    <div class="px-6 font-bold text-[var(--text)] font-title uppercase text-2xl text-balance">{{ $page->title }}</div>    
                    <div class="content prose max-w-2xl text-xl/7">
                    @yield('content')
                    </div>
                </div>
            </span>

        </div>
    </div>
@endcomponent
@endsection