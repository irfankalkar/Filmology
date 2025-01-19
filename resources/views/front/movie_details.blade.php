@extends("layouts.draft")

{{-- ----------------------------------------------------------------------------- --}}
{{-- MOVİE DETAİL TRAILER,SLİDER AND COMMENT BOX --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_1')

        {{-- En üst açık mavi renkli Container'in görünmez dış kapsayıcısı --}}
    <div class="col-md-12 each_section"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row p-2">
            <div class="col-md-12 each_section_design">

            {{-- ---- --}}
                @include("layouts.sections.movie_details")
                @include("layouts.sections.cards_and_slider.slider_you_might_like")
                @include("layouts.sections.comments")
            {{-- ---- --}}

            </div>
        </div>
    </div>

@endsection