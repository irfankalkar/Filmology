
<?php if(session('success')): ?>
    <script>
        window.onload = function() {
            Swal.fire({
                icon: 'success',
                title: 'Başarılı!',
                text: '<?php echo e(session('success')); ?>'
            });
        };
    </script>
<?php endif; ?>
<?php if(session('error')): ?>
    <script>
        window.onload = function() {
            Swal.fire({
                icon: 'error',
                title: 'Hata!',
                text: '<?php echo e(session('error')); ?>'
            });
        };
    </script>
<?php endif; ?>
<?php $__env->startSection('navbar'); ?>
 <?php echo $__env->make("layouts.sections.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_1'); ?>
    <div class="col-md-12 each_section">
        <div class="row p-0 p-md-2">
            <div class="col-md-12 each_section_design">
                <div class="row">
                    <div class="col-md-4 col-xl-3 p-2">
                        <div class="container each_content bg-dark py-2 px-2 py-md-3 px-md-3" style="--br_size:2px;">         
                            <div class="row">
                                    <?php echo $__env->make("layouts.sections.home_trailer_cards", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xl-9 p-2 d-flex flex-colum align-items-stretch">
                        <div class="container each_content bg-dark px-0 py-2 py-md-3 px-md-1 d-flex flex-colum align-items-stretch justify-content-center" style="--br_size:2px;">
                            <div class="row w-100 h-100">
                                    <?php echo $__env->make("layouts.sections.home_trailer_video", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>









<?php $__env->startSection('content_2'); ?>

        
    <div class="col-md-12 each_section"> 
        <div class="row">

            
                <?php echo $__env->make("layouts.sections.advertisement_1", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

        </div>
    </div>

<?php $__env->stopSection(); ?>









<?php $__env->startSection('content_3'); ?>


    <div class="col-md-12 each_section">
        <div class="row p-0 p-md-2">

            <div class="col-md-12 each_section_design">

                <div class="row">



                    <div class="col-md-3 p-2">
            
                        <div class="container each_content bg-dark mb-3 py-2 px-2 py-md-3 px-md-3" style="--br_size:2px;">
                            <div class="row">
                                
                                    <?php echo $__env->make("layouts.sections.coming_soon_guide_comments", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                
                            </div>
                        </div>


                        <div class="container each_content bg-dark py-2 px-2 py-md-3 px-md-3" style="--br_size:2px;">
                            <div class="row">
                                
                                    <?php echo $__env->make("layouts.sections.coming_soon_cine_news", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                
                            </div>
                        </div>
                        
            
                    </div>


            
                    <div class="col-md-9 p-2">
            
                        <div class="container each_content bg-dark py-2 px-3 py-sm-2 py-md-3 px-md-4" style="--br_size:2px;">
            
                            <div class="row">
            
            
                                
                                    <?php echo $__env->make("layouts.sections.cards_and_slider.content_movie_table", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                
            
            
                            </div>
            
                        </div>
            
                    </div>




            
                </div>
            
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
































<?php echo $__env->make("layouts.draft", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Filmology-main\resources\views/front/index.blade.php ENDPATH**/ ?>