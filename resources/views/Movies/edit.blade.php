@extends('layouts.layout')
@section('movie')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh Sửa THông Tin Bộ phim</h1>
            </div>
            <div class="col-12">
                <form method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên Phim</label>
                        <input type="text" class="form-control" name="name"  value="{{ $movie->name }}"  required>
                    </div>

                    <div class="form-group">
                        <label>Year</label>
                        <input type="number" class="form-control" name="year" value="{{ $movie->year }}" required>
                    </div>

                    <div class="form-group">
                        <label>Time</label>
                        <input type="text" class="form-control" name="time"  value="{{ $movie->time}}"  required>
                    </div>


                    <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea  class="form-control" name="description" cols="30" rows="10"  required>{{ $movie->description}}</textarea>
{{--                        <input type="text" class="form-control" name="time"   required>--}}
                    </div>


                    <div class="form-group">
                        <label>Quốc Gia</label>
                        <select class="form-control" name="country_id">
                            @foreach($country as $value)
                                <option
                                    @if($movie->country_id == $value->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group">
                        <label>Đạo Diễn</label>
                        <select class="form-control" name="director_id">
                            @foreach($director as $value)
                                <option
                                    @if($movie->director_id == $value->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>






                    <div class="form-group">
                        <label>Diễn Viên</label>
                        <div class="form-group">
                            <select class="form-control" multiple name="actor[]">
                                @foreach($actors as $actor)
                                    <option value="{{$actor->id}}">{{$actor->name}}</option>
                                @endforeach
                            </select>
                            </td>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Thể Loại</label>
                        <select class="form-control" multiple name="category[]">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        </td>
                    </div>




                    <div class="form-group">
                        <label>Ảnh </label>
                        <img class="img-thumbnail img-fluid" src="{{ asset('images/'.$movie->image) }} " width="150px" height="150px" alt="">
                        <input type="file" name="image" class="form-control">
                        <input type="hidden" name="image" class="form-control" value="{{$movie->image }}">
                    </div>



                    <div class="form-group">
                        <label>Video</label>
                        <video controls width="300px" height="150px">
                            <source src="{{ url('videos/' . $movie->video) }}"
                                    type="video/mp4">
                        </video>
                        <input type="file" value="{{$movie->video}}" class="form-control-file" name="video" >


                        <input type="hidden" name="video" class="form-control" value="{{$movie->video }}">

                    </div>





                    <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
