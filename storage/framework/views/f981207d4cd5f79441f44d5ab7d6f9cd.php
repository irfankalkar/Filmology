
<div class="col-md-12 each_section_design admin">

    <div class="container each_content bg-dark text-white mt-3 mb-3" style="--br_size:3px;">

        <form action="#" method="">

            <div class="col-md-12">
                <div class="row py-3">
    
                    <div class="col-md-12">
                        <h2>Film Ekle</h2>
                    </div>
    
                    <div class="col-md-12 mt-4">
                        <div class="row">
                            <div class="col-md-3 mt-2">
                                <input name="movieName" class="form-control" type="text" placeholder="Film Adı">
                            </div>
                            <div class="col-md-3 mt-2">
                                <input name="movieOriginalName" class="form-control" type="text" placeholder="Film Adı (Orjinal)">
                            </div>
                            <div class="col-md-3 mt-2">
                                <input name="movieReleaseDate" class="form-control" type="text" placeholder="Çıkış Tarihi">
                            </div>
                            <div class="col-md-3 mt-2">
                                <input name="movieDuration" class="form-control" type="text" placeholder="Film Süresi">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <select name="movieChooseCategory" class="form-select" name="" id="">
                                    <option selected value="">Kategori Seç</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-2">
                                <input name="movieAddCategory" class="form-control" type="text" placeholder="Kategori Ekle">
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-12 mt-4">
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <input name="movieScreenWriter" class="form-control" type="text" placeholder="Film Yazarı (Senarist)">
                            </div>
                            <div class="col-md-6 mt-2">
                                <input name="movieDirector" class="form-control" type="text" placeholder="Yönetmen">
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-12 mt-4">
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <input name="movieImdbScore" class="form-control" type="text" placeholder="IMDB Puanı">
                            </div>
                            <div class="col-md-6 mt-2">
                                <input name="movieActorActress1" class="form-control" type="text" placeholder="Oyuncu 1">
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-12 mt-4">
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <input name="movieActorActress2" class="form-control" type="text" placeholder="Oyuncu 2">
                            </div>
                            <div class="col-md-6 mt-2">
                                <input name="movieActorActress3" class="form-control" type="text" placeholder="Oyuncu 3">
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-12 mt-4">
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <input name="movieActorActress4" class="form-control" type="text" placeholder="Oyuncu 4">
                            </div>
                            <div class="col-md-6 mt-2">
                                <input name="movieActorActress5" class="form-control" type="text" placeholder="Oyuncu 5">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label for="formFile" class="form-label">Film Kapağı Ekleyiniz</label>
                                <input name="movieCover" class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Fragman Ekleyiniz</label>
                                <input name="movieTrailer" class="form-control" type="text" placeholder="Video'ya ait IFRAME etiketini buraya giriniz...">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea1" class="form-label">Filmin Konusunu içeren uzun metni buraya ekleyiniz...</label>
                                <textarea name="movieSummary" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-12 mt-5">
                        <button type="submit" class="btn btn-primary w-100 border border-1"><b>EKLE</b></button>
                    </div>
    
                </div>
            </div>

        </form>

    </div>
    
</div><?php /**PATH C:\wamp64\www\Filmology\resources\views/layouts/sections/admin/admin.blade.php ENDPATH**/ ?>