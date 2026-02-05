import Alpine from "alpinejs";
import Fuse from "fuse.js";

window.Fuse = Fuse;
window.Alpine = Alpine;

Alpine.start();

const progressBar = document.getElementById("progress-bar");

if (progressBar) {
  progressBar.style.position = "fixed";
  progressBar.style.bottom = "0";
  progressBar.style.left = "0";
  progressBar.style.height = "2px";
  progressBar.style.zIndex = "9999";
  progressBar.style.pointerEvents = "none";
  progressBar.style.mixBlendMode = "screen";

  window.addEventListener("scroll", () => {
    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;
    const scrollTop = window.scrollY;

    const scrollableHeight = documentHeight - windowHeight;
    const scrollPercent = (scrollTop / scrollableHeight) * 100;

    let opacity = 0.8;
    let featherWidth = 10;

    if (scrollPercent >= 90) {
      const finalPercent = (scrollPercent - 90) / 10;
      featherWidth = 10 * (1 - finalPercent);
      opacity = 0.8 + 0.2 * finalPercent;
    }

    const featherStart = Math.max(0, 100 - featherWidth);
    const featherMid = (100 + featherStart) / 2;

    progressBar.style.background = `linear-gradient(to right, 
      rgba(255, 255, 255, ${opacity}) 0%, 
      rgba(255, 255, 255, ${opacity}) ${featherStart}%, 
      rgba(255, 255, 255, ${opacity * 0.5}) ${featherMid}%, 
      rgba(255, 255, 255, 0) 100%)`;
    progressBar.style.width = scrollPercent + "%";
  });
}
