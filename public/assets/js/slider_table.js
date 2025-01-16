
// ONE SLIDER - FOUR CARDS

  new Swiper('.slider_table_four .slider-wrapper', {
      loop: true,
      grabCursor: true,
      spaceBetween: 30,
    
      // Pagination bullets
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
      },
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    
      // Responsive breakpoints
      breakpoints: {
        0: {
          slidesPerView: 1
        },
        768: {
          slidesPerView: 2
        },
        1024: {
          slidesPerView: 3
        },
        1350: {
          slidesPerView: 4
        }
      }
    });








// ONE SLIDER - THREE CARDS

new Swiper('.slider_table_three .slider-wrapper', {
  loop: true,
  grabCursor: true,
  spaceBetween: 30,

  // Pagination bullets
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // Responsive breakpoints
  breakpoints: {
    0: {
      slidesPerView: 1
    },
    768: {
      slidesPerView: 2
    },
    1024: {
      slidesPerView: 3
    }
  }
});