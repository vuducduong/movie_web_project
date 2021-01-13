@extends('font-end.master')
@section('content')
    <div class="video-container iq-main-slider">
        <video class="video d-block" controls loop>
            <source src="{{asset('videos/'.$movie->video)}}" type="video/mp4">
        </video>
    </div>
    <!-- Banner End -->
    <!-- MainContent -->
    <div class="main-content movi">
        <section class="movie-detail container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-info g-border">
                        <h1 class="trending-text big-title text-uppercase mt-0">{{$movie->name}}</h1>
                        <ul class="p-0 list-inline d-flex align-items-center movie-content">

                            <li class="text-white">Thể Loại : @php
$actor = $movie->categories()->get();
foreach($actor as $value){
    echo $value->name.',';}@endphp</li>



                            <li class="text-white">Quốc Gia : {{$movie->country->name}}</li>
                            <li class="text-white">Đạo Diễn : {{ $movie->director->name }}</li>

                            <li class="text-white">Diễn Viên :@php
$actor = $movie->actors()->get();
foreach($actor as $value){
    echo $value->name.',';
}
                             @endphp</li>

                        </ul>
                        <div class="d-flex align-items-center text-white text-detail">
                            <span class="badge badge-secondary p-3">18+</span>
                            <span class="ml-3">Thời Gian : {{$movie->time}}</span>
                            <span class="trending-year"> Năm Sản Xuất : {{$movie->year}}</span>
                        </div>
                        <div class="d-flex align-items-center series mb-4">
                            <a href="javascript:void(0);"><img src="images/trending/trending-label.png" class="img-fluid"
                                                              alt=""></a>
                            <span class="text-gold ml-3">#2 in Series Today</span>
                        </div>
                        <p class="trending-dec w-100 mb-0"> <h3>Giới Thiệu Phim : </h3> {{$movie->description}}</p>
                        <ul class="list-inline p-0 mt-4 share-icons music-play-lists">
                            <li><span><i class="ri-add-line"></i></span></li>
                            <li><span><i class="ri-heart-fill"></i></span></li>
                            <li class="share">
                                <span><i class="ri-share-fill"></i></span>
                                <div class="share-box">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="share-ico"><i class="ri-facebook-fill"></i></a>
                                        <a href="#" class="share-ico"><i class="ri-twitter-fill"></i></a>
                                        <a href="#" class="share-ico"><i class="ri-links-fill"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
