








<?php $__env->startSection('navbar'); ?>

    
        <?php echo $__env->make("layouts.sections.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

<?php $__env->stopSection(); ?>






<?php $__env->startSection('content_1'); ?>

        
    <div class="col-md-5 each_section"> 
        <div class="row p-2">

            
                <?php echo $__env->make("layouts.sections.home_trailer_cards", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

        </div>
    </div>

<?php $__env->stopSection(); ?>







<?php $__env->startSection('content_2'); ?>

        
    <div class="col-md-7 each_section"> 
        <div class="row p-2">

            
                <?php echo $__env->make("layouts.sections.home_trailer_video", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

        </div>
    </div>

<?php $__env->stopSection(); ?>







<?php $__env->startSection('content_3'); ?>

        
    <div class="col-md-12 each_section"> 
        <div class="row p-2">

            
                <?php echo $__env->make("layouts.sections.advertisement_1", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

        </div>
    </div>

<?php $__env->stopSection(); ?>







<?php $__env->startSection('content_4'); ?>

    <div class="col-md-9 each_section">
        <div class="row p-2">


                <?php echo $__env->make("layouts.sections.cards_and_slider.slider_lists.content_slider_new_movies", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.draft", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Filmology\resources\views/front/about.blade.php ENDPATH**/ ?>