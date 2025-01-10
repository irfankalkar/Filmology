<!DOCTYPE html>
<html lang="en">

    
<head>
    {{-- HEAD START --}}

        @include("layouts.head_and_js.head")

    {{-- HEAD END --}}
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

        <main class="container mt-4 mb-5 main_container_outer">
            
            <div class="row main_container_outer_row">
                <div class="col-md-12 main_container_inner">

                        {{-- Koyu Mavi Main Container --}}
                    <div class="row rounded-2 main_container_inner_row">


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





    {{-- JAVASCRIPT FILES START --}}

        @include("layouts.head_and_js.js")

    {{-- JAVASCRIPT FILES END --}}

</body>



</html>