<!DOCTYPE html>
<html lang="en">   
<head>
 <?php echo $__env->make("layouts.head_and_js.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
    <div class="background_image"></div>
        <header class="container-fluid">
            <?php echo $__env->make("layouts.sections.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
        <div class="container-fluid line_btw_header_navbar"></div>
       
        <?php echo $__env->yieldContent('navbar'); ?>

        <main class="container mt-4 mb-5 main_container_outer">
            
            <div class="row main_container_outer_row">
                <div class="col-md-12 main_container_inner">
                    <div class="row rounded-2 main_container_inner_row">
                        <?php echo $__env->yieldContent('content_1'); ?>
                        
                        <?php echo $__env->yieldContent('content_2'); ?>

                        <?php echo $__env->yieldContent('content_3'); ?>

                        <?php echo $__env->yieldContent('content_4'); ?>

                        <?php echo $__env->yieldContent('content_5'); ?>

                        <?php echo $__env->yieldContent('content_6'); ?>

                    </div>
                </div>        
            </div>
        </main>

        <div class="container-fluid line_for_footer"></div>
        <footer class="container-fluid">
            <?php echo $__env->make("layouts.sections.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>

        <?php echo $__env->make("layouts.head_and_js.js", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH C:\Users\user\Desktop\Filmology\resources\views/layouts/draft.blade.php ENDPATH**/ ?>