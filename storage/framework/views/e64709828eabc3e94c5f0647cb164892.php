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




<?php $__env->startSection('content_1'); ?>

        
    <div class="col-md-12 each_section"> 
        <div class="row p-0 p-md-2">
            <div class="col-md-12 px-2 py-2 px-lg-3 py-lg-3 each_section_design">

            
                <?php echo $__env->make("layouts.sections.movie_details", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make("layouts.sections.cards_and_slider.slider_you_might_like", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make("layouts.sections.comments", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.draft", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Filmology\resources\views/front/movie_details.blade.php ENDPATH**/ ?>