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