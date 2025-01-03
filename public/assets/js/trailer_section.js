const iconElement = document.querySelector('.video-container .icon');
const videoContainer = document.querySelector('.video-container');
const caption = document.querySelector('.caption');
const detay = document.querySelector('.detay');
const videoElement = videoContainer.querySelector('video');

iconElement.addEventListener('click', () => {
    caption.style.opacity = '0';
    detay.style.opacity = '0';
    iconElement.style.opacity = '0';
    videoElement.play();
});

videoElement.addEventListener('pause', () => {
    videoContainer.style.display = 'block';
    iconElement.style.opacity = '1';
    caption.style.opacity = '1';
    detay.style.opacity = '1';
});