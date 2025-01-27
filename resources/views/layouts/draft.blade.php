<!DOCTYPE html>
<html lang="en">   
<head>
 @include("layouts.head_and_js.head")
</head>
<body>
    <div class="background_image"></div>
        <header class="container-fluid">
            @include("layouts.sections.header")
        </header>
        <div class="container-fluid line_btw_header_navbar"></div>
       
        @yield('navbar')

        <main class="container mt-4 mb-5 main_container_outer">
            
            <div class="row main_container_outer_row">
                <div class="col-md-12 main_container_inner">
                    <div class="row rounded-2 main_container_inner_row">
                        @yield('content_1')
                        
                        @yield('content_2')

                        @yield('content_3')

                        @yield('content_4')

                        @yield('content_5')

                        @yield('content_6')

                    </div>
                </div>        
            </div>
        </main>

        <div class="container-fluid line_for_footer"></div>
        <footer class="container-fluid">
            @include("layouts.sections.footer")
        </footer>

        @include("layouts.head_and_js.js")

</body>
</html>