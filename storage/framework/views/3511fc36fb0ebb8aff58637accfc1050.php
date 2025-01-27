  <div class="col-md-12 each_section_design login_form_field">
    <div class="each_content mt-3 mb-3" style="--br_size:3px;">
        <div class="row px-3 pb-3">
            <div class="col-md-12 mb-4">
                <div class="title rounded-bottom">
                    <h5>Giriş Yap</h5>
                </div>
            </div>
            <div class="col-md-12">
                <form action="<?php echo e(route("login_form_href")); ?>" method="POST">
                    <div class="row">
                        <?php echo csrf_field(); ?>
                        <div class="input-group mb-3">
                            <input name="userNameLogin" type="text" class="form-control placeholder-icon" placeholder="Kullanıcı Adı" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1"> <i class="bi bi-person-fill"></i> </span>
                        </div>
                        <div class="input-group free_margin_bottom" style="--mb:101px;">
                            <input name="passwordLogin" type="password" class="form-control placeholder-icon" placeholder="Şifre" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1"> <i class="bi bi-key-fill"></i> </span>
                        </div>
                        <div class="mb-4 fw-bolder login_btn_field">
                            <div class="button_su">
                              <span class="su_button_circle"> </span>                                          
                              <button type="submit" class="button_su_inner" style="--pdt:5px; --pdb:5px;">
                                <span class="button_text_container text-dark">
                                  Giriş Yap
                                </span>
                            </button>
                            </div>
                        </div>
                        <div class="or_field mb-4">
                            <div class="lines"></div>
                                    <b>VEYA</b>
                            <div class="lines"></div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-lg btn-light w-100 google_btn p-3"> <i class="bi bi-google"></i> Google ile Devam Et </button>
                        </div>          
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\Filmology-main\resources\views/layouts/sections/login.blade.php ENDPATH**/ ?>