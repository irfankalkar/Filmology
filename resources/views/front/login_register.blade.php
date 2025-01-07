
@extends("layouts.draft")



{{-- ----------------------------------------------------------------------------- --}}
{{-- LOGIN BOX --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_1')

    <div class="col-md-4 each_section border_orange"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row p-2 border_green">

            {{-- ---- --}}
                @include("layouts.sections.login")
            {{-- ---- --}}

        </div>
    </div>

@endsection




{{-- ----------------------------------------------------------------------------- --}}
{{-- REGISTER BOX --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_2')

    <div class="col-md-8 each_section border_orange"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row p-2 border_green">

            {{-- ---- --}}
                @include("layouts.sections.advertisement_1")
            {{-- ---- --}}

        </div>
    </div>

@endsection





{{-- ----------------------------------------------------------------------------- --}}
{{-- REGISTER BOX --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_3')

    <div class="col-md-12 each_section border_orange"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row p-2 border_green">

            {{-- ---- --}}
                @include("layouts.sections.home_trailer_video")
            {{-- ---- --}}

        </div>
    </div>

@endsection