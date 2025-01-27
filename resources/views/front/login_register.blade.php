@extends("layouts.draft")

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

@section('content_1')

    <div class="col-md-4 each_section"> 
        <div class="row p-2">
                @include("layouts.sections.login")
        </div>
    </div>
@endsection

@section('content_2')
    <div class="col-md-8 each_section">
        <div class="row p-2">
                @include("layouts.sections.register")
        </div>
    </div>
@endsection