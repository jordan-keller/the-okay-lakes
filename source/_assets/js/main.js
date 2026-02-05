import Alpine from "alpinejs";
import Fuse from "fuse.js";

window.Fuse = Fuse;
window.Alpine = Alpine;

Alpine.start();

const progressBar = document.getElementById("progress-bar");

if (progressBar) {
  const gradientStartOpacity = 1;
  const gradientStartStop = "60%";
  const featherWidth = 10; // Width of blend zone in %

  // Set fixed positioning styles
  progressBar.style.position = "fixed";
  progressBar.style.bottom = "0";
  progressBar.style.left = "0";
  progressBar.style.height = "4px";
  progressBar.style.zIndex = "9999";
  progressBar.style.pointerEvents = "none";
  progressBar.style.mixBlendMode = "screen";

  window.addEventListener("scroll", () => {
    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;
    const scrollTop = window.scrollY;

    const scrollableHeight = documentHeight - windowHeight;
    const scrollPercent = (scrollTop / scrollableHeight) * 100;

    const gradientEndStop = Math.max(0, 100 - scrollPercent);
    const gradientEndOpacity = scrollPercent / 100;

    // Create feathering stops
    const featherStart = Math.max(0, gradientEndStop - featherWidth);
    const featherMid = (gradientEndStop + featherStart) / 1;
    const midOpacity = gradientEndOpacity * 0.5;

    progressBar.style.background = `linear-gradient(to right, 
      rgba(255, 255, 255, ${gradientStartOpacity}) ${gradientStartStop}, 
      rgba(255, 255, 255, ${gradientStartOpacity}) ${featherStart}%, 
      rgba(255, 255, 255, ${midOpacity}) ${featherMid}%, 
      rgba(255, 255, 255, ${gradientEndOpacity}) ${gradientEndStop}%)`;
    progressBar.style.width = scrollPercent + "%";
  });
}
