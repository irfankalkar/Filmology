<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"> --}}

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}

    <link rel="stylesheet" href="{{asset('assets/jquery-text-marquee-master/dist/jquery.text-marquee.min.css')}}">


    
    <link rel="stylesheet" href="{{asset('assets/css/body.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home_trailer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/advertisement.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>



    {{-- HEADER and NAVBAR START --}}

        <header class="container-fluid">
            @include("layouts.sections.header")
        </header>

            <div class="container-fluid line_btw_header_navbar"></div>

        <nav class="navbar navbar-expand-lg py-0 border_black header_next_navbar_outer">
            @include("layouts.sections.navbar")
        </nav>

    {{-- HEADER and NAVBAR END --}}







    {{-- MAIN START --}}

        <main class="container mt-4 mb-5 main_container_outer border_white">
            
            <div class="row main_container_outer_row border_orange">
                <div class="col-md-12 main_container_inner border_green">

                        {{-- Koyu Mavi Main Container --}}
                    <div class="row rounded-2 main_container_inner_row border_red">


                        @yield('content_1')
                        
                        @yield('content_2')

                        @yield('content_3')

                        @yield('content_4')


                    </div>

                </div>        
            </div>

        </main>

    {{-- MAIN END --}}








    {{-- FOOTER START--}} 

        <div class="container-fluid line_for_footer"></div>

        <footer class="container-fluid">
            @include("layouts.sections.footer")
        </footer>

    {{-- FOOTER END--}}








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


    <script src="{{ asset('assets/jQuery.Marquee-master/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/jQuery.Marquee-master/jquery.marquee.js') }}"></script>

    <script src="{{ asset('assets/js/header.js') }}"></script>
    <script src="{{ asset('assets/js/navbar.js') }}"></script>
    <script src="{{ asset('assets/js/trailer_section.js') }}"></script>
    <script src="{{ asset('assets/js/colorful_borders.js') }}"></script>
</body>
</html>