<?php for($i = 0; $i < 24; $i++): ?>

    <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-2">
        <div class="card imgCard">
            <div class="row">

                <div class="col-md-12">

                    <div class="card_container">

                        <div class="col-md-12">
                            <img src="<?php echo e(asset('image/movie_covers/3.jpg')); ?>"
                            class="border_orange" alt="...">
                        </div>

                        <div class="row d-flex flex-wrap justify-content-between info-field bg-dark mx-0 mt-1 p-1">

                            <div class="col-12 order-0 order-xl-0 px-1 fw-bold movie_name_field">
                                <span class="card-title">FİLM ADI</span>
                            </div>

                            <div class="col-xxl-8 col-xl-7 order-1 order-xl-1 px-1 category_field d-flex align-items-center">
                                <span class="card-text"> Aksiyon </span>
                            </div>

                            <div class="col-xxl-4 col-xl-5 col-6 order-3 order-xl-2 px-1 rating_field">
                                <ul class="list-inline mb-0 d-flex justify-content-end">
                                    <li class="list-inline-item w-75 d-flex justify-content-between align-items-center">
                                        <i class="bi bi-star-fill"></i>
                                        <span class="fw-bold">7,4</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-xxl-6 col-xl-4 col-6 order-2 order-xl-3 px-1 year_field d-flex align-items-center">
                                <span class="year">2025</span>
                            </div>

                            <div class="col-xxl-3 col-xl-4 col-5 order-4 order-xl-4 px-1 comment_field">
                                <ul class="list-inline mb-0 d-flex justify-content-xl-end justify-content-lg-start">
                                    <li class="list-inline-item w-75 d-flex justify-content-between align-items-center">
                                        <i class="bi bi-chat-right-fill"></i>
                                        <span>0</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-xxl-3 col-xl-4 col-5 order-5 order-xl-5 px-1 view_field">
                                <ul class="list-inline mb-0 d-flex justify-content-end">
                                    <li class="list-inline-item w-75 d-flex justify-content-between align-items-center">
                                        <i class="bi bi-eye-fill eye_icon"></i>
                                        <span>4</span>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

<?php endfor; ?><?php /**PATH C:\wamp64\www\Filmology\resources\views/layouts/sections/cards/all_movies_cards.blade.php ENDPATH**/ ?>