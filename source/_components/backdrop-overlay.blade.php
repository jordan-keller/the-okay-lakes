<div class="bg-black/40 backdrop-blur-sm flex-1 flex flex-col p-0 py-6" style="background: 
  /* TOP and BOTTOM feathering */
  linear-gradient(to bottom, 
    rgba(0, 0, 0, 0) 0%,           /* TOP: transparent at top */
    rgba(0, 0, 0, 0.3) 15px,       /* TOP: opaque after 15px */
    rgba(0, 0, 0, 0.3) calc(100% - 10px),  /* BOTTOM: opaque until 10px from bottom */
    rgba(0, 0, 0, 0) 100%           /* BOTTOM: transparent at bottom */
  ),
  /* LEFT and RIGHT feathering */
  linear-gradient(to right, 
    rgba(0, 0, 0, 0) 0%,           /* LEFT: transparent at left */
    rgba(0, 0, 0, 0.3) 15px,       /* LEFT: opaque after 15px */
    rgba(0, 0, 0, 0.3) calc(100% - 10px),  /* RIGHT: opaque until 10px from right */
    rgba(0, 0, 0, 0) 100%           /* RIGHT: transparent at right */
  );">
    {{ $slot }}
</div>