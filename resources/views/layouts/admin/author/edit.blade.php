@extends('layouts.admin.admin')
@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                CHỈNH SỬA THÔNG TIN TÁC GIẢ
            </div>
            <div class="card-body">
                <form action="{{ route('update_author', $authors->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="page_title">Tên tác giả</label>
                        <input class="form-control" type="text" value="{{ $authors->name }}" name="name"
                            id="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="page_title">Số điện thoại</label>
                        <input class="form-control" type="tel" value="{{ $authors->phone }}" name="phone"
                            id="phone">
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="page_title">Email</label>
                        <input class="form-control" type="email" value="{{ $authors->email }}" name="email"
                            id="email">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection
