@extends('font-end.master')
@section('content')
    <section id="home" class="iq-main-slider p-0">
        <div id="home-slider" class="slider m-0 p-0">
            <div class="slide slick-bg s-bg-1">
                <div class="container-fluid position-relative h-100">
                    <div class="slider-inner h-100">
                    </div>
                </div>
            </div>
            <div class="slide slick-bg s-bg-2">
                <div class="container-fluid position-relative h-100">
                    <div class="slider-inner h-100">
                        <div class="row align-items-center  h-100">
                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <a href="javascript:void(0);">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide slick-bg s-bg-3">
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
                    fill="none" stroke="currentColor">
                <circle r="20" cy="22" cx="22" id="test"></circle>
            </symbol>
        </svg>
    </section>
    <!-- Slider End -->
    <!-- MainContent -->
    <div class="main-content">
        <section id="iq-favorites">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Phim Chiếu Rạp Mới</h4>
                        </div>
                        <div class="favorites-contens">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                @foreach($movies as $movie)
                                <li class="slide-item">
                                    <a href="movie-details.html">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img  height="150px" width="300px" src="{{asset('images/'.$movie->image)}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>{{$movie->name}}</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="text-white">{{$movie->time}}</span>
                                                </div>
                                                <div class="hover-buttons">
                                              <a  href="{{route('movie-fontEnd.detail',$movie->id)}}" class="btn btn-danger">Xem Phim</a>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
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
                            <h4 class="main-title">Phim Chiếu Rạp 2020</h4>
                        </div>
                        <div class="upcoming-contens">
                            <ul class="favorites-slider list-inline row p-0 mb-0">
                                @foreach($moviesYear2020 as $movie)
                                    <li class="slide-item">
                                        <a href="movie-details.html">
                                            <div class="block-images position-relative">
                                                <div class="img-box">
                                                    <img  height="150px" width="300px" src="{{asset('images/'.$movie->image)}}" class="img-fluid" alt="">
                                                </div>
                                                <div class="block-description">
                                                    <h6>{{$movie->name}}</h6>
                                                    <div class="movie-time d-flex align-items-center my-2">
                                                        <span class="text-white">{{$movie->time}}</span>
                                                    </div>
                                                    <div class="hover-buttons">
                                                        <a  href="{{route('movie-fontEnd.detail',$movie->id)}}" class="btn btn-danger">Xem Phim</a>
                                                    </div>
                                                </div>
                                                <div class="block-social-info">
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
        <section id="iq-topten">
        </section>
        <section id="iq-suggestede" class="s-margin">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Phim Chiếu Rạp</h4>
                        </div>
                        <div class="suggestede-contens">
                            <ul class="list-inline favorites-slider row p-0 mb-0">
                                @foreach($moviesYear2019 as $movie)
                                    <li class="slide-item">
                                        <a href="movie-details.html">
                                            <div class="block-images position-relative">
                                                <div class="img-box">
                                                    <img  height="150px" width="300px" src="{{asset('images/'.$movie->image)}}" class="img-fluid" alt="">
                                                </div>
                                                <div class="block-description">
                                                    <h6>{{$movie->name}}</h6>
                                                    <div class="movie-time d-flex align-items-center my-2">
                                                        <span class="text-white">{{$movie->time}}</span>
                                                    </div>
                                                    <div class="hover-buttons">
                                                        <a  href="{{route('movie-fontEnd.detail',$movie->id)}}" class="btn btn-danger">Xem Phim</a>
                                                    </div>
                                                </div>
                                                <div class="block-social-info">
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

    </div>

@endsection
