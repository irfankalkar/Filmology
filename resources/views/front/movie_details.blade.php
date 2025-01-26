@extends("layouts.draft")

@if (session('success'))
    <script>
        window.onload = function() {
            Swal.fire({
                icon: 'success',
                title: 'Başarılı!',
                text: '{{ session('success') }}'
            });
        };
    </script>
@endif

@if (session('error'))
    <script>
        window.onload = function() {
            Swal.fire({
                icon: 'error',
                title: 'Hata!',
                text: '{{ session('error') }}'
            });
        };
    </script>
@endif
{{-- ----------------------------------------------------------------------------- --}}
{{-- MOVİE DETAİL TRAILER,SLİDER AND COMMENT BOX --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_1')

        {{-- En üst açık mavi renkli Container'in görünmez dış kapsayıcısı --}}
    <div class="col-md-12 each_section"> {{-- MAIN İÇİNDE HER BİR SECTİON'UN GRID YAPISININ BELİRLENECEĞİ ALAN --}}
        <div class="row p-0 p-md-2">
            <div class="col-md-12 px-2 py-2 px-lg-3 py-lg-3 each_section_design">

            {{-- ---- --}}
                @include("layouts.sections.movie_details")
                @include("layouts.sections.cards_and_slider.slider_you_might_like")
                @include("layouts.sections.comments")
            {{-- ---- --}}

            </div>
        </div>
    </div>

@endsection