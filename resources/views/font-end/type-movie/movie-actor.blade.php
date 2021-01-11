@extends('font-end.master')
@section('content')
    @foreach($movies as $movie)
        <li class="slide-item">
            <a href="movie-details.html">
                <div class="block-images position-relative">
                    <div class="img-box">
                        <img  height="150px" width="300px" src="{{asset('images/'.$movie->image)}}" class="img-fluid" alt="">
                    </div>
                    <div class="block-description">
           `             <h6>{{$movie->name}}</h6>
                        <div class="movie-time d-flex align-items-center my-2">
                            <span class="text-white">{{$movie->time}}</span>
                        </div>
                        <div class="hover-buttons">
                            <a  href="{{route('movie-fontEnd.detail',$movie->id)}}" class="btn btn-danger">Xem Phim</a>
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
@endsection

