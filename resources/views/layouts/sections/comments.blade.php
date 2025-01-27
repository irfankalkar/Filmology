<div class="container each_content bg-dark text-light comment_field py-3 px-3" style="--mt:14px; --mb:14px; --br_size:2px;">   
    <div class="col-md-12">
        <div class="row d-flex justify-content-md-between">           
            <div class="col-md-12 col-lg-5">
                <h4 class="special_title mb-2">
                    <span class="half_background_brown">
                        &nbsp;YORUMLAR&nbsp;
                    </span>
                </h4>
            </div>
            @if(!Auth::check())
            <div class="col-md-9 col-lg-7 info_who_can_comment">
                <ul class="list-inline d-flex justify-content-lg-end align-items-center">
                    <li class="list-inline-item"><i class="fa-solid fa-lock fs-6"></i></li>
                    <li class="list-inline-item">Sadece kayıtlı kullanıcılar yorum yapabilir.</li>
                    <a href="{{ route('login_register_href') }}" class="rounded">
                        <li class="list-inline-item rounded p-1 px-2 fw-bold border border-white">Kayıt Ol / Giriş Yap</li>
                    </a>
                </ul>
            </div>
            @endif
        </div>
        @if(Auth::check())
        <div class="col-md-12 mt-4">
            <h6>Yorum Yap:</h6>
        </div>
        <form action="{{ route('comment.submit') }}" method="POST">
            @csrf
        <div class="col-md-12 mt-3">
            <textarea class="form-control bg-light bg-opacity-25 me-2 text-light ps-2 pt-1" name="comment" id="textarea_auto_resize" placeholder="Yorumunuzu yapın..."></textarea>
        </div>
        <input type="hidden" name="movie_id" value="{{ $movie->Movie_ID }}">
        <div class="col-md-12 mt-3 text-end">
            <button type="submit" class="btn btn-sm px-5 py-1">Gönder</button>
        </div>
        </form>
    </div>
        @endif
    <div class="col-md-12">
        @foreach ($comments as $comment)
        @if($movie->Movie_ID == $comment->Movie_ID)
            <div class="col mb-4"> 
                <div class="d-flex flex-start">
                    <div class="personal_comment_field_holder px-2 py-1">
                        <div class="profile_picture_container">
                            <a>
                                <img class="rounded-circle shadow-1-strong" src="https://i.seadn.io/s/raw/files/b5f14b666829791d1ec5e3c8aac8f584.png?auto=format&dpr=1&w=1400&fr=1" alt="avatar" width="60"/>
                            </a>
                        </div>
                    </div>
                    <div class="flex-grow-1 flex-shrink-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mb-1">
                                    <a class="text-primary user_name"> {{ $user[$comment->User_ID-1]->User_Name }}</a>
                                </p>
                            </div>
                            <p class="small mb-0">
                                {{ $comment->Comment }}
                            </p>
                            <a class="likeButton">
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <span class="small me-4">Like</span>
                            </a>
                            <a class="dislikeButton">
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <span class="small me-4">Dislike</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
</div>