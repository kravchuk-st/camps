// slider
new Swiper(".swiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  slidesPerGroup: 1,
  initialSlide: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  autoplay: {
    delay: 103500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    prevEl: ".swiper__arrow_left",
    nextEl: ".swiper__arrow_right",
  },
  breakpoints: {
    1180: {
      slidesPerView: 2,
    },
  },
});
