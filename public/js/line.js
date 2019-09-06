
anime({
    targets: "#line path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInOutSine",
    duration: 1000,
    // loop: true,
    // direction: "alternate",
    delay: (el, i) => {
      return i * 30;
    }
});