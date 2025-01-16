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
    $('.three_cards').each(function () {
        var $three_cards = $(this);
        var $title_text_for_three_cards = $three_cards.find('.title_text');

        $three_cards.hover(
            function () {
                // Metni kutunun solundan başlatmak için hemen göster
                // $title_text_for_three_cards.css({
                //     'overflow': 'hidden',
                //     'white-space': 'nowrap',
                //     'transform': 'translateX(0)' // Sol kenardan başlat
                // });

                if ($title_text_for_three_cards[0].scrollWidth > $title_text_for_three_cards.width()) {
                    $title_text_for_three_cards.marquee({
                        duration: 4000,
                        gap: 0, 
                        delayBeforeStart: 0,
                        direction: 'left',
                        duplicated: false,
                        startVisible: true,
                        pauseOnHover: false
                    });
                }
            },
            function () {
                $title_text_for_three_cards.marquee('destroy');
                // Animasyon bitince metni eski haline getir
                // $title_text_for_three_cards.css({
                //     'transform': 'translateX(0)'
                // });
            }
        );
    });
});





// $(document).ready(function () {
//     $('.card').each(function () {
//         var $three_cards = $(this);
//         var $titleText = $three_cards.find('.title_text');

//         // Kart hover olduğunda kontrol et
//         $three_cards.hover(
//             function () {
//                 // Eğer başlık kapsayıcısından taşarsa kaydır
//                 if ($titleText[0].scrollWidth > $titleText.width()) {
//                     $titleText.marquee({
//                         duration: 4000,
//                         gap: 100,
//                         delayBeforeStart: 0,
//                         direction: 'left',
//                         duplicated: true,
//                         pauseOnHover: false
//                     });
//                 }
//             },
//             function () {
//                 // Mouse çekildiğinde kaydırmayı durdur
//                 $titleText.marquee('destroy');
//             }
//         );
//     });
// });
