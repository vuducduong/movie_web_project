

@extends('layouts.layout')
{{--@section('title', 'danh sah phim')--}}

@section('movie')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Đạo Diễn</h1>
            </div>
            <a style="position: absolute;left: 90%" class="btn btn-primary" href="{{ route('directors.create') }}">Thêm mới</a>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên</th>


                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($directors) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($directors as $key => $director)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $director->name }}</td>

                            <td><a class="btn btn-warning" href="{{ route('directors.edit', $director->id) }}">sửa</a></td>
                            <td><a class="btn btn-danger"  href="{{ route('directors.destroy', $director->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>


            {{--            <div style="font-size:20px;text-align: right!important; ">--}}
            {{--                {{$movie->links()}}--}}
            {{--            </div>--}}

        </div>

    </div>
@endsection
