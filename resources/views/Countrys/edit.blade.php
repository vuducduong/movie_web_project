@extends('layouts.layout')

@section('movie')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh Sửa THông Tin Quốc Gia</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('country.update', $country->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên thanh pho</label>
                        <input type="text" class="form-control" name="name"  value="{{ $country->name }}"  required>
                    </div>



                    <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

