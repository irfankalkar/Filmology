<div class="container each_content px-3 pt-2 mt-3 mb-3 pt-md-0 bg-dark text-white" style="--br_size:2px;">
    <div class="row slider_table slider_table_four">
        <div class="col-md-12 p-0 p-lg-2">
            <div class="container swiper each_content bg-dark py-0 py-lg-2" style="--br_size:0px;">
                <div class="slider-wrapper">
                    <h4 class="special_title mt-0 mb-2">
                        <span class="half_background_second_blue fs-5 fs-sm-4">
                            &nbsp;Bunları da beğenebilirsiniz&nbsp;
                        </span>
                    </h4>
                    <div class="card-list swiper-wrapper">
                    <?php $__currentLoopData = $mightLike; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lMovie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card-item swiper-slide movie_each_card" style="border: solid 2px rgb(112, 181, 223); border-radius: 5px;" title="<?php echo e($lMovie->Movie_Name); ?>">
                                <div class="col-md-12 image_field">
                                    <img src="<?php echo e(asset('movie_covers/' .$lMovie->Movie_Cover_URL)); ?>" alt="User Image"/>
                                    <div class="overlay px-3 pt-3 movie_summary">
                                        <a href="<?php echo e(route("movie_details", $lMovie->Movie_ID)); ?>" style="text-decoration: none; color: inherit;">
                                            <p>
                                            <?php echo e($lMovie->Movie_Story); ?>

                                            </p>
                                        </a>
                                    </div>
                                    <div class="row d-flex flex-wrap justify-content-between movie_card_info_field mx-0 p-1">
                                        <div class="col-12 order-0 order-xl-0 px-1 movie_name_field">
                                            <a href="<?php echo e(route("movie_details", $lMovie->Movie_ID)); ?>" style="text-decoration: none; color: inherit;">
                                                <span class="fw-bold pt-3"><?php echo e($lMovie->Movie_Name); ?></span>
                                            </a>
                                        </div>
                                        <div class="col-xxl-8 col-xl-7 order-1 order-xl-1 px-1 category_field d-flex align-items-center">
                                            <a> <span class="card-text"> <?php echo e($lMovie->Category); ?> </span> </a>
                                        </div>
                                        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 order-xl-2 order-3 px-1 rating_field">
                                            <ul class="list-inline mb-0 d-flex justify-content-end">
                                                <li class="list-inline-item w-75 d-flex justify-content-between justify-content-sm-end align-items-center">
                                                    <i class="bi bi-star-fill me-sm-1 "></i>
                                                    <span class=""><?php echo e($lMovie->IMDB_Point); ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-7 col-sm-7 col-7 order-xl-3 order-2 px-1 year_field d-flex align-items-center">
                                             <span class="year"><?php echo e($lMovie->Movie_Release_Year); ?></span>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4 order-4 order-xl-4 px-1 comment_field">
                                            <ul class="list-inline mb-0 d-flex justify-content-xl-end justify-content-lg-start">
                                                <li class="list-inline-item w-75 d-flex justify-content-between justify-content-sm-start align-items-center">
                                                    <i class="bi bi-chat-right-fill me-sm-1 "></i>
                                                    <span class=""><?php echo e($lMovie->Comment_Count); ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4 order-5 order-xl-5 px-1 view_field">
                                            <ul class="list-inline mb-0 d-flex justify-content-end">
                                                <li class="list-inline-item w-75 d-flex justify-content-between justify-content-sm-end align-items-center">
                                                    <i class="bi bi-eye-fill eye_icon ms-xs-auto me-sm-1 "></i>
                                                    <span class=""><?php echo e($lMovie->View_Count); ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="swiper-pagination mb-2"></div>
                    <div class="swiper-slide-button swiper-button-prev"></div>
                    <div class="swiper-slide-button swiper-button-next"></div>    
                </div>   
            </div>          
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\Filmology-main\resources\views/layouts/sections/cards_and_slider/slider_you_might_like.blade.php ENDPATH**/ ?>