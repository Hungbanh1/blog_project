{{-- @extends('layouts.app') --}}

@include('layouts.header_login')


<body>
    {{-- <script>
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Test Success Message",
            showConfirmButton: false,
            timer: 3000,
        });
    </script> --}}
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Đăng ký thành công",
                    showConfirmButton: false,
                    timer: 3000,
                });

                setTimeout(function() {
                    window.location.href = '{{ route('client') }}';
                }, 2678);
            });
        </script>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-2 pl-4 header">
                <div class="header-login py-1 container d-flex" style="justify-content:space-between">

                    <img src="{{ asset('public/img/logo.png') }}" width="229px" height="52px" alt="" />
                    <a class="mt-3" href="{{ route('login') }}">Đăng nhập Admin</a>
                    {{-- <img src="{{ asset('public/img/uts.jpg') }}" width="129px" height="49px" alt="" /> --}}
                </div>
            </div>
        </div>

        <div class="login-form mt-5">
            <form method="POST" action="{{ route('RegisterClient') }}">
                @csrf
                <div class="form-group text-left py-3 pl-3">
                    <label class="font-weight-bold signup-title" for="">Tạo tài khoản</label>
                </div>
                {{-- //ho va ten  --}}
                <div class="form-group login-input-item mx-3">
                    <label class="mb-0" for="name">Tên</label>
                    <input id="name" type="text"
                        class="form-control text-muted mb-2 @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Nhập họ và tên">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- //email  --}}
                <div class="form-group login-input-item mx-3">
                    <label class="mb-0" for="email">Email</label>
                    <input id="email" type="email" class="form-control  mb-2 @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" autocomplete="email"
                        placeholder="Nhập số điện thoại hoặc email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group login-input-item mx-3">
                    <label for="title">Chức vị</label>
                    <select class="form-control" id="title" name="title">
                        <option>Chọn</option>
                        @foreach ($list_title as $key => $v)
                            {{-- <option value={{ $key }}>{{ $v }}</option> --}}
                            <option value="{!! $v !!}">{!! $v !!}</option>
                        @endforeach
                    </select>
                </div>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                {{-- //password  --}}
                <div class="form-group login-input-item mx-3">
                    <label class="mb-0" for="password">Mật khẩu</label>
                    <input id="password" type="password"
                        class="form-control mb-2 @error('password') is-invalid @enderror" name="password"
                        autocomplete="new-password" placeholder="Nhập mật khẩu">
                    <div class="eye-icon">
                        <i class="far fa-eye cursor-pointer"></i>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- //confirm-password  --}}
                <div class="form-group login-input-item mx-3">
                    <label class="mb-0" for="confirm-password">Xác nhận mật khẩu </label>
                    <input name="password_confirmation" id="confirm_password" type="password" class="form-control mb-2"
                        placeholder="Nhập mật khẩu">
                    <div class="eye-icon">
                        <i class="far fa-eye cursor-pointer"></i>
                    </div>

                </div>



                <div class="login-btn form-group mx-3 pb-5">
                    <button type="submit" class="btn w-100">ĐĂNG KÝ NGAY
                    </button>
                </div>
            </form>
            {{-- <div class="px-3 color-green">Nếu quý khách không đăng ký được thông tin tài khoản, vui lòng liên hệ Chăm
                sóc khách hàng của ViettelPost (1900 8095) để được hỗ trợ.</div>
            <div class="px-3 fts-12 pb-5">Khi nhấn Đăng ký, bạn đã đồng ý thực hiện mọi giao dịch mua bán theo <a
                    href="" style="text-decoration: none"> Điều kiện sử dụng & chính sách</a> của bưu chính
                Viettel.</div> --}}
            <div class="text-center my-4 pb-4 "><span class="mr-1">Quay trở lại</span><a
                    href="{{ route('client') }}">Đăng nhập</a></div>
        </div>
    </div>

</body>




<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script></script>
