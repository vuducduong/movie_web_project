@extends('font-end.master')
@section('content')
    <div class="main-content">
        <section id="iq-favorites">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Popular Shows</h4>
                        </div>
                        <div class="favorites-contens">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">

    @foreach($data as $value)
        <li class="slide-item">
            <a href="movie-details.html">
                <div class="block-images position-relative">
                    <div class="img-box">
                        <img  height="150px" width="300px" src="{{asset('images/'.$value->MovieImage)}}" class="img-fluid" alt="">
                    </div>
                    <div class="block-description">
                        <h6>{{$value->MoviesName}}</h6>
                        <div class="movie-time d-flex align-items-center my-2">
                            <span class="text-white">{{$value->time}}</span>
                        </div>
                        <div class="hover-buttons">
                            <a  href="{{route('movie-fontEnd.detail',$value->MoviesId)}}" class="btn btn-danger">Xem Phim</a>
                        </div>
                    </div>
                    <div class="block-social-info">
                        <ul class="list-inline p-0 m-0 music-play-lists">
                            <li><span><i class="ri-volume-mute-fill"></i></span></li>
                            <li><span><i class="ri-heart-fill"></i></span></li>
                            <li><span><i class="ri-add-line"></i></span></li>
                        </ul>
                    </div>
                </div>
            </a>
        </li>
    @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="iq-upcoming-movie">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Best Of International Shows</h4>
                        </div>
                        <div class="upcoming-contens">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/06.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Last Track</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">19+</div>
                                                    <span class="text-white">3 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play
                                          Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/07.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Dino Land</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">9+</div>
                                                    <span class="text-white">2 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/08.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Mission Moon</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">18+</div>
                                                    <span class="text-white">3 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/09.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Friends</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">10+</div>
                                                    <span class="text-white">1 Season</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/03.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Arrival 1999</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">11+</div>
                                                    <span class="text-white">3 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-signle.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/05.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>The Marshal King</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">17+</div>
                                                    <span class="text-white">1 Season</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="iq-suggestede">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Shows We Recommend</h4>
                        </div>
                        <div class="suggestede-contens">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/01.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Day of Darkness</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">15+</div>
                                                    <span class="text-white">2 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                       </span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/08.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Mission Moon</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">18+</div>
                                                    <span class="text-white">3 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/09.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Friends</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">10+</div>
                                                    <span class="text-white">1 Season</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/05.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>The Marshal King</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">17+</div>
                                                    <span class="text-white">1 Season</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide-item">
                                    <a href="show-single.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="images/tvthrillers/04.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>Knight Mare</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">18+</div>
                                                    <span class="text-white">3 Seasons</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

