
@extends("layouts.draft")



{{-- ----------------------------------------------------------------------------- --}}
{{-- LOGIN BOX --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_1')

        {{-- En üst açık mavi renkli Container'in görünmez dış kapsayıcısı --}}
    <div class="col-md-4 each_section"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row p-2">

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

        {{-- En üst açık mavi renkli Container'in görünmez dış kapsayıcısı --}}
    <div class="col-md-8 each_section"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row p-2">

            {{-- ---- --}}
                @include("layouts.sections.register")
            {{-- ---- --}}

        </div>
    </div>

@endsection