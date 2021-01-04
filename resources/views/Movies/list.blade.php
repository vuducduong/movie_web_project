{{--@extends('home')--}}
{{--@section('title')--}}
{{--    <div class="search-box">--}}
{{--        <form class="input" action="{{route('customers.search')}}" method="post">--}}

{{--            @csrf--}}
{{--            <input class="sb-search-input input__field--madoka" name="search" placeholder="Search..." type="search" id="input-31" />--}}
{{--            <label class="input__label" for="input-31">--}}
{{--                <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">--}}
{{--                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>--}}
{{--                </svg>--}}
{{--            </label>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Phim</h1>
            </div>
            <a class="btn btn-outline-primary" href="" data-toggle="modal" data-target="#cityModal">
                Tìm Kiếm
            </a>
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
                            <td>{{ $movie->conntry->name }}</td>
                            <td>{{ $movie->director->name }}</td>
                            <td>{{ $movie->image }}</td>
                            <td>{{ $movie->video }}</td>
                            <td><a class="btn btn-warning" href="{{ route('movies.edit', $movie->id) }}">sửa</a></td>
                            <td><a class="btn btn-danger"  href="{{ route('movies.destroy', $movie->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>


            <div style="font-size:20px;text-align: right!important; ">
                {{$movie->links()}}
            </div>

        </div>

    </div>
@endsection

