const iconElement = document.querySelector('.movie_detail_trailer .video-container .icon');
const videoContainer = document.querySelector('.movie_detail_trailer .video-container');
const videoElement = videoContainer.querySelector('.movie_detail_trailer video');

iconElement.addEventListener('click', () => {
    iconElement.style.opacity = '0';
    videoElement.play();
});

videoElement.addEventListener('pause', () => {
    videoContainer.style.display = 'block';
    iconElement.style.opacity = '1';
});

const swiper = new Swiper('.movie_detail_trailer .slider-wrapper', {
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