const tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".wp-image-590",
    start: "center bottom",
    end: "center top",
    scrub: true,
    markers: true,
  },
});
tl.to(".box", { yPercent: 350, duration: 1 });
tl.to(".box", { rotation: 360, duration: 3 });
tl.to(".box", { xPercent: 350, duration: 1 });
