<div class="container swiper each_content slider_table slider_table_three bg-dark py-2" style="--mt:14px; --mb:14px; --br_size:2px;">

        <div class="slider-wrapper">


            <h4 class="special_title py-2">
                <span class="half_background_second_blue fs-5 fs-sm-4">
                    &nbsp;En çok puan alanlar&nbsp;
                </span>
            </h4>
            
            
            <div class="card-list swiper-wrapper">
            
                <?php for($i = 0; $i < 6; $i++): ?>
            
                    <div class="card-item swiper-slide movie_each_card" style="border: solid 2px rgb(112, 181, 223); border-radius: 5px;" title="Bir Garip Yazılımcının Hayat Hikayesi">
            
                        <div class="col-md-12 image_field">

            
                            <img src="<?php echo e(asset('assets/image/movie_covers/4.jpg')); ?>" alt="User Image"/>

            
                            <div class="overlay px-3 pt-3 movie_summary">
            
                                <a href="https:www.google.com" style="text-decoration: none; color: inherit;">
                                    <p>
                                        Adelaide ve Gabe Wilson birbirlerini ve ailelerini seven, huzurlu ve mutlu bir çifttir. Yorucu geçen bir yılın ardından çift iki çocuklarını da alıp Kuzey Kaliforniya'da sahil kenarında bulunan evlerine giderler. Tyler ailesi ile sahilde geçirdikleri bir günün ardından, geçmişte bir çeşit travma atlatmış olan Adelaide ailesinin başına bir şey gelebileceği konusunda paranoyaklaşmaya başlar. Gece çöktüğünde Wilson ailesinin, yolda el ele tutuşmuş dört kişiyi görmesinin ardından her şey daha paranoyak bir hal alacaktır. Evlerine yapılan saldırıyı savuşturamayan ailenin yaşayacağı en büyük dehşet ise evlerine giren bu dört kişinin aslında kendilerinin birebir kopyaları olmasıdır. Birbirinin klonu gibi olan iki ailenin arasındaki en önemli fark ise içlerinden yalnızca birinin hayatta kalabileceğidir.
                                    </p>
                                </a>
            
                            </div>


                            <div class="row d-flex flex-wrap justify-content-between movie_card_info_field mx-0 p-1">

                                <div class="col-12 order-0 order-xl-0 px-1 movie_name_field">
                                    <a href="https:www.google.com" style="text-decoration: none; color: inherit;">
                                        <span class="fw-bold pt-3">Bir Garip Yazılımcının Hayat Hikayesi</span>
                                    </a>
                                </div>
                    
                                <div class="col-xxl-8 col-xl-7 order-1 order-xl-1 px-1 category_field d-flex align-items-center">
                                    <a href=""> <span class="card-text"> Aksiyon </span> </a>
                                </div>
                    
                                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 order-xl-2 order-3 px-1 rating_field">
                                    <ul class="list-inline mb-0 d-flex justify-content-end">
                                        <li class="list-inline-item w-75 d-flex justify-content-between justify-content-sm-end align-items-center">
                                            <i class="bi bi-star-fill me-sm-1 "></i>
                                            <span class="">7,4</span>
                                        </li>
                                    </ul>
                                </div>
                    
                                <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-7 col-sm-7 col-7 order-xl-3 order-2 px-1 year_field d-flex align-items-center">
                                    <a href=""> <span class="year">2025</span> </a>
                                </div>
                    
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4 order-4 order-xl-4 px-1 comment_field">
                                    <ul class="list-inline mb-0 d-flex justify-content-xl-end justify-content-lg-start">
                                        <li class="list-inline-item w-75 d-flex justify-content-between justify-content-sm-start align-items-center">
                                            <i class="bi bi-chat-right-fill me-sm-1 "></i>
                                            <span class="">0</span>
                                        </li>
                                    </ul>
                                </div>
                    
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4 order-5 order-xl-5 px-1 view_field">
                                    <ul class="list-inline mb-0 d-flex justify-content-end">
                                        <li class="list-inline-item w-75 d-flex justify-content-between justify-content-sm-end align-items-center">
                                            <i class="bi bi-eye-fill eye_icon ms-xs-auto me-sm-1 "></i>
                                            <span class="">4</span>
                                        </li>
                                    </ul>
                                </div>
                    
                            </div>

            
                        </div>
            
            
                    </div>
            
                <?php endfor; ?>
            
            </div>
            
            
            <div class="swiper-pagination mb-2"></div>
            <div class="swiper-slide-button swiper-button-prev"></div>
            <div class="swiper-slide-button swiper-button-next"></div>


        </div>

</div><?php /**PATH C:\wamp64\www\Filmology\resources\views/layouts/sections/cards_and_slider/slider_lists/slider_the_most_rated.blade.php ENDPATH**/ ?>