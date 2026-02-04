---
title: Listen
description: Listen to "Redshift"
---
@extends('_layouts.main')

@section('body')

<div class="flex-row md:flex-col sm:flex-col">
    <div class="flex-1 justify-center mb-8">
      <iframe class="mx-auto" style="border: 1; width: 350px; height: 786px;" src="https://bandcamp.com/EmbeddedPlayer/album=1797150013/size=large/bgcol=ffffff/linkcol=0687f5/transparent=true/" seamless></iframe>
   </div>
   
   <!-- Buttons container -->
   <div class="flex-1">
      <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 justify-center items-center h-full w-auto text-nowrap">

         <a href="https://open.spotify.com/album/7GT5DxaF3ajXzKgt5Z78cA?si=lFTBAoBDTLqkkjvRiN4UjQ" 
            target="_blank" 
            rel="noopener noreferrer"
            class="btn">Spotify
         </a>
         
         <a href="https://music.apple.com/us/album/redshift/1667960311" 
            target="_blank" 
            rel="noopener noreferrer"
            class="btn">Apple Music
         </a>
         
         <a href="https://music.youtube.com/playlist?list=OLAK5uy_nK16GpIciggppL8FNzzLVqkA2DKCi1JhM&feature=shared" 
            target="_blank" 
            rel="noopener noreferrer"
            class="btn">YouTube Music
         </a>
         
         <a href="https://theokaylakes.bandcamp.com/album/redshift" 
            target="_blank" 
            rel="noopener noreferrer"
            class="btn">Bandcamp
         </a>
      </div>
   </div>
</div>
    
@endsection
