@extends('layouts.layout')
@section('movie')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm Mới phim</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('movies.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên Phim</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="form-group">
                        <label>Year</label>
                        <input type="number" class="form-control" name="year" required>
                    </div>

                    <div class="form-group">
                        <label>Time</label>
                        <input type="number" class="form-control" name="time" required>
                    </div>


                    <div class="form-group">
                        <label>Quốc Gia</label>
                        <select class="form-control" name="country_id">
                            @foreach($country as $countrie)
                                <option value="{{ $countrie->id }}">{{ $countrie->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label> Đạo Diễn</label>
                        <select class="form-control" name="director_id">
                            @foreach($director as $director)
                                <option value="{{ $director->id }}">{{ $director->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Diễn Viên</label>
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" name="actor[]">
                                @foreach($actors as $actor)
                                    <option value="{{$actor->id}}">{{$actor->name}}</option>
                                @endforeach
                            </select>
                            </td>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Thể Loại</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="category[]">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        </td>
                    </div>
                    <div class="form-group">
                        <label>Ảnh </label>
                        <input type="file" class="form-control" name="image">
                    </div>


                    <div class="form-group">
                        <label>Video</label>
                        <input type="file" class="form-control-file" name="video">
                    </div>


                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

