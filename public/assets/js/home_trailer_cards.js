$(document).ready(function () {

    var $each_trailer_card = $('.home_trailer_cards_for_other_movies .each_trailer_card');


    $each_trailer_card.each(function () {
        var $each_trailer_card = $(this);

        var $trailer_card_summary = $each_trailer_card.find('.trailer_card_summary');

        $each_trailer_card.hover(
            function () {

                if ($trailer_card_summary[0].scrollHeight > $trailer_card_summary.height()) {
                    $trailer_card_summary.marquee({
                        duration: 5000,
                        gap: 0, 
                        delayBeforeStart: 0,
                        direction: 'up',
                        duplicated: false,
                        startVisible: true,
                        pauseOnHover: false
                    });
                }

            },

            function () {
                $trailer_card_summary.marquee('destroy');
                
            }
        );
        
    });

});