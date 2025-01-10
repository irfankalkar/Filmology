

<div class="col-md-12 each_section_design register_form_field">

        
    <div class="each_content_border_color" style="--mt:14px; --mb:14px; --br_size:3px;">
    
            
        <div class="row px-3 pb-3">

            <div class="col-md-12 mb-4">
                <div class="title rounded-bottom">
                    <h5>Kayıt Ol</h5>
                </div>
            </div>


            <form class="col-md-12" action="<?php echo e(route("register_form_href")); ?>" method="POST">

                <div class="row">

                    <?php echo csrf_field(); ?>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input name="fullNameRegister" type="text" class="form-control placeholder-icon" placeholder="Tam Ad" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1"> <i class="bi bi-person-vcard"></i> </span>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input name="userNameRegister" type="text" class="form-control placeholder-icon" placeholder="Kullanıcı Adı" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1"> <i class="bi bi-person-fill"></i> </span>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input name="phoneNumberRegister" type="number" class="form-control placeholder-icon" placeholder="Telefon Numarası" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1"> <i class="bi bi-telephone-fill"></i> </span>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input name="emailRegister" type="text" class="form-control placeholder-icon" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1"> <i class="bi bi-at"></i> </span>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-6 input-group mb-5">
                            <input name="passwordRegister" type="password" class="form-control placeholder-icon" placeholder="Şifre" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1"> <i class="bi bi-key-fill"></i> </span>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-6 input-group mb-5">
                            <input name="passwordRegisterAgain" type="password" class="form-control placeholder-icon" placeholder="Şifre (Tekrar)" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1"> <i class="bi bi-key-fill"></i> </span>
                        </div>
                    </div>
    
    
                    <div class="col-md-12 mb-4 fw-bolder register_btn_field">
                        <div class="button_su">
                            <span class="su_button_circle"> </span>

                            

                            <button type="submit"  class="button_su_inner" style="--pdt:5px; --pdb:5px;">
                                <span class="button_text_container">
                                    Kayıt Ol
                                </span>
                            </button>

                        </div>
                    </div>

                </div>

            </form>


            <div class="or_field mb-4">
                <div class="lines"></div>
                        <b>VEYA</b>
                <div class="lines"></div>
            </div>


            <div class="row">
                <div>
                    <button type="button" class="btn btn-lg btn-light w-100 google_btn p-3"> <i class="bi bi-google"></i> Google ile Devam Et </button>
                </div>
            </div>

        </div>
        
    </div>
        
</div>
    
<?php /**PATH C:\wamp64\www\Filmology\resources\views/layouts/sections/register.blade.php ENDPATH**/ ?>