@extends('_layouts.main')

@section('body')
<div class="lyric-detail min-h-screen flex flex-col" @isset($page->image) style="background-image: url('{{ $page->image }}'); background-size: cover; background-position: center; background-attachment: fixed;" @endisset>
    <div class="bg-black/40 backdrop-blur-sm flex-1 flex flex-col justify-center p-8">
    <img src="{{ $page->image }}" alt="{{ $page->title }}" class="w-full h-full object-cover mb-12 shadow-lg" loading="lazy" />
        <div class="px-6 font-bold text-[var(--text)] font-title uppercase text-2xl">{{ $page->title }}</div>
        
        <div class="content prose max-w-2xl text-xl/7">
            @yield('content')
        </div>
    </div>
</div>
@endsection