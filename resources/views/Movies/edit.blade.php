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
                        <input type="number" class="form-control" name="time"  value="{{ $movie->time}}"  required>
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
                        <label>Ảnh </label>
                        <input type="file" class="form-control-file" name="image" >
                    </div>



                    <div class="form-group">
                        <label>Video</label>
                        <input type="file" class="form-control-file" name="video" >
                    </div>





                    <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
