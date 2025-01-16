$(document).ready(function () {
    $('.movie_each_card').each(function () {
        var $movie_each_card = $(this);
        var $movie_summary = $movie_each_card.find('.movie_summary');

        $movie_each_card.hover(
            function () {

                if ($movie_summary[0].scrollHeight > $movie_summary.height()) {
                    $movie_summary.marquee({
                        duration: 20000,
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
                $movie_summary.marquee('destroy');
            }
        );
    });
});