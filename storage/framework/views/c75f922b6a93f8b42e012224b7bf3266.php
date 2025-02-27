<div class="container each_content movie_details py-3 px-3 bg-dark text-white" style="--mt:14px; --mb:14px; --br_size:2px;">
    <div class="row">
        <div class="col-md-12">
            <div class="row gy-2 gy-sm-3 gx-md-5 gy-md-3 gx-lg-5 gy-lg-3 gy-xl-4 px-2">
                <div class="col-md-12 col-xl-10">
                    <div class="row rounded-2 border border-white h-100 pt-3">
                        <div class="col-md-10 d-flex justify-content-md-start">
                            <h4 class="fw-bold d-none d-md-flex"><?php echo e($movie->Movie_Name); ?></h4>
                            <h6 class="fw-bold d-flex d-md-none"><?php echo e($movie->Movie_Name); ?></h6>
                        </div>
                        <div class="col-md-2 col-sm-12 mb-2 d-flex justify-content-md-end">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="rounded-2 border border-white d-flex justify-content-md-start py-1 px-2 imdb_score">
                                        <ul class="list-inline m-0 d-flex align-items-center">
                                            <li class="list-inline-item me-1"><i class="bi bi-star-fill fs-6"></i></li>
                                            <li class="list-inline-item mx-0"><span class="fw-bold fs-5"><?php echo e($movie->IMDB_Point); ?></span></li>
                                            <li class="list-inline-item mx-1"><span class="fs-6">/</span></li>
                                            <li class="list-inline-item mx-0"><span class="fs-6">10</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-md-start">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="rounded-2 border border-white d-flex flex-column flex-md-row justify-content-md-start px-2 py-2">
                                        <h6 class="fw-bold m-0 original_name_text_itself">Orijinal Adı:</h6>
                                        <h6 class="m-0 d-none d-md-flex">&nbsp;&nbsp;<?php echo e($movie->Movie_Original_Name); ?></h6>
                                        <h6 class="m-0 d-flex d-md-none py-1"><?php echo e($movie->Movie_Original_Name); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2 mt-md-0">
                            <div class="row px-0 py-sm-0 py-md-2">
                                <div class="col-xl-12 col-lg-9 col-md-8 col-sm-7 order-sm-2 d-flex justify-content-sm-end justify-content-md-end align-items-md-center justify-content-lg-end justify-content-xl-end date_duration_category">
                                    <ul class="list-inline d-sm-flex flex-sm-row justify-content-sm-evenly align-items-sm-center mb-0 p-0">
                                        <li class="list-inline-item border border-white me-1 ms-md-2 mb-1 rounded-2"><span class="p-1"><?php echo e($movie->Movie_Release_Year); ?></span></li>                                        
                                        <li class="list-inline-item border border-white me-1 ms-md-2 mb-1 rounded-2"><span class="p-1"><?php echo e($movie->Movie_Duration); ?> dakika</span></li>
                                        <li class="list-inline-item border border-white me-1 ms-md-2 mb-1 rounded-2"><span class="p-1"><?php echo e($movie->Category); ?></span></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-5 col-9 col-12 order-sm-1 p-sm-1 d-xl-none d-flex flex-row justify-content-start justify-content-sm-evenly align-items-sm-center mt-1 mb-2">
                                        <button type="button" class="btn btn-sm score_it_btn d-flex flex-xl-row justify-content-xl-center align-items-xl-center">
                                            <li class="list-inline-item"><span class="">Puanla</span></li>
                                            <li class="list-inline-item"><i class="bi bi-star"></i></li>
                                        </button>
                                        <button type="button" class="btn btn-sm save_it_btn d-flex flex-xl-row justify-content-xl-center align-items-xl-center ms-1">
                                            <li class="list-inline-item"><span class="">Kaydet</span></li>
                                            <li class="list-inline-item"><i class="bi bi-bookmark"></i></li>
                                        </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row rounded-2 border border-white d-none d-xl-flex flex-xl-column justify-content-xl-evenly align-items-xl-center h-100">
                        <div class="col-md-6 p-0 d-flex justify-content-center">
                            <button type="button" class="btn btn-sm score_it_btn px-4 d-flex flex-xl-row justify-content-xl-center align-items-xl-center">
                                <li class="list-inline-item"><span class="">Puanla</span></li>
                                <li class="list-inline-item"><i class="bi bi-star"></i></li>
                            </button>
                        </div>
                        <div class="col-md-6 p-0 d-flex justify-content-center">
                            <button type="button" class="btn btn-sm save_it_btn px-4 d-flex flex-xl-row justify-content-xl-center align-items-xl-center">
                                <li class="list-inline-item"><span class="">Kaydet</span></li>
                                <li class="list-inline-item"><i class="bi bi-bookmark"></i></li>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row rounded-2 border border-white h-100 py-3 py-sm-3 pt-md-3 pb-md-2 pt-lg-3 pt-xl-3 px-xxl-2 pt-xxl-4 cover_and_trailer_field">
                        <div class="d-none d-sm-block col-sm-4 col-md-3 d-flex justify-content-md-start">
                            <img class="rounded-2 w-100" src="<?php echo e(asset('movie_covers/' .$movie->Movie_Cover_URL)); ?>" alt="">
                        </div>
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
                        <div class="col-12 col-sm-8 col-md-9 d-flex justify-content-md-start">
                            <iframe class="rounded-2 w-100" src="<?php echo e(convertToEmbedUrl($movie->Movie_Trailer_URL)); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-12">
                            <p class="pt-3 pt-sm-3 pb-md-2 pt-md-3 pt-lg-3 pb-lg-1 py-xl-2 py-xxl-3 mb-0 movie_summary">
                                <?php echo e($movie->Movie_Story); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 director_field">
                    <div class="row rounded-2 border border-white h-100 pt-3">
                        <div class="col-md-12">
                            <div class="row d-flex flex-column">
                                <div class="col-md-3">
                                    <p><b>Yönetmen:</b></p>
                                </div>
                                <div class="col-md-12">
                                    <ul class="list-inline">
                                        <li class="list-inline-item m-1"><span class="badge rounded-pill text-bg-secondary p-2"><?php echo e($movie->Director); ?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 screen_writer_field">
                    <div class="row rounded-2 border border-white h-100 pt-3">
                        <div class="col-md-12">
                            <div class="row d-flex flex-column">
                                <div class="col-md-3">
                                    <p><b>Yazar:</b></p>
                                </div>
                                <div class="col-md-12">
                                    <ul class="list-inline">
                                        <li class="list-inline-item m-1"><span class="badge rounded-pill text-bg-secondary p-2"><?php echo e($movie->Writer); ?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 actor_actress_field">
                    <div class="row rounded-2 border border-white h-100 pt-3">
                        <div class="col-md-12">
                            <div class="row d-flex flex-column">
                                <div class="col-md-3">
                                    <p><b>Oyuncular:</b></p>
                                </div>
                                <div class="col-md-12">
                                    <ul class="list-inline">
                                        <li class="list-inline-item m-1"><span class="badge rounded-pill text-bg-secondary p-2"><?php echo e($movie->Actor1); ?></span></li>
                                        <li class="list-inline-item m-1"><span class="badge rounded-pill text-bg-secondary p-2"><?php echo e($movie->Actor2); ?></span></li>
                                        <li class="list-inline-item m-1"><span class="badge rounded-pill text-bg-secondary p-2"><?php echo e($movie->Actor3); ?></span></li>
                                        <li class="list-inline-item m-1"><span class="badge rounded-pill text-bg-secondary p-2"><?php echo e($movie->Actor4); ?></span></li>
                                        <li class="list-inline-item m-1"><span class="badge rounded-pill text-bg-secondary p-2"><?php echo e($movie->Actor5); ?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\wamp64\www\Filmology-main\resources\views/layouts/sections/movie_details.blade.php ENDPATH**/ ?>