{{-- <div class="col-md-12 each_section_design"> --}}

    <div class="container swiper each_content slider_table slider_table_three bg-dark py-2" style="--mt:14px; --mb:14px; --br_size:2px;">

            <div class="slider-wrapper">


                <h4 class="special_title py-2">
                    <span class="half_background_second_blue fs-5 fs-sm-4">
                        &nbsp;En Fazla Görüntülenenler&nbsp;
                    </span>
                </h4>
                
                
                <div class="card-list swiper-wrapper">
                
                @foreach ($mostViewedMovies as $mVMovies)
                            
                            <div class="card-item swiper-slide movie_each_card" style="border: solid 2px rgb(112, 181, 223); border-radius: 5px;" title="{{$mVMovies->Movie_Name}}">
                    
                                <div class="col-md-12 image_field">
                    
                                    <img src="{{ asset('movie_covers/' .$mVMovies->Movie_Cover_URL) }}" alt="User Image"/>

                    
                                    <div class="overlay px-3 pt-3 movie_summary">
                    
                                        <a href="{{ route("movie_details", $mVMovies->Movie_ID)}}" style="text-decoration: none; color: inherit;">
                                            <p>
                                            {{$mVMovies->Movie_Story}}
                                            </p>
                                        </a>
                    
                                    </div>



                                    <div class="row d-flex flex-wrap justify-content-between movie_card_info_field mx-0 p-1">

                                        <div class="col-12 order-0 order-xl-0 px-1 movie_name_field">
                                            <a href="{{ route("movie_details", $mVMovies->Movie_ID)}}" style="text-decoration: none; color: inherit;">
                                                <span class="fw-bold pt-3">{{$mVMovies->Movie_Name}}</span>
                                            </a>
                                        </div>
                            
                                        <div class="col-xxl-8 col-xl-7 order-1 order-xl-1 px-1 category_field d-flex align-items-center">
                                            <a href=""> <span class="card-text"> {{$mVMovies->Category}} </span> </a>
                                        </div>
                            
                                        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 order-xl-2 order-3 px-1 rating_field">
                                            <ul class="list-inline mb-0 d-flex justify-content-end">
                                                <li class="list-inline-item w-75 d-flex justify-content-between justify-content-sm-end align-items-center">
                                                    <i class="bi bi-star-fill me-sm-1 "></i>
                                                    <span class="">{{$mVMovies->IMDB_Point}}</span>
                                                </li>
                                            </ul>
                                        </div>
                            
                                        <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-7 col-sm-7 col-7 order-xl-3 order-2 px-1 year_field d-flex align-items-center">
                                            <a href=""> <span class="year">{{$mVMovies->Movie_Release_Year}}</span> </a>
                                        </div>
                            
                                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4 order-4 order-xl-4 px-1 comment_field">
                                            <ul class="list-inline mb-0 d-flex justify-content-xl-end justify-content-lg-start">
                                                <li class="list-inline-item w-75 d-flex justify-content-between justify-content-sm-start align-items-center">
                                                    <i class="bi bi-chat-right-fill me-sm-1 "></i>
                                                    <span class="">0</span>
                                                </li>
                                            </ul>
                                        </div>
                            
                                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4 order-5 order-xl-5 px-1 view_field">
                                            <ul class="list-inline mb-0 d-flex justify-content-end">
                                                <li class="list-inline-item w-75 d-flex justify-content-between justify-content-sm-end align-items-center">
                                                    <i class="bi bi-eye-fill eye_icon ms-xs-auto me-sm-1 "></i>
                                                    <span class="">{{$mVMovies->View_Count}}</span>
                                                </li>
                                            </ul>
                                        </div>
                            
                                    </div>

                    
                                </div>
                    
                    

                    
                            </div>
                    
                        @endforeach
                
                </div>
                
                
                <div class="swiper-pagination mb-2"></div>
                <div class="swiper-slide-button swiper-button-prev"></div>
                <div class="swiper-slide-button swiper-button-next"></div>


            </div>

    </div>

{{-- </div> --}}





