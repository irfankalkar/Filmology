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



// $(document).ready(function () {
//     $('.card').hover(function () {
//         // Kartın içindeki yazı ve kutuyu seçelim
//         var $title = $(this).find('#title_width');
//         var containerWidth = $title.parent().width(); // Kutunun genişliği
//         var textWidth = $title[0].scrollWidth; // Yazının gerçek genişliği

//         // Eğer yazı kutuyu taşıyorsa, animasyonu başlat
//         if (textWidth > containerWidth) {
//             $title.textMarquee({
//                 mode: 'bounce'
//             });
//         } else {
//             // Eğer yazı taşmıyorsa, animasyonu durdur
//             $title.textMarquee('stop');
//         }
//     }, function () {
//         // Mouse karttan ayrıldığında animasyonu durdur
//         var $title = $(this).find('#title_width');
//         $title.textMarquee('stop');
//     });
// });





// $(document).ready(function () {
//     $('.title_text').marquee({
//         duration: 5000,
//         gap: 70,
//         delayBeforeStart: 0,
//         direction: 'left',
//         duplicated: true,
//         pauseOnHover: true
//     });
// });



// $(document).ready(function () {
//     $('.title_text').each(function () {
//         var $this = $(this);
//         if ($this[0].scrollWidth > $this.innerWidth()) {
//             $this.hover(
//                 function () {
//                     $(this).addClass('marquee');
//                 },
//                 function () {
//                     $(this).removeClass('marquee');
//                 }
//             );
//         }
//     });
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











// $(document).ready(function(){

//     $('#title_width').textMarquee({
//         mode: 'loop'
//         mode: 'bounce'
//     });
// });