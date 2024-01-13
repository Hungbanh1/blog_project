@extends('layouts.admin.admin')
@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Thêm tác giả
            </div>
            <div class="card-body">
                <form action="{{ route('author_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="page_title">Tên tác giả</label>
                        <input class="form-control" type="text" name="name" id="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="page_title">Số điện thoại</label>
                        <input class="form-control" type="tel" name="phone" id="phone">
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="page_title">Email</label>
                        <input class="form-control" type="email" name="email" id="email">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm tác giả</button>
                </form>
            </div>
        </div>
    </div>
@endsection
