@if (session('success'))
    <script>
        window.onload = function() {
            Swal.fire({
                icon: 'success',
                title: 'Başarılı!',
                text: '{{ session('success') }}'
            });
        };
    </script>
@endif

@if (session('error'))
    <script>
        window.onload = function() {
            Swal.fire({
                icon: 'error',
                title: 'Hata!',
                text: '{{ session('error') }}'
            });
        };
    </script>
@endif
       
        <div class="col-md-12 each_section_design contact_form_field">
        <div class="each_content mt-3 mb-3" style="--br_size:3px;">
            <div class="row px-3 pb-3">
                <div class="col-md-12 mb-4">
                    <div class="title rounded-bottom">
                        <h5>Bizimle İletişime Geçin!</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <form id="contactInfo" action="{{ route('contact_send') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <input name="fullNameContant" type="text" class="form-control placeholder-icon" placeholder="Ad - Soyad" aria-label="Username" aria-describedby="basic-addon1">
                                        <span class="input-group-text" id="basic-addon1"> <i class="bi bi-person-vcard"></i> </span>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input name="telephoneContant" type="number" class="form-control placeholder-icon" placeholder="Telefon" aria-label="Username" aria-describedby="basic-addon1">
                                        <span class="input-group-text" id="basic-addon1"> <i class="bi bi-telephone-fill"></i> </span>
                                    </div>
                                    <div class="input-group mb-5">
                                        <input name="emailContant" type="text" class="form-control placeholder-icon" placeholder="Mail" aria-label="Username" aria-describedby="basic-addon1">
                                        <span class="input-group-text" id="basic-addon1"> <i class="bi bi-at"></i> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 input-group mb-3">
                                        <input name="messageSubjectContant" type="text" class="form-control placeholder-icon" placeholder="Mesaj içeriğinizin konusunu yazın" aria-label="Username" aria-describedby="basic-addon1">
                                        <span class="input-group-text" id="basic-addon1"> <i class="bi bi-person-fill"></i> </span>
                                    </div>
                                    <div class="col-md-12 input-group mb-5">
                                        <textarea name="messageContant" class="form-control" aria-label="With textarea" placeholder="İletmek istediğiniz mesajı yazın" id="resizableTextArea"></textarea>
                                        <div class="resize-bar" id="resizeBar"></div>
                                        <span class="input-group-text message_box"> <i class="bi bi-envelope-fill"></i> </span>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <button type="submit" class="btn btn-sm w-100 fw-bolder">Gönder</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button id="clearContact" type="reset" class="btn btn-sm w-100 fw-bolder">Temizle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>