@extends('layouts.layout')
@section('movie')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh Sửa THông Tin Diễn Viên</h1>
            </div>
            <div class="col-12">
                <form method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên Diễn Viên</label>
                        <input type="text" class="form-control" name="name"  value="{{ $actor->name }}"  required>
                    </div>

                    <div class="form-group">
                        <label>Ngày Sinh Diễn Viên</label>
                        <input type="date" class="form-control" name="year" value="{{ $actor->year }}" required>
                    </div>

                    <div class="form-group">
                        <label>Quốc Gia Diễn Viên</label>
                        <input type="text" class="form-control" name="country"  value="{{ $actor->country}}"  required>
                    </div>


                    <div class="form-group">
                        <label>Ảnh Diễn Viên </label>
                        <input type="file" class="form-control-file" name="image" >
                    </div>

                    <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

