<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

        
    <link href='https://fonts.googleapis.com/css?family=Lato|Roboto:400,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />


        
    <!-- <link rel="stylesheet" href="<?php echo e(asset('assets/jquery-text-marquee-master/dist/jquery.text-marquee.min.css')); ?>"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">


    
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/body.css')); ?>">


    
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/header.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/navbar.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/home_trailer.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/footer.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('assets/css/login.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/register.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('assets/css/login_button.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/register_button.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('assets/css/movie_detail.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/m_add.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('assets/css/about.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('assets/css/contact.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('assets/css/new_movies.css')); ?>">
        

</head>




<body>


    

        <header class="container-fluid">
            <?php echo $__env->make("layouts.sections.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>

            <div class="container-fluid line_btw_header_navbar"></div>

        <nav class="navbar navbar-expand-lg py-0 border_black header_next_navbar_outer">
            <?php echo $__env->make("layouts.sections.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </nav>

    







    

        <main class="container mt-4 mb-5 main_container_outer">
            
            <div class="row main_container_outer_row">
                <div class="col-md-12 main_container_inner">

                        
                    <div class="row rounded-2 main_container_inner_row">


                        <?php echo $__env->yieldContent('content_1'); ?>
                        
                        <?php echo $__env->yieldContent('content_2'); ?>

                        <?php echo $__env->yieldContent('content_3'); ?>

                        <?php echo $__env->yieldContent('content_4'); ?>


                    </div>

                </div>        
            </div>

        </main>

    








     

        <div class="container-fluid line_for_footer"></div>

        <footer class="container-fluid">
            <?php echo $__env->make("layouts.sections.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>

    








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


    <script src="<?php echo e(asset('assets/jQuery.Marquee-master/jquery.marquee.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/jQuery.Marquee-master/jquery.marquee.js')); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="<?php echo e(asset('assets/js/header.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/navbar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/trailer_section.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/colorful_borders.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/login_register_button.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/contact.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/movie_detail.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/new_movies.js')); ?>"></script>
</body>
</html><?php /**PATH C:\wamp64\www\Filmology_irfan\resources\views/layouts/draft.blade.php ENDPATH**/ ?>