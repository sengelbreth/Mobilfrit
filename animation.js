import TweenMax from "gsap/TweenMax";

TweenMax.staggerFrom(
  " .cls-2",
  1,
  {
    ease: Power4.easeOut,
    y: -1500
  },
  0.03
);

console.log("oiii!!");
