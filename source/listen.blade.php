---
title: Listen
description: Listen to "Redshift"
---
@extends('_layouts.main')

@section('body')

    <div class="flex justify-center">
      <iframe class="mx-auto" style="border: 0; width: 350px; height: 786px;" src="https://bandcamp.com/EmbeddedPlayer/album=1797150013/size=large/bgcol=ffffff/linkcol=0687f5/transparent=true/" seamless></iframe>
   </div>
   
   <!-- Buttons container -->
   <div class="flex-1">
      <div class="flex flex-col md:flex-row lg:flex-col gap-4 justify-center items-center h-full">
         <!-- Spotify Link -->
         <a href="https://open.spotify.com/album/7GT5DxaF3ajXzKgt5Z78cA?si=lFTBAoBDTLqkkjvRiN4UjQ" 
            target="_blank" 
            rel="noopener noreferrer"
            class="btn">Spotify
         </a>
         
         <!-- Apple Music Link -->
         <a href="https://music.apple.com/us/album/redshift/1667960311" 
            target="_blank" 
            rel="noopener noreferrer"
            class="btn">Apple Music
         </a>
         
         <!-- YouTube Music Link -->
         <a href="https://music.youtube.com/playlist?list=OLAK5uy_nK16GpIciggppL8FNzzLVqkA2DKCi1JhM&feature=shared" 
            target="_blank" 
            rel="noopener noreferrer"
            class="btn">YouTube Music
         </a>
         
         <!-- Bandcamp Link -->
         <a href="https://theokaylakes.bandcamp.com/album/redshift" 
            target="_blank" 
            rel="noopener noreferrer"
            class="btn">Bandcamp
         </a>
      </div>
   </div>
    
@endsection
