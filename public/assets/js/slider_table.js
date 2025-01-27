      new Swiper('.slider_table_four .slider-wrapper', {
      loop: true,
      grabCursor: true,
      spaceBetween: 30,
    
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
      },
    
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    
      breakpoints: {
        0: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        400: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        430: {
          slidesPerView: 2,
          spaceBetween: 15
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 20
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 25
        },
        1024: {
          slidesPerView: 4
        }
      }
    });

new Swiper('.slider_table_three .slider-wrapper', {
  loop: true,
  grabCursor: true,
  spaceBetween: 30,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    0: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    400: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    430: {
      slidesPerView: 2,
      spaceBetween: 15
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 25
    },
    1024: {
      slidesPerView: 3
    }
  }
});