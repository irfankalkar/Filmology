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

<div class="col-md-12 each_section_design admin">

    <div class="container each_content bg-dark text-white mt-3 mb-3" style="--br_size:3px;">

        <form action="{{ route("add_movie") }}" method="POST">
            @csrf
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
                                <select name="movieChooseCategory" class="form-select">
                                    <option selected value="">Kategori Seç</option>
                                    <option value="Aksiyon">Aksiyon</option>
                                    <option value="Animasyon">Animasyon</option>
                                    <option value="Bilim Kurgu">Bilim Kurgu</option>
                                    <option value="Dram">Dram</option>
                                    <option value="Fantastik">Fantastik</option>
                                    <option value="Gerilim">Gerilim</option>
                                    <option value="Gizem">Gizem</option>
                                    <option value="Komedi">Komedi</option>
                                    <option value="Korku">Korku</option>
                                    <option value="Macera">Macera</option>
                                    <option value="Polisiye">Polisiye</option>
                                    <option value="Psikolojik">Psikolojik</option>
                                    <option value="Romantik">Romantik</option>
                                    <option value="Spor">Spor</option>
                                    <option value="Savaş">Savaş</option>
                                    <option value="Suç">Suç</option>
                                    <option value="Tarihi">Tarihi</option>
                                    <option value="Trajedi">Trajedi</option>
                                    <option value="Zombi">Zombi</option>
                                </select>
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
                                <input name="movieCover" class="form-control" type="text" id="formFile">
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
    
</div>