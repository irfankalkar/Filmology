<h4 id="Movies"class="special_title">
    <span class="half_background_first_blue">
        &nbsp;Filmler&nbsp;
    </span>
</h4>
<?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 px-2 py-2 px-md-2 py-md-2 movie_each_card" title="<?php echo e($movie->Movie_Name); ?>">
        <div class="row">
            <div class="col-md-12">
                <div class="card_container" style="border: solid 2px rgb(112, 181, 223); border-radius: 5px;">
                    <div class="col-md-12 image_field" >
                    <img  src="<?php echo e(asset('movie_covers/' .$movie->Movie_Cover_URL)); ?>" class="" alt="...">
                        <div class="overlay px-3 pt-3 movie_summary">
                            <a class="" href="<?php echo e(route("movie_details", $movie->Movie_ID)); ?>" style="text-decoration: none; color: inherit;">
                                <p>
                                    <?php echo e($movie->Movie_Story); ?>

                                </p>
                            </a>
                        </div>
                        <div class="row d-flex flex-wrap justify-content-between movie_card_info_field mx-0 p-1">
                            <div class="col-12 order-0 order-xl-0 px-1 movie_name_field">
                                <a href="<?php echo e(route("movie_details", $movie->Movie_ID)); ?>" style="text-decoration: none; color: inherit;">
                                    <span class="fw-bold pt-3"><?php echo e($movie->Movie_Name); ?></span>
                                </a>
                            </div>
                            <div class="col-xxl-8 col-xl-7 order-1 order-xl-1 px-1 category_field d-flex align-items-center">
                                <span class="card-text"> <?php echo e($movie->Category); ?> </span>
                            </div>
                            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 order-xl-2 order-3 px-1 rating_field">
                                <ul class="list-inline mb-0 d-flex justify-content-end">
                                    <li class="list-inline-item w-75 d-flex justify-content-between justify-content-sm-end align-items-center">
                                        <i class="bi bi-star-fill me-sm-1 "></i>
                                        <span class=""><?php echo e($movie->IMDB_Point); ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-7 col-sm-7 col-7 order-xl-3 order-2 px-1 year_field d-flex align-items-center">
                                 <span class="year"><?php echo e($movie->Movie_Release_Year); ?></span>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4 order-4 order-xl-4 px-1 comment_field">
                                <ul class="list-inline mb-0 d-flex justify-content-xl-end justify-content-lg-start">
                                    <li class="list-inline-item w-75 d-flex justify-content-between justify-content-sm-start align-items-center">
                                        <i class="bi bi-chat-right-fill me-sm-1 "></i>
                                        <span class=""><?php echo e($movie->Comment_Count); ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4 order-5 order-xl-5 px-1 view_field">
                                <ul class="list-inline mb-0 d-flex justify-content-end">
                                    <li class="list-inline-item w-75 d-flex justify-content-between justify-content-sm-end align-items-center">
                                        <i class="bi bi-eye-fill eye_icon ms-xs-auto me-sm-1 "></i>
                                        <span class=""><?php echo e($movie->View_Count); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="pagination_container">
    <div class="pagination p1">
        <ul>
            <?php if($movies->onFirstPage()): ?>
                <a href="#" class="disabled"><li><</li></a>
            <?php else: ?>
                <a href="<?php echo e($movies->previousPageUrl()); ?>"><li><</li></a>
            <?php endif; ?>
            <?php $__currentLoopData = $movies->getUrlRange(1, $movies->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($page == $movies->currentPage()): ?>
                    <a class="is-active" href="#"><li><?php echo e($page); ?></li></a>
                <?php else: ?>
                    <a href="<?php echo e($url); ?>"><li><?php echo e($page); ?></li></a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if($movies->hasMorePages()): ?>
                <a href="<?php echo e($movies->nextPageUrl()); ?>"><li>></li></a>
            <?php else: ?>
                <a href="#" class="disabled"><li>></li></a>
            <?php endif; ?>
        </ul>
    </div>
</div><?php /**PATH C:\wamp64\www\Filmology-main\resources\views/layouts/sections/cards_and_slider/content_movie_table.blade.php ENDPATH**/ ?>