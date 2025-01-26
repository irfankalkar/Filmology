<?php
                            function convertToEmbedUrl($url)
                             {
                                $pattern = "/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([\w-]+)/";
                                    if (preg_match($pattern, $url, $matches)) {
                                        return "https://www.youtube.com/embed/" . $matches[1];
                                     }
                                     return $url;
                            }
                        ?>
<div class="col-md-12 home_trailer_video">
    <iframe class="rounded-2 w-100 h-100" src="<?php echo e(convertToEmbedUrl($trailer)); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
<?php /**PATH C:\wamp64\www\Filmology\resources\views/layouts/sections/home_trailer_video.blade.php ENDPATH**/ ?>