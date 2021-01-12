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
                                @foreach($movies as $movie)
                                    <li class="slide-item">
                                        <a href="show-single.html">
                                            <div class="block-images position-relative">
                                                <div class="img-box">
                                                    <img height="150px" width="300px"  src="{{asset('images/'.$movie->image)}}" class="img-fluid" alt="">
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
