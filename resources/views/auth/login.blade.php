{{-- @extends('layouts.app') --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@include('layouts.header_login')



<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-2 pl-4 header">
                <div class="header-login py-1 container d-flex" style="justify-content:space-between">

                    <img src="{{ asset('public/img/logo.png') }}" width="229px" height="52px" alt="" />
                    {{-- <a class="mt-3" href="">Đăng nhập Bưu cục</a> --}}
                    <a class="mt-3" href="{{ route('client') }}">Đăng nhập Client</a>

                    {{-- <img src="{{ asset('public/img/uts.jpg') }}" width="129px" height="49px" alt="" /> --}}
                </div>
            </div>
        </div>

        <div class="login-form mt-5">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group text-center py-3 mb-0 border-h-login mb-5">
                    <label class="" for="">Đăng nhập admin</label>
                </div>
                <div class="form-group login-input-item mx-3">
                    <label class="mb-0" for="email">Số điện thoại/Email</label>
                    <input id="email" type="email"
                        class="form-control text-muted mb-2 @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Nhập email hoặc số điện thoại" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group login-input-item mx-3">
                    <label class="mb-0" for="password">Mật khẩu</label>

                    <input id="password" type="password"
                        class="form-control mb-2 @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password" placeholder="Nhập mật khẩu">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="eye-icon">
                        <i class="far fa-eye cursor-pointer"></i>
                    </div>
                </div>


                <div class="login-btn form-group mx-3">
                    <button type="submit" class="btn w-100">ĐĂNG NHẬP</button>
                </div>
                <div class="login-input-item forgot-password text-right mr-3">
                    <label for=""><a style="text-decoration: none" href=""><small class="color-red">Quên
                                mật khẩu?</small></a></label>
                </div>
            </form>
            <div class="text-center my-4 pb-4 "><span class="mr-1">Bạn chưa có tài khoản?</span><a href="">Đăng
                    ký ngay</a></div>
        </div>
    </div>

</body>




<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script></script>
