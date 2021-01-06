

@extends('layouts.layout')

@section('movie')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Phim</h1>
            </div>
            <a style="position: absolute;left: 90%" class="btn btn-primary" href="{{ route('movies.create') }}">Thêm mới</a>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên Phim</th>
                    <th scope="col">Năm Sản Xuất </th>
                    <th scope="col">THời Gian</th>
                    <th scope="col">Quốc Gia</th>
                    <th scope="col">Đaọ Diễn</th>
                    <th scope="col">Ảnh phim</th>
                    <th scope="col">Video</th>
                    <th scope="col">Thao Tác</th>

                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($movies) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($movies as $key => $movie)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $movie->name }}</td>
                            <td>{{ $movie->year }}</td>
                            <td>{{ $movie->time }}</td>
                            <td>{{ $movie->country->name }}</td>
                            <td>{{ $movie->director->name }}</td>


                            <td><img src="{{ asset($movie->image) }}" height="100px" width="100px"></td>


                            <td>
                                <a href="{{ route('movies.list', $movie->id) }}">{{ $movie->video }}</a>
                            </td>



                            <td><a class="btn btn-warning" href="{{ route('movies.edit', $movie->id) }}">sửa</a></td>
                            <td><a class="btn btn-danger"  href="{{ route('movies.destroy', $movie->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

        </div>

    </div>
@endsection

