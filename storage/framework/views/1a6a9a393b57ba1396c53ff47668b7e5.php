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

        
    <div class="col-md-4 each_section"> 
        <div class="row p-2">

            
                <?php echo $__env->make("layouts.sections.login", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

        </div>
    </div>

<?php $__env->stopSection(); ?>








<?php $__env->startSection('content_2'); ?>

        
    <div class="col-md-8 each_section"> 
        <div class="row p-2">

            
                <?php echo $__env->make("layouts.sections.register", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.draft", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Filmology\resources\views/front/login_register.blade.php ENDPATH**/ ?>