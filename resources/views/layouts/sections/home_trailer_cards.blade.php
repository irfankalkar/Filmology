<div class="container home_trailer_cards_for_other_movies">

    <div class="col-md-12">

        <div class="row">

            <div class="col-md-12">



                @foreach($random as $rMovie)
                
                    <div class="each_trailer_card mb-3" style="max-width: 540px;" title="{{$rMovie->Movie_Name}}">

                        <a href="{{ route("movie_details", $rMovie->Movie_ID)}}">

                            <div class="row g-0">

                                <div class="col-9 col-sm-9 col-md-12 d-sm-block d-lg-none border-bottom border-light movie_title_field_top">
                                    <h6 class="card-title px-1 d-inline fw-bold"> {{$rMovie->Movie_Name}} </h6>
                                </div>

                                <div class="col-3 col-sm-3 d-md-none rating_field_top">
                                    <ul class="list-inline border-bottom border-light bg-dark text-light m-0 px-1 py-1 d-flex flex-row justify-content-center">
                                        <li class="list-inline-item me-1"><i class="bi bi-star-fill"></i></li>
                                        <li class="list-inline-item"><span class="fw-bold">{{$rMovie->IMDB_Point}}</span></li>
                                    </ul>
                                </div>


                                <div class="col-4 col-sm-3 col-md-4">

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <img src="{{ asset('movie_covers/' .$rMovie->Movie_Cover_URL) }}" class="img-fluid"/>
                                        </div>
                                    </div>

                                    <div class="row d-none d-md-block rating_field">
                                        <div class="col-sm-12 col-md-12">
                                            <ul class="list-inline border-top border-light bg-dark text-light m-0 px-1 py-1 d-flex flex-row justify-content-center">
                                                <li class="list-inline-item me-1"><i class="bi bi-star-fill"></i></li>
                                                <li class="list-inline-item"><span class="fw-bold">{{$rMovie->IMDB_Point}}</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>


                                

                                <div class="col-8 col-sm-9 col-md-8 d-lg-flex flex-lg-column justify-content-lg-around justify-content-xl-evenly">

                                    <div class="row">

                                        <div class="col-sm-12 col-md-12 d-none d-lg-block movie_title_field_bottom">
                                            <h6 class="card-title p-2 py-1 fw-bold"> {{$rMovie->Movie_Name}} </h6>
                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-sm-12 col-md-12 trailer_card_summary_inner_field">
                                            <p class="card-text px-2 fs-6 trailer_card_summary">
                                            {{$rMovie->Movie_Story}}
                                            </p>
                                        </div>
                                            
                                    </div>

                                </div>

                            </div>

                        </a>
                        
                    </div>

                @endforeach

            </div>

        </div>

    </div>

</div>