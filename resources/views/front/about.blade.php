
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
{{-- HOME TRAILER CARDS --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_1')

        {{-- En üst açık mavi renkli Container'in görünmez dış kapsayıcısı --}}
    <div class="col-md-5 each_section"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row p-2">

            {{-- ---- --}}
                @include("layouts.sections.home_trailer_cards")
            {{-- ---- --}}

        </div>
    </div>

@endsection



{{-- ----------------------------------------------------------------------------- --}}
{{-- HOME TRAILER VIDEO --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_2')

        {{-- En üst açık mavi renkli Container'in görünmez dış kapsayıcısı --}}
    <div class="col-md-7 each_section"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row p-2">

            {{-- ---- --}}
                @include("layouts.sections.home_trailer_video")
            {{-- ---- --}}

        </div>
    </div>

@endsection



{{-- ----------------------------------------------------------------------------- --}}
{{-- HOME ADVERTISEMENT --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_3')

        {{-- En üst açık mavi renkli Container'in görünmez dış kapsayıcısı --}}
    <div class="col-md-12 each_section"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row p-2">

            {{-- ---- --}}
                @include("layouts.sections.advertisement_1")
            {{-- ---- --}}

        </div>
    </div>

@endsection



{{-- ----------------------------------------------------------------------------- --}}
{{-- ALL MOVIES --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_4')

    <div class="col-md-9 each_section">
        <div class="row p-2">


                @include("layouts.sections.cards_and_slider.slider_lists.slider_new_movies")


        </div>
    </div>

@endsection