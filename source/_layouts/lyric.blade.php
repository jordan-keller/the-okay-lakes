@extends('_layouts.main')

@section('body')
<div class="lyric-detail min-h-screen flex flex-col" @isset($page->image) style="background-image: url('{{ $page->image }}'); background-size: cover; background-position: center; background-attachment: fixed;" @endisset>
    <div class="bg-black/40 backdrop-blur-sm flex-1 flex flex-col justify-center p-8">
        <h1 class="text-4xl font-bold text-white mb-8">{{ $page->title }}</h1>
        <img src="{{ $page->image }}" alt="{{ $page->title }}" class="w-3/4 h-3/4 object-cover mb-8 mx-auto rounded shadow-lg" loading="lazy" />
        
        <div class="content whitespace-pre-wrap text-red-900 max-w-2xl text-lg leading-relaxed">
            @yield('content')
        </div>
    </div>
</div>
@endsection