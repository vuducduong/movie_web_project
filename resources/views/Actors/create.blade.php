@extends('layouts.layout')
@section('movie')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm Mới Diễn Viên</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('actors.store') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên Diễn Viên</label>
                        <input type="text" class="form-control" name="name"  required>
                    </div>

                    <div class="form-group">
                        <label>Ngày Sinh Diễn Viên</label>
                        <input type="date" class="form-control" name="year"  required>
                    </div>

                    <div class="form-group">
                        <label>Quốc Gia Diễn Viên</label>
                        <input type="text" class="form-control" name="country" required>
                    </div>



                    <div class="form-group">
                        <label>Ảnh Diễn Viên </label>
                        <input type="file" class="form-control" name="image" >
                    </div>



                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
