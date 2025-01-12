
<h4 class="special_title">
    <span class="half_background">
        &nbsp;Tüm Filmler&nbsp;
    </span>
</h4>

{{-- <h4 class="text-light"> Tüm Filmler </h4> --}}

@for ($i = 0; $i < 24; $i++)

    <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-3">

        <div class="row">

            <div class="col-md-12">

                <div class="card_container">

                    <div class="col-md-12 image_field">

                        <img src="{{asset('assets/image/movie_covers/2.jpg')}}" class="" alt="...">

                        <div class="overlay px-3 pt-3">

                            <a href="https:www.google.com" style="text-decoration: none; color: inherit;">
                                <p>
                                    Adelaide ve Gabe Wilson birbirlerini ve ailelerini seven, huzurlu ve mutlu bir çifttir. Yorucu geçen bir yılın ardından çift iki çocuklarını da alıp Kuzey Kaliforniya'da sahil kenarında bulunan evlerine giderler. Tyler ailesi ile sahilde geçirdikleri bir günün ardından, geçmişte bir çeşit travma atlatmış olan Adelaide ailesinin başına bir şey gelebileceği konusunda paranoyaklaşmaya başlar. Gece çöktüğünde Wilson ailesinin, yolda el ele tutuşmuş dört kişiyi görmesinin ardından her şey daha paranoyak bir hal alacaktır. Evlerine yapılan saldırıyı savuşturamayan ailenin yaşayacağı en büyük dehşet ise evlerine giren bu dört kişinin aslında kendilerinin birebir kopyaları olmasıdır. Birbirinin klonu gibi olan iki ailenin arasındaki en önemli fark ise içlerinden yalnızca birinin hayatta kalabileceğidir.
                                </p>
                            </a>

                        </div>

                    </div>

                    <div class="row d-flex flex-wrap justify-content-between info-field mx-0 p-1">

                        <div class="col-12 order-0 order-xl-0 px-1 fw-bold movie_name_field">
                            <a href="https:www.google.com" style="text-decoration: none; color: inherit;">
                                <span class="card-title">FİLM ADI</span>
                            </a>
                        </div>

                        <div class="col-xxl-8 col-xl-7 order-1 order-xl-1 px-1 category_field d-flex align-items-center">
                            <span class="card-text"> Aksiyon </span>
                        </div>

                        <div class="col-xxl-4 col-xl-5 col-md-8 col-sm-5 col-3 order-xl-2 order-3 px-1 rating_field">
                            <ul class="list-inline mb-0 d-flex justify-content-end">
                                <li class="list-inline-item w-75 d-flex justify-content-between align-items-center">
                                    <i class="bi bi-star-fill"></i>
                                    <span class="fw-bold">7,4</span>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xxl-6 col-xl-4 col-md-4 col-sm-7 col-9 order-xl-3 order-2 px-1 year_field d-flex align-items-center">
                            <span class="year">2025</span>
                        </div>

                        <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-4 col-3 order-4 order-xl-4 px-1 comment_field">
                            <ul class="list-inline mb-0 d-flex justify-content-xl-end justify-content-lg-start">
                                <li class="list-inline-item w-75 d-flex justify-content-between align-items-center">
                                    <i class="bi bi-chat-right-fill"></i>
                                    <span class="">0</span>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-4 col-3 order-5 order-xl-5 px-1 view_field">
                            <ul class="list-inline mb-0 d-flex justify-content-end">
                                <li class="list-inline-item w-75 d-flex justify-content-between align-items-center">
                                    <i class="bi bi-eye-fill eye_icon ms-xs-auto"></i>
                                    <span class="">4</span>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endfor