<div class="container">
    <div class="row">

        <nav class="navbar navbar-expand-lg header_options">
            <div class="container-fluid">

                <div class="col-md-2 logo_container">
                    <a class="navbar-brand" href="#">
                        <img class="" src="<?php echo e(asset('image/logo/Filmology_transparent_no_slogan.png')); ?>" alt="logo_footer">
                    </a>
                </div>

                <div class="col-md-1 slogan_left_copy text-start">
                    <div>
                        <span>Tavsiye</span>
                        <span>Film</span>
                        <span>Sitesi'ne</span>
                        <span>Hoşgeldiniz</span>
                    </div>
                </div>

                <div class="col-md-1 slogan_left text-start">
                    <div>
                        <span>Tavsiye</span>
                        <span>Film</span>
                        <span>Sitesi</span>
                    </div>
                </div>

                <div class="col-md-1 more_options_icon_container text-center" id="more_options_icon">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="bi bi-three-dots"></i></li>
                    </ul>
                </div>

                <div class="col-md-8 col-lg-9 col-xl-10 py-2 mt-2" id="responsive_header_items_field">
                    <div class="row mx-0">
                        <div class="collapse navbar-collapse header_items px-0" id="navbarSupportedContent">

                            <div class="col-md-1 slogan_right text-start">
                                <div>
                                    <span>Tavsiye</span>
                                    <span>Film</span>
                                    <span>Sitesi</span>
                                </div>
                            </div>

                            <div class="col-md-4 ps-0 header_navbar_container">
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e(Route::is('home_href') ? "nav_link_active" : ""); ?>" aria-current="page" href="<?php echo e(route('home_href')); ?>">Anasayfa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e(Route::is('about_href') ? "nav_link_active" : ""); ?>" href="<?php echo e(route('about_href')); ?>">Hakkımızda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e(Route::is('contact_href') ? "nav_link_active" : ""); ?>" href="<?php echo e(route('contact_href')); ?>">İletişim</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-5 search_container">
                                <form class="d-flex" role="search">
                                    <input class="form-control bg-light bg-opacity-25 me-2 text-light" type="search" placeholder="Ara" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="col-md-1 profile_icon_container text-center">
                                <ul class="list-inline mb-0">

                                <?php if(Auth::check()): ?>
                                <form action="<?php echo e(route('logout')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-link">Çıkış Yap</button>
                                </form>
                            <?php else: ?>
                            <li class="list-inline-item">
                                        <a href="<?php echo e(route('login_register_href')); ?>">
                                            <i class="bi bi-person-fill p-0 m-0"></i>
                                        </a>
                                        </li>
                            <?php endif; ?>                    
                                </ul>
                            </div>




                            






                            <div class="col-md-1 dark_light_icons_container">
                                <ul class="list-inline mb-0 d-flex justify-content-end">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" id="lightButton">
                                            <i class="bi bi-brightness-high-fill p-1"></i>
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);" id="darkButton">
                                            <i class="bi bi-moon-fill p-1"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>

                
            </div>
        </nav>

    </div>
</div><?php /**PATH C:\wamp64\www\Filmology\resources\views/layouts/sections/header.blade.php ENDPATH**/ ?>