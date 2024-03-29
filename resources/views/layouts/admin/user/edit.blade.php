@extends('layouts.admin.admin')
@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                CHỈNH SỦA THÔNG TIN NGƯỜI DÙNG
            </div>
            <div class="card-body">
                <form action="{{ route('update_user', $users->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input class="form-control" type="text" name="name" value="{{ $users->name }}" id="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" value="{{ $users->email }}" disabled
                            id="email">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input class="form-control" type="password" name="password" id="password">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Xác nhận mật khẩu</label>
                        <input class="form-control" type="password" name="confirm-password" id="confirm-password">

                    </div>
                    <div class="form-group">
                        <label for="permission">Nhóm quyền</label>
                        <select class="form-control" id="permission" name="permission">
                            <option>Chọn quyền</option>
                            @foreach ($users->roles as $item_roles)
                                @foreach ($role as $v)
                                    <option {{ $v->id == $item_roles->id ? 'selected' : '' }} value="{{ $v->id }}">
                                        {{ $v->name }}</option>
                                @endforeach
                            @endforeach

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
@endsection
