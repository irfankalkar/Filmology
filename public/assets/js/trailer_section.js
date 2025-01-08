// const iconElement = document.querySelector('.video-container .icon');
// const videoContainer = document.querySelector('.video-container');
// const caption = document.querySelector('.caption');
// const detay = document.querySelector('.detay');
// const videoElement = videoContainer.querySelector('video');

// iconElement.addEventListener('click', () => {
//     caption.style.opacity = '0';
//     detay.style.opacity = '0';
//     iconElement.style.opacity = '0';
//     videoElement.play();
// });

// videoElement.addEventListener('pause', () => {
//     videoContainer.style.display = 'block';
//     iconElement.style.opacity = '1';
//     caption.style.opacity = '1';
//     detay.style.opacity = '1';
// });



$(document).ready(function () {
    $('.card').each(function () {
        var $card = $(this);
        var $titleText = $card.find('.title_text');

        // Kart hover olduğunda kontrol et
        $card.hover(
            function () {
                // Eğer başlık kapsayıcısından taşarsa kaydır
                if ($titleText[0].scrollWidth > $titleText.width()) {
                    $titleText.marquee({
                        duration: 4000,
                        gap: 100,
                        delayBeforeStart: 0,
                        direction: 'left',
                        duplicated: true,
                        pauseOnHover: false
                    });
                }
            },
            function () {
                // Mouse çekildiğinde kaydırmayı durdur
                $titleText.marquee('destroy');
            }
        );
    });
});