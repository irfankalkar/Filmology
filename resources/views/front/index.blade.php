
@extends("layouts.draft")



{{-- ----------------------------------------------------------------------------- --}}
{{-- HOME TRAILER CARDS --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_1')

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

    <div class="col-md-12 each_section"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row p-2">

            {{-- ---- --}}
                @include("layouts.sections.advertisement_1")
            {{-- ---- --}}

        </div>
    </div>

@endsection