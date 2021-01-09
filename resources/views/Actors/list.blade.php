@extends('layouts.layout')

@section('title')
    <div class="iq-search-bar ml-auto">
        <form action="{{route('actors.complete_search')}}"  method="post">
            @csrf
            <input name="search" type="text" class="text search-input" placeholder="Search Here...">
            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
        </form>
    </div>
@endsection


@section('movie')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Diễn Viên</h1>
            </div>
            <a style="position: absolute;left: 90%" class="btn btn-primary" href="{{ route('actors.create') }}">Thêm mới</a>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên Diễn Viên</th>
                    <th scope="col">Ngày Sinh </th>
                    <th scope="col">Quốc Gia</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Thao Tác</th>

                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($actors) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($actors as $key => $actor)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $actor->name }}</td>
                            <td>{{ $actor->year }}</td>
                            <td>{{ $actor->country }}</td>


                            <td><img src="{{ asset($actor->image) }}" height="100px" width="100px"></td>


                            <td><a class="btn btn-warning" href="{{ route('actors.edit', $actor->id) }}">sửa</a>
                            <a class="btn btn-danger"  href="{{ route('actors.destroy', $actor->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

        </div>

    </div>
@endsection
