<div class="col-md-12 each_section_design all_movies">

    <div class="row">

        <div class="col-md-9 each-content" style="--mt:14px; --mb:14px; --br_size:2px;">

            <div class="row">

                <div class="col-md-12 px-4 py-3">

                    <div class="row bg-dark rounded border border-white border-2 py-3 px-3">

                        {{-- ---- --}}
                            @include("layouts.sections.cards.cards_for_all_movies")
                        {{-- ---- --}}

                        <div class="col-12 pt-3 pb-2">

                            {{-- ---- --}}
                                @include("layouts.sections.pagination")
                            {{-- ---- --}}

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>











{{-- <div class="col-md-3 each-content" style="--mt:14px; --mb:14px; --br_size:2px;">

    <div class="row">

        <h2 style="background-color:black; color:white; border-radius:5px;">Rehber Yorumlar </h2>

        <div class="card" style="max-width: 540px; background-color: black; color: white;">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="row g-0">
                        <h5 style="margin-left: 8px;">Bee Animations</h5>
                        <div class="col-md-3" style="border: 3px solid white; margin: 0 10px 8px 8px;">
                            <img src="{{asset('image/movie_detail_img/ari_resim_kucuk.jpg')}}"
                                style="margin:5px 0; padding: 5px;" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8" style="border: 3px solid white; margin: 0 0 8px 0;">
                            <div class="card-body">
                                <h6 class="card-title">ali_veli_07</h6>
                                <p class="card-text" style="font-size: 13px;">Lorem ipsum dolor sit, ame non
                                    molestias lorem lorem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div> --}}




{{-- <div class="col-md-12 justify-content-md-center d-flex">
    <div class="row">
        <div class="col-md-4 pagee justify-content-md-center d-flex">
            <button class="page">Önceki</button>
        </div>
        <div class="col-md-1 pagee"><button class="button">1</button></div>
        <div class="col-md-1 pagee"><button class="button">2</button></div>
        <div class="col-md-1 pagee"><button class="button">3</button></div>
        <div class="col-md-1 pagee"><button class="button">4</button></div>
        <div class="col-md-4 pagee justify-content-md-start d-flex">
            <button class="page">Sonraki</button>
        </div>
    </div>
</div> --}}
