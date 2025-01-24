
@extends("layouts.draft")



{{-- ----------------------------------------------------------------------------- --}}
{{-- NAVBAR --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('navbar')

    {{-- ---- --}}
        @include("layouts.sections.navbar")
    {{-- ---- --}}

@endsection



{{-- ----------------------------------------------------------------------------- --}}
{{-- HOME TRAILER CARDS     and     HOME TRAILER VIDEO --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_1')


    <div class="col-md-12 each_section">
        <div class="row p-0 p-md-2">

            <div class="col-md-12 each_section_design">

                <div class="row">



                    <div class="col-md-4 col-xl-3 p-2">
            
                        <div class="container each_content bg-dark py-2 px-2 py-md-3 px-md-3" style="--br_size:2px;">
                            {{-- py-2 px-2 py-md-3 px-md-4 --}}
            
                            <div class="row">
            
            
                                {{-- ---- --}}
                                    @include("layouts.sections.home_trailer_cards")
                                {{-- ---- --}}
            
            
                            </div>
            
                        </div>
            
                    </div>


            
                    <div class="col-md-8 col-xl-9 p-2 d-flex flex-colum align-items-stretch">
            
                        <div class="container each_content bg-dark px-0 py-2 py-md-3 px-md-1 d-flex flex-colum align-items-stretch justify-content-center" style="--br_size:2px;">
            
                            <div class="row w-100 h-100">
            
            
                                {{-- ---- --}}
                                    @include("layouts.sections.home_trailer_video")
                                {{-- ---- --}}
            
            
                            </div>
            
                        </div>
            
                    </div>




            
                </div>
            
            </div>

        </div>
    </div>

@endsection







{{-- ----------------------------------------------------------------------------- --}}
{{-- HOME ADVERTISEMENT --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_2')

        {{-- En üst açık mavi renkli Container'in görünmez dış kapsayıcısı --}}
    <div class="col-md-12 each_section"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row">

            {{-- ---- --}}
                @include("layouts.sections.advertisement_1")
            {{-- ---- --}}

        </div>
    </div>

@endsection





{{-- ----------------------------------------------------------------------------- --}}
{{-- GUIDE COMMENTS, SLIDER NEW MOVIES and SLIDER MOST RATED --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_3')


    <div class="col-md-12 each_section">
        <div class="row p-0 p-md-2">

            <div class="col-md-12 each_section_design">

                <div class="row">



                    <div class="col-md-3 p-2">
            
                        <div class="container each_content bg-dark mb-3 py-2 px-2 py-md-3 px-md-3" style="--br_size:2px;">
                            <div class="row">
                                {{-- ---- --}}
                                    @include("layouts.sections.coming_soon_guide_comments")
                                {{-- ---- --}}
                            </div>
                        </div>

                    </div>


            
                    <div class="col-md-9 p-2">
            
                        {{-- ---- --}}
                            @include("layouts.sections.cards_and_slider.slider_lists.slider_new_movies")
                        {{-- ---- --}}


                        {{-- ---- --}}
                            @include("layouts.sections.cards_and_slider.slider_lists.slider_the_most_rated")
                        {{-- ---- --}}

                    </div>


            
                </div>
            
            </div>

        </div>
    </div>

@endsection



{{-- ----------------------------------------------------------------------------- --}}
{{-- HOME ADVERTISEMENT --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_4')

        {{-- En üst açık mavi renkli Container'in görünmez dış kapsayıcısı --}}
    <div class="col-md-12 each_section"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row">

            {{-- ---- --}}
                @include("layouts.sections.advertisement_1")
            {{-- ---- --}}

        </div>
    </div>

@endsection




{{-- ----------------------------------------------------------------------------- --}}
{{-- CINE NEWS and NEW MOVIES --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_5')


    <div class="col-md-12 each_section">
        <div class="row p-0 p-md-2">

            <div class="col-md-12 each_section_design">

                <div class="row">



                    <div class="col-md-3 p-2">

                        <div class="container each_content bg-dark py-2 px-2 py-md-3 px-md-3" style="--br_size:2px;">
                            <div class="row">
                                {{-- ---- --}}
                                    @include("layouts.sections.coming_soon_cine_news")
                                {{-- ---- --}}
                            </div>
                        </div>
                        
                    </div>


            
                    <div class="col-md-9 p-2">

                        {{-- ---- --}}
                            @include("layouts.sections.cards_and_slider.slider_lists.slider_our_advice")
                        {{-- ---- --}}
            
                    </div>




            
                </div>
            
            </div>

        </div>
    </div>

@endsection
