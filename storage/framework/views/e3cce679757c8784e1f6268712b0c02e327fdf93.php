<div class="col-md-12 each_section_design all_movies">

    <div class="row">

        <div class="col-md-9 each-content" style="--mt:14px; --mb:14px; --br_size:2px;">

            <div class="row">

                <div class="col-md-12 px-4 py-3">

                    <div class="row bg-dark rounded border border-white border-2 py-3 px-3">

                        
                            <?php echo $__env->make("layouts.sections.cards.cards_for_all_movies", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        

                        <div class="col-12 pt-3 pb-2">

                            
                                <?php echo $__env->make("layouts.sections.pagination", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

















<?php /**PATH C:\wamp64\www\Filmology\resources\views/layouts/sections/movie_table.blade.php ENDPATH**/ ?>